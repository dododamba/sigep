<?php

namespace App\Controller;

use App\Entity\Audit;
use App\Form\AuditType;
use App\Repository\AuditRepository;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/audits')]
class AuditController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private AuditRepository $auditRepository,
        private ProjectRepository $projectRepository
    ) {}

    #[Route('/', name: 'app_audit_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 20;
        
        $audits = $this->auditRepository->findAllWithPagination($page, $limit);
        $total = $this->auditRepository->countAll();
        $totalPages = ceil($total / $limit);

        $statistiques = [
            'par_statut' => $this->auditRepository->getStatistiquesByStatut(),
            'par_type' => $this->auditRepository->getStatistiquesByType(),
            'par_niveau' => $this->auditRepository->getStatistiquesByNiveau(),
        ];

        return $this->render('audit/index.html.twig', [
            'audits' => $audits,
            'page' => $page,
            'total_pages' => $totalPages,
            'total' => $total,
            'statistiques' => $statistiques,
        ]);
    }

    #[Route('/nouveau', name: 'app_audit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $audit = new Audit();
        $form = $this->createForm(AuditType::class, $audit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $documentsFiles = $form->get('documentsFiles')->getData();
            if ($documentsFiles) {
                $documents = [];
                foreach ($documentsFiles as $file) {
                    $documents[] = $this->handleFileUpload($file, $slugger, 'documents');
                }
                $audit->setDocuments($documents);
            }

            $photosFiles = $form->get('photosFiles')->getData();
            if ($photosFiles) {
                $photos = [];
                foreach ($photosFiles as $file) {
                    $photos[] = $this->handleFileUpload($file, $slugger, 'photos');
                }
                $audit->setPhotos($photos);
            }

            $audit->setCreatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            $audit->setStatut('planifie');

            $this->entityManager->persist($audit);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'audit a été créé avec succès.');
            
            return $this->redirectToRoute('app_audit_show', ['id' => $audit->getId()]);
        }

        return $this->render('audit/new.html.twig', [
            'audit' => $audit,
            'form' => $form,
            'projets' => $this->projectRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_audit_show', methods: ['GET'])]
    public function show(Audit $audit): Response
    {
        return $this->render('audit/show.html.twig', [
            'audit' => $audit,
        ]);
    }

    #[Route('/{id}/modifier', name: 'app_audit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Audit $audit, SluggerInterface $slugger): Response
    {
        if (!$audit->isModifiable()) {
            $this->addFlash('error', 'Cet audit ne peut plus être modifié.');
            return $this->redirectToRoute('app_audit_show', ['id' => $audit->getId()]);
        }

        $form = $this->createForm(AuditType::class, $audit, [
            'show_status_fields' => $this->isGranted('ROLE_ADMIN'),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $documentsFiles = $form->get('documentsFiles')->getData();
            if ($documentsFiles) {
                $existingDocs = $audit->getDocuments();
                foreach ($documentsFiles as $file) {
                    $existingDocs[] = $this->handleFileUpload($file, $slugger, 'documents');
                }
                $audit->setDocuments($existingDocs);
            }

            $photosFiles = $form->get('photosFiles')->getData();
            if ($photosFiles) {
                $existingPhotos = $audit->getPhotos();
                foreach ($photosFiles as $file) {
                    $existingPhotos[] = $this->handleFileUpload($file, $slugger, 'photos');
                }
                $audit->setPhotos($existingPhotos);
            }

            $audit->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'audit a été modifié avec succès.');
            
            return $this->redirectToRoute('app_audit_show', ['id' => $audit->getId()]);
        }

        return $this->render('audit/edit.html.twig', [
            'audit' => $audit,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/supprimer', name: 'app_audit_delete', methods: ['POST'])]
    public function delete(Request $request, Audit $audit): Response
    {
        if (!$audit->isModifiable()) {
            $this->addFlash('error', 'Cet audit ne peut pas être supprimé.');
            return $this->redirectToRoute('app_audit_index');
        }

        if ($this->isCsrfTokenValid('delete'.$audit->getId(), $request->request->get('_token'))) {
            $this->deleteFiles($audit);

            $this->entityManager->remove($audit);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'audit a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_audit_index');
    }

    private function handleFileUpload($file, SluggerInterface $slugger, string $type = 'documents'): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

        try {
            $directory = $type === 'photos' 
                ? $this->getParameter('images')
                : $this->getParameter('documents');
                
            $file->move($directory, $newFilename);
            return $newFilename;
        } catch (FileException $e) {
            throw new Exception('Erreur lors de l\'upload du fichier');
        }
    }

    private function deleteFiles(Audit $audit): void
    {
        foreach ($audit->getDocuments() as $doc) {
            $file = $this->getParameter('documents').'/'.$doc;
            if (file_exists($file)) {
                unlink($file);
            }
        }

        foreach ($audit->getPhotos() as $photo) {
            $file = $this->getParameter('images').'/'.$photo;
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }
}
