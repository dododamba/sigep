<?php

namespace App\Controller;

use App\Entity\Decaissement;
use App\Form\DecaissementType;
use App\Repository\DecaissementRepository;
use App\Repository\FinancementRepository;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/decaissements')]
class DecaissementController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private DecaissementRepository $decaissementRepository,
        private ProjectRepository $projetRepository,
        private FinancementRepository $financementRepository
    ) {}

    /**
     * Liste des décaissements
     */
    #[Route('/', name: 'app_decaissement_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 20;
        
        $decaissements = $this->decaissementRepository->findAllWithPagination($page, $limit);
        $total = $this->decaissementRepository->countAll();
        $totalPages = ceil($total / $limit);

        // Statistiques
        $statistiques = $this->decaissementRepository->getStatistiquesByStatut();
        $decaissementsRecents = $this->decaissementRepository->findRecent(5);

        return $this->render('decaissement/index.html.twig', [
            'decaissements' => $decaissements,
            'page' => $page,
            'total_pages' => $totalPages,
            'total' => $total,
            'statistiques' => $statistiques,
            'decaissements_recents' => $decaissementsRecents,
        ]);
    }

    /**
     * Créer un nouveau décaissement
     */
    #[Route('/nouveau', name: 'app_decaissement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $decaissement = new Decaissement();
        $form = $this->createForm(DecaissementType::class, $decaissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload de fichier
            $pieceJustificative = $form->get('pieceJustificative')->getData();
            
            if ($pieceJustificative) {
                $originalFilename = pathinfo($pieceJustificative->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pieceJustificative->guessExtension();

                try {
                    $pieceJustificative->move(
                        $this->getParameter('documents'),
                        $newFilename
                    );
                    $decaissement->setPieceJustificative($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier');
                }
            }

            // Définir les métadonnées
            $decaissement->setCreatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            $decaissement->setStatut('en_attente');

            $this->entityManager->persist($decaissement);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été créé avec succès.');
            
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        return $this->render('decaissement/new.html.twig', [
            'decaissement' => $decaissement,
            'form' => $form,
            'projets' => $this->projetRepository->findAll(),
            'financements' => $this->financementRepository->findAll(),
        ]);
    }

    /**
     * Afficher un décaissement
     */
    #[Route('/{id}', name: 'app_decaissement_show', methods: ['GET'])]
    public function show(Decaissement $decaissement): Response
    {
        return $this->render('decaissement/show.html.twig', [
            'decaissement' => $decaissement,
        ]);
    }

    /**
     * Modifier un décaissement
     */
    #[Route('/{id}/modifier', name: 'app_decaissement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Decaissement $decaissement, SluggerInterface $slugger): Response
    {
        if (!$decaissement->isModifiable()) {
            $this->addFlash('error', 'Ce décaissement ne peut plus être modifié.');
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        $form = $this->createForm(DecaissementType::class, $decaissement, [
            'show_status_fields' => $this->isGranted('ROLE_ADMIN'), // Seuls les admins peuvent modifier le statut
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload de fichier
            $pieceJustificative = $form->get('pieceJustificative')->getData();
            
            if ($pieceJustificative) {
                $originalFilename = pathinfo($pieceJustificative->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pieceJustificative->guessExtension();

                try {
                    $pieceJustificative->move(
                        $this->getParameter('documents'),
                        $newFilename
                    );
                    
                    // Supprimer l'ancien fichier si existant
                    if ($decaissement->getPieceJustificative()) {
                        $oldFile = $this->getParameter('documents').'/'.$decaissement->getPieceJustificative();
                        if (file_exists($oldFile)) {
                            unlink($oldFile);
                        }
                    }
                    
                    $decaissement->setPieceJustificative($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier');
                }
            }

            $decaissement->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été modifié avec succès.');
            
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        return $this->render('decaissement/edit.html.twig', [
            'decaissement' => $decaissement,
            'form' => $form,
        ]);
    }

    /**
     * Supprimer un décaissement
     */
    #[Route('/{id}/supprimer', name: 'app_decaissement_delete', methods: ['POST'])]
    public function delete(Request $request, Decaissement $decaissement): Response
    {
        if (!$decaissement->isModifiable()) {
            $this->addFlash('error', 'Ce décaissement ne peut pas être supprimé.');
            return $this->redirectToRoute('app_decaissement_index');
        }

        if ($this->isCsrfTokenValid('delete'.$decaissement->getId(), $request->request->get('_token'))) {
            // Supprimer le fichier associé si existant
            if ($decaissement->getPieceJustificative()) {
                $file = $this->getParameter('documents').'/'.$decaissement->getPieceJustificative();
                if (file_exists($file)) {
                    unlink($file);
                }
            }

            $this->entityManager->remove($decaissement);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_decaissement_index');
    }

    /**
     * Valider un décaissement
     */
    #[Route('/{id}/valider', name: 'app_decaissement_validate', methods: ['POST'])]
    public function validate(Request $request, Decaissement $decaissement): Response
    {
        if ($decaissement->getStatut() !== 'en_attente') {
            $this->addFlash('error', 'Ce décaissement ne peut pas être validé.');
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        if ($this->isCsrfTokenValid('validate'.$decaissement->getId(), $request->request->get('_token'))) {
            $decaissement->setStatut('valide');
            $decaissement->setDateValidation(new \DateTime());
            $decaissement->setValidePar($this->getUser()?->getUserIdentifier() ?? 'system');
            $decaissement->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été validé avec succès.');
        }

        return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
    }

    /**
     * Exécuter un décaissement
     */
    #[Route('/{id}/executer', name: 'app_decaissement_execute', methods: ['POST'])]
    public function execute(Request $request, Decaissement $decaissement): Response
    {
        if ($decaissement->getStatut() !== 'valide') {
            $this->addFlash('error', 'Ce décaissement doit être validé avant d\'être exécuté.');
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        if ($this->isCsrfTokenValid('execute'.$decaissement->getId(), $request->request->get('_token'))) {
            $decaissement->setStatut('execute');
            $decaissement->setDateExecution(new \DateTime());
            $decaissement->setExecutePar($this->getUser()?->getUserIdentifier() ?? 'system');
            $decaissement->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été exécuté avec succès.');
        }

        return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
    }

    /**
     * Rejeter un décaissement
     */
    #[Route('/{id}/rejeter', name: 'app_decaissement_reject', methods: ['POST'])]
    public function reject(Request $request, Decaissement $decaissement): Response
    {
        if (!in_array($decaissement->getStatut(), ['en_attente', 'valide'])) {
            $this->addFlash('error', 'Ce décaissement ne peut pas être rejeté.');
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        if ($this->isCsrfTokenValid('reject'.$decaissement->getId(), $request->request->get('_token'))) {
            $commentaire = $request->request->get('commentaire');
            
            $decaissement->setStatut('rejete');
            $decaissement->setCommentaire($commentaire);
            $decaissement->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été rejeté.');
        }

        return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
    }

    /**
     * Annuler un décaissement
     */
    #[Route('/{id}/annuler', name: 'app_decaissement_cancel', methods: ['POST'])]
    public function cancel(Request $request, Decaissement $decaissement): Response
    {
        if (!$decaissement->isAnnulable()) {
            $this->addFlash('error', 'Ce décaissement ne peut pas être annulé.');
            return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
        }

        if ($this->isCsrfTokenValid('cancel'.$decaissement->getId(), $request->request->get('_token'))) {
            $commentaire = $request->request->get('commentaire');
            
            $decaissement->setStatut('annule');
            $decaissement->setCommentaire($commentaire);
            $decaissement->setUpdatedBy($this->getUser()?->getUserIdentifier() ?? 'system');
            
            $this->entityManager->flush();

            $this->addFlash('success', 'Le décaissement a été annulé.');
        }

        return $this->redirectToRoute('app_decaissement_show', ['id' => $decaissement->getId()]);
    }

    /**
     * API: Liste des décaissements (JSON)
     */
    #[Route('/api/list', name: 'app_decaissement_api_list', methods: ['GET'])]
    public function apiList(Request $request): JsonResponse
    {
        $criteria = [];
        
        if ($request->query->has('statut')) {
            $criteria['statut'] = $request->query->get('statut');
        }
        
        if ($request->query->has('projet_id')) {
            $criteria['projet_id'] = $request->query->get('projet_id');
        }
        
        if ($request->query->has('financement_id')) {
            $criteria['financement_id'] = $request->query->get('financement_id');
        }

        $decaissements = $this->decaissementRepository->search($criteria);

        $data = array_map(function(Decaissement $d) {
            return [
                'id' => $d->getId(),
                'reference' => $d->getReference(),
                'beneficiaire' => $d->getBeneficiaire(),
                'montant' => $d->getMontant(),
                'devise' => $d->getDevise(),
                'montant_formate' => $d->getMontantFormate(),
                'statut' => $d->getStatut(),
                'statut_label' => $d->getStatutLabel(),
                'date_demande' => $d->getDateDemande()->format('Y-m-d'),
                'projet' => [
                    'id' => $d->getProjet()->getId(),
                    'titre' => $d->getProjet()->getTitre(),
                ],
                'financement' => [
                    'id' => $d->getFinancement()->getId(),
                    'reference' => $d->getFinancement()->getReference(),
                ],
            ];
        }, $decaissements);

        return $this->json($data);
    }

    /**
     * API: Statistiques des décaissements
     */
    #[Route('/api/statistiques', name: 'app_decaissement_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        $stats = $this->decaissementRepository->getStatistiquesByStatut();
        $statsByMonth = $this->decaissementRepository->getStatistiquesByMonth(date('Y'));
        $topBeneficiaires = $this->decaissementRepository->getTopBeneficiaires(10);

        return $this->json([
            'par_statut' => $stats,
            'par_mois' => $statsByMonth,
            'top_beneficiaires' => $topBeneficiaires,
        ]);
    }
}
