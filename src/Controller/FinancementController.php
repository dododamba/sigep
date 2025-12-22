<?php

namespace App\Controller;

use App\Entity\Financement;
use App\Form\FinancementType;
use App\Repository\FinancementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/financements')]
class FinancementController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private FinancementRepository $financementRepository
    ) {}

    /**
     * Liste des financements avec filtres et pagination
     */
    #[Route('', name: 'app_financements', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        $search = $request->query->get('search');
        $statut = $request->query->get('statut');
        $bailleur = $request->query->get('bailleur');
        $type = $request->query->get('type');

        $financements = $this->financementRepository->findPaginated($page, $limit, $search, $statut, $bailleur, $type);
        $totalFinancements = $this->financementRepository->countFiltered($search, $statut, $bailleur, $type);
        $totalPages = ceil($totalFinancements / $limit);

        // Statistiques
        $stats = [
            'total' => $this->financementRepository->count([]),
            'actifs' => $this->financementRepository->count(['statut' => Financement::STATUT_ACTIF]),
            'enNegociation' => $this->financementRepository->count(['statut' => Financement::STATUT_EN_NEGOCIATION]),
            'clotures' => $this->financementRepository->count(['statut' => Financement::STATUT_CLOTURE]),
        ];

        // Montants totaux
        $montantTotal = $this->financementRepository->getTotalMontantEngage();
        $montantDecaisse = $this->financementRepository->getTotalMontantDecaisse();

        return $this->render('financement/index.html.twig', [
            'financements' => $financements,
            'stats' => $stats,
            'montantTotal' => $montantTotal,
            'montantDecaisse' => $montantDecaisse,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalFinancements' => $totalFinancements,
            'search' => $search,
            'statut' => $statut,
            'bailleur' => $bailleur,
            'type' => $type,
            'statuts' => Financement::getStatuts(),
            'bailleurs' => Financement::getBailleurs(),
            'types' => Financement::getTypes(),
        ]);
    }

    /**
     * Création d'un nouveau financement
     */
    #[Route('/new', name: 'app_financements_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $financement = new Financement();
        
        // Générer un numéro de convention par défaut
        $financement->setNumeroConvention($this->financementRepository->generateNumeroConvention('bm'));
        
        $form = $this->createForm(FinancementType::class, $financement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($financement);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le financement "' . $financement->getNumeroConvention() . '" a été créé avec succès.');

            return $this->redirectToRoute('app_financements');
        }

        return $this->render('financement/new.html.twig', [
            'financement' => $financement,
            'form' => $form,
            'bailleurs' => Financement::getBailleurs(),
            'types' => Financement::getTypes(),
        ]);
    }

    /**
     * Affichage d'un financement
     */
    #[Route('/{slug}', name: 'app_financements_show', methods: ['GET'], priority: -1)]
    public function show(string $slug): Response
    {
        $financement = $this->financementRepository->findBySlug($slug);
        
        if (!$financement) {
            throw $this->createNotFoundException('Financement non trouvé');
        }

        return $this->render('financement/show.html.twig', [
            'financement' => $financement,
        ]);
    }

    /**
     * Modification d'un financement
     */
    #[Route('/{id}/edit', name: 'app_financements_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response
    {
        $financement = $this->financementRepository->find($id);
        
        if (!$financement) {
            throw $this->createNotFoundException('Financement non trouvé');
        }

        $form = $this->createForm(FinancementType::class, $financement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Le financement "' . $financement->getNumeroConvention() . '" a été mis à jour avec succès.');

            return $this->redirectToRoute('app_financements');
        }

        return $this->render('financement/edit.html.twig', [
            'financement' => $financement,
            'form' => $form,
            'bailleurs' => Financement::getBailleurs(),
            'types' => Financement::getTypes(),
        ]);
    }

    /**
     * Suppression d'un financement
     */
    #[Route('/{id}', name: 'app_financements_delete', methods: ['POST'])]
    public function delete(Request $request, int $id): Response
    {
        $financement = $this->financementRepository->find($id);
        
        if (!$financement) {
            throw $this->createNotFoundException('Financement non trouvé');
        }

        if ($this->isCsrfTokenValid('delete' . $financement->getId(), $request->request->get('_token'))) {
            $numero = $financement->getNumeroConvention();
            $this->entityManager->remove($financement);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le financement "' . $numero . '" a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_financements');
    }

    /**
     * API: Recherche de financements
     */
    #[Route('/api/search', name: 'app_financements_api_search', methods: ['GET'], priority: 10)]
    public function apiSearch(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return $this->json([]);
        }

        $financements = $this->financementRepository->search($query);
        
        $results = array_map(function($financement) {
            return [
                'id' => $financement->getId(),
                'numeroConvention' => $financement->getNumeroConvention(),
                'bailleur' => $financement->getBailleurLabel(),
                'bailleurShort' => $financement->getBailleurShortName(),
                'montantEngage' => $financement->getMontantEngage(),
                'tauxDecaissement' => $financement->getTauxDecaissement(),
                'statut' => $financement->getStatutLabel(),
                'slug' => $financement->getSlug(),
            ];
        }, $financements);

        return $this->json($results);
    }

    /**
     * API: Statistiques des financements
     */
    #[Route('/api/stats', name: 'app_financements_api_stats', methods: ['GET'], priority: 10)]
    public function apiStats(): JsonResponse
    {
        $stats = $this->financementRepository->getStatistics();
        
        return $this->json($stats);
    }

    /**
     * API: Montants par bailleur
     */
    #[Route('/api/by-bailleur', name: 'app_financements_api_by_bailleur', methods: ['GET'], priority: 10)]
    public function apiByBailleur(): JsonResponse
    {
        $data = $this->financementRepository->getMontantsByBailleur();
        
        $result = [];
        foreach ($data as $item) {
            $result[] = [
                'bailleur' => $item['bailleur'],
                'bailleurLabel' => match($item['bailleur']) {
                    'national' => 'Budget National',
                    'bm' => 'Banque Mondiale',
                    'bad' => 'BAD',
                    'afd' => 'AFD',
                    'ue' => 'Union Européenne',
                    'fida' => 'FIDA',
                    'oms' => 'OMS',
                    'pnud' => 'PNUD',
                    default => $item['bailleur']
                },
                'engage' => (float) $item['engage'],
                'decaisse' => (float) $item['decaisse'],
            ];
        }

        return $this->json($result);
    }

    /**
     * API: Génère un numéro de convention
     */
    #[Route('/api/generate-numero', name: 'app_financements_api_generate_numero', methods: ['GET'], priority: 10)]
    public function apiGenerateNumero(Request $request): JsonResponse
    {
        $bailleur = $request->query->get('bailleur', 'bm');
        $numero = $this->financementRepository->generateNumeroConvention($bailleur);
        
        return $this->json(['numero' => $numero]);
    }

    /**
     * Export des financements (JSON)
     */
    #[Route('/export/json', name: 'app_financements_export_json', methods: ['GET'], priority: 10)]
    public function exportJson(): JsonResponse
    {
        $financements = $this->financementRepository->findAll();
        
        $data = array_map(function($financement) {
            return [
                'id' => $financement->getId(),
                'numeroConvention' => $financement->getNumeroConvention(),
                'bailleur' => $financement->getBailleur(),
                'bailleurLabel' => $financement->getBailleurLabel(),
                'type' => $financement->getType(),
                'typeLabel' => $financement->getTypeLabel(),
                'dateSignature' => $financement->getDateSignature()?->format('Y-m-d'),
                'dateEcheance' => $financement->getDateEcheance()?->format('Y-m-d'),
                'montantEngage' => $financement->getMontantEngage(),
                'montantDecaisse' => $financement->getMontantDecaisse(),
                'tauxDecaissement' => $financement->getTauxDecaissement(),
                'statut' => $financement->getStatut(),
                'statutLabel' => $financement->getStatutLabel(),
            ];
        }, $financements);

        return $this->json($data);
    }
}