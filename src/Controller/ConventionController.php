<?php

namespace App\Controller;

use App\Entity\Convention;
use App\Form\ConventionType;
use App\Repository\ConventionRepository;
use App\Repository\FinancementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/conventions')]
class ConventionController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ConventionRepository $conventionRepository,
        private FinancementRepository $financementRepository
    ) {}

    /**
     * Liste des conventions
     */
    #[Route('/', name: 'app_convention_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 20;
        
        $conventions = $this->conventionRepository->findAllWithPagination($page, $limit);
        $total = $this->conventionRepository->countAll();
        $totalPages = ceil($total / $limit);

        // Statistiques
        $statistiques = [
            'par_statut' => $this->conventionRepository->getStatistiquesByStatut(),
            'par_type' => $this->conventionRepository->getStatistiquesByType(),
            'par_partenaire' => $this->conventionRepository->getStatistiquesByPartenaire(),
        ];

        return $this->render('convention/index.html.twig', [
            'conventions' => $conventions,
            'page' => $page,
            'total_pages' => $totalPages,
            'total' => $total,
            'statistiques' => $statistiques,
        ]);
    }

    /**
     * Créer une nouvelle convention
     */
    #[Route('/nouveau', name: 'app_convention_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $convention = new Convention();
        $form = $this->createForm(ConventionType::class, $convention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload du document
            $documentConvention = $form->get('documentConvention')->getData();
            
            if ($documentConvention) {
                $originalFilename = pathinfo($documentConvention->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$documentConvention->guessExtension();

                try {
                    $documentConvention->move(
                        $this->getParameter('documents'),
                        $newFilename
                    );
                    $convention->setDocumentConvention($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du document');
                }
            }

            // Définir les métadonnées
            $convention->setCreatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            $convention->setStatut('en_cours');

            $this->entityManager->persist($convention);
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été créée avec succès.');
            
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        return $this->render('convention/new.html.twig', [
            'convention' => $convention,
            'form' => $form,
            'financements' => $this->financementRepository->findAll(),
        ]);
    }

    /**
     * Afficher une convention
     */
    #[Route('/{id}', name: 'app_convention_show', methods: ['GET'])]
    public function show(Convention $convention): Response
    {
        return $this->render('convention/show.html.twig', [
            'convention' => $convention,
        ]);
    }

    /**
     * Modifier une convention
     */
    #[Route('/{id}/modifier', name: 'app_convention_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Convention $convention, SluggerInterface $slugger): Response
    {
        if (!$convention->isModifiable()) {
            $this->addFlash('error', 'Cette convention ne peut plus être modifiée.');
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        $form = $this->createForm(ConventionType::class, $convention, [
            'show_status_fields' => $this->isGranted('ROLE_ADMIN'),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload du document
            $documentConvention = $form->get('documentConvention')->getData();
            
            if ($documentConvention) {
                $originalFilename = pathinfo($documentConvention->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$documentConvention->guessExtension();

                try {
                    $documentConvention->move(
                        $this->getParameter('documents'),
                        $newFilename
                    );
                    
                    // Supprimer l'ancien document si existant
                    if ($convention->getDocumentConvention()) {
                        $oldFile = $this->getParameter('documents').'/'.$convention->getDocumentConvention();
                        if (file_exists($oldFile)) {
                            unlink($oldFile);
                        }
                    }
                    
                    $convention->setDocumentConvention($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du document');
                }
            }

            $convention->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été modifiée avec succès.');
            
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        return $this->render('convention/edit.html.twig', [
            'convention' => $convention,
            'form' => $form,
        ]);
    }

    /**
     * Supprimer une convention
     */
    #[Route('/{id}/supprimer', name: 'app_convention_delete', methods: ['POST'])]
    public function delete(Request $request, Convention $convention): Response
    {
        if (!$convention->isModifiable()) {
            $this->addFlash('error', 'Cette convention ne peut pas être supprimée.');
            return $this->redirectToRoute('app_convention_index');
        }

        if ($this->isCsrfTokenValid('delete'.$convention->getId(), $request->request->get('_token'))) {
            // Supprimer le document associé si existant
            if ($convention->getDocumentConvention()) {
                $file = $this->getParameter('documents').'/'.$convention->getDocumentConvention();
                if (file_exists($file)) {
                    unlink($file);
                }
            }

            $this->entityManager->remove($convention);
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_convention_index');
    }

    /**
     * Clôturer une convention
     */
    #[Route('/{id}/cloturer', name: 'app_convention_close', methods: ['POST'])]
    public function close(Request $request, Convention $convention): Response
    {
        if ($convention->getStatut() !== 'en_cours') {
            $this->addFlash('error', 'Seules les conventions en cours peuvent être clôturées.');
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        if ($this->isCsrfTokenValid('close'.$convention->getId(), $request->request->get('_token'))) {
            $convention->setStatut('cloture');
            $convention->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $observations = $request->request->get('observations');
            if ($observations) {
                $convention->setObservations($observations);
            }
            
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été clôturée avec succès.');
        }

        return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
    }

    /**
     * Suspendre une convention
     */
    #[Route('/{id}/suspendre', name: 'app_convention_suspend', methods: ['POST'])]
    public function suspend(Request $request, Convention $convention): Response
    {
        if ($convention->getStatut() !== 'en_cours') {
            $this->addFlash('error', 'Seules les conventions en cours peuvent être suspendues.');
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        if ($this->isCsrfTokenValid('suspend'.$convention->getId(), $request->request->get('_token'))) {
            $convention->setStatut('suspendue');
            $convention->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $observations = $request->request->get('observations');
            if ($observations) {
                $convention->setObservations($observations);
            }
            
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été suspendue.');
        }

        return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
    }

    /**
     * Réactiver une convention suspendue
     */
    #[Route('/{id}/reactiver', name: 'app_convention_reactivate', methods: ['POST'])]
    public function reactivate(Request $request, Convention $convention): Response
    {
        if ($convention->getStatut() !== 'suspendue') {
            $this->addFlash('error', 'Seules les conventions suspendues peuvent être réactivées.');
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        if ($this->isCsrfTokenValid('reactivate'.$convention->getId(), $request->request->get('_token'))) {
            $convention->setStatut('en_cours');
            $convention->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été réactivée avec succès.');
        }

        return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
    }

    /**
     * Annuler une convention
     */
    #[Route('/{id}/annuler', name: 'app_convention_cancel', methods: ['POST'])]
    public function cancel(Request $request, Convention $convention): Response
    {
        if (!in_array($convention->getStatut(), ['en_cours', 'suspendue'])) {
            $this->addFlash('error', 'Cette convention ne peut pas être annulée.');
            return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
        }

        if ($this->isCsrfTokenValid('cancel'.$convention->getId(), $request->request->get('_token'))) {
            $convention->setStatut('annulee');
            $convention->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $observations = $request->request->get('observations');
            if ($observations) {
                $convention->setObservations($observations);
            }
            
            $this->entityManager->flush();

            $this->addFlash('success', 'La convention a été annulée.');
        }

        return $this->redirectToRoute('app_convention_show', ['id' => $convention->getId()]);
    }

    /**
     * API: Liste des conventions (JSON)
     */
    #[Route('/api/list', name: 'app_convention_api_list', methods: ['GET'])]
    public function apiList(Request $request): JsonResponse
    {
        $criteria = [];
        
        if ($request->query->has('statut')) {
            $criteria['statut'] = $request->query->get('statut');
        }
        
        if ($request->query->has('type')) {
            $criteria['type'] = $request->query->get('type');
        }
        
        if ($request->query->has('financement_id')) {
            $criteria['financement_id'] = $request->query->get('financement_id');
        }

        $conventions = $this->conventionRepository->search($criteria);

        $data = array_map(function(Convention $c) {
            return [
                'id' => $c->getId(),
                'code' => $c->getCode(),
                'intitule' => $c->getIntitule(),
                'type' => $c->getType(),
                'type_label' => $c->getTypeLabel(),
                'partenaire' => $c->getPartenaire(),
                'montant_global' => $c->getMontantGlobal(),
                'devise' => $c->getDevise(),
                'montant_formate' => $c->getMontantFormate(),
                'statut' => $c->getStatut(),
                'statut_label' => $c->getStatutLabel(),
                'date_signature' => $c->getDateSignature()->format('Y-m-d'),
                'financement' => [
                    'id' => $c->getFinancement()->getId(),
                    'reference' => $c->getFinancement()->getReference(),
                ],
            ];
        }, $conventions);

        return $this->json($data);
    }

    /**
     * API: Statistiques des conventions
     */
    #[Route('/api/statistiques', name: 'app_convention_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        return $this->json([
            'par_statut' => $this->conventionRepository->getStatistiquesByStatut(),
            'par_type' => $this->conventionRepository->getStatistiquesByType(),
            'par_partenaire' => $this->conventionRepository->getStatistiquesByPartenaire(),
            'par_annee' => $this->conventionRepository->getStatistiquesByAnnee(),
            'total_montant' => $this->conventionRepository->getTotalMontant(),
            'total_contrepartie_etat' => $this->conventionRepository->getTotalContrepartieEtat(),
        ]);
    }

    /**
     * Dashboard des conventions
     */
    #[Route('/dashboard', name: 'app_convention_dashboard', methods: ['GET'])]
    public function dashboard(): Response
    {
        $statistiques = [
            'par_statut' => $this->conventionRepository->getStatistiquesByStatut(),
            'par_type' => $this->conventionRepository->getStatistiquesByType(),
            'par_partenaire' => $this->conventionRepository->getStatistiquesByPartenaire(),
            'par_annee' => $this->conventionRepository->getStatistiquesByAnnee(),
        ];

        $conventions_actives = $this->conventionRepository->findActive();
        $conventions_expirant = $this->conventionRepository->findExpiringSoon(90);
        $conventions_recentes = $this->conventionRepository->findRecent(5);

        return $this->render('convention/dashboard.html.twig', [
            'statistiques' => $statistiques,
            'conventions_actives' => $conventions_actives,
            'conventions_expirant' => $conventions_expirant,
            'conventions_recentes' => $conventions_recentes,
            'total_montant' => $this->conventionRepository->getTotalMontant(),
            'total_contrepartie' => $this->conventionRepository->getTotalContrepartieEtat(),
        ]);
    }
}
