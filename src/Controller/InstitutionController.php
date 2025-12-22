<?php

namespace App\Controller;

use App\Entity\Institution;
use App\Form\InstitutionType;
use App\Repository\InstitutionRepository;
use App\Repository\TypeInstitutionRepository;
use App\Repository\SectorInstitutionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/institutions')]
class InstitutionController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private InstitutionRepository $institutionRepository,
        private TypeInstitutionRepository $typeInstitutionRepository,
        private SectorInstitutionRepository $sectorInstitutionRepository,
        private SluggerInterface $slugger
    ) {}

    /**
     * Liste des institutions
     */
    #[Route('', name: 'app_institutions', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $search = $request->query->get('search');
        $status = $request->query->get('status');
        $typeId = $request->query->getInt('type');
        $sectorId = $request->query->getInt('sector');
        $page = $request->query->getInt('page', 1);
        $limit = 10;

        $institutions = $this->institutionRepository->findPaginated(
            $page,
            $limit,
            $search,
            $status,
            $typeId ?: null,
            $sectorId ?: null
        );

        $total = $this->institutionRepository->countFiltered($search, $status, $typeId ?: null, $sectorId ?: null);
        $totalPages = ceil($total / $limit);

        // Statistiques
        $stats = [
            'total' => $this->institutionRepository->count([]),
            'actifs' => $this->institutionRepository->count(['status' => 'Actif']),
            'byStatus' => $this->institutionRepository->countByStatus(),
            'byType' => $this->institutionRepository->countByType(),
            'bySector' => $this->institutionRepository->countBySector(),
        ];

        return $this->render('institution/index.html.twig', [
            'institutions' => $institutions,
            'types' => $this->typeInstitutionRepository->findAllOrdered(),
            'sectors' => $this->sectorInstitutionRepository->findAllOrdered(),
            'stats' => $stats,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
            'search' => $search,
            'currentStatus' => $status,
            'currentType' => $typeId,
            'currentSector' => $sectorId,
        ]);
    }

    /**
     * Créer une nouvelle institution
     */
    #[Route('/new', name: 'app_institutions_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $institution = new Institution();
        $form = $this->createForm(InstitutionType::class, $institution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $logoFile->guessExtension();

                try {
                    $logoFile->move(
                        $this->getParameter('images'),
                        $newFilename
                    );
                    $institution->setLogo($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo.');
                }
            }

            $this->entityManager->persist($institution);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'institution "' . $institution->getName() . '" a été créée avec succès.');
            return $this->redirectToRoute('app_institutions');
        }

        return $this->render('institution/new.html.twig', [
            'institution' => $institution,
            'form' => $form,
        ]);
    }

    /**
     * Afficher une institution
     */
    #[Route('/{slug}', name: 'app_institutions_show', methods: ['GET'], priority: -1)]
    public function show(string $slug): Response
    {
        $institution = $this->institutionRepository->findBySlug($slug);

        if (!$institution) {
            throw $this->createNotFoundException('Institution non trouvée.');
        }

        return $this->render('institution/show.html.twig', [
            'institution' => $institution,
        ]);
    }

    /**
     * Modifier une institution
     */
    #[Route('/{id}/edit', name: 'app_institutions_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Institution $institution): Response
    {
        $form = $this->createForm(InstitutionType::class, $institution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                // Supprimer l'ancien logo s'il existe
                if ($institution->getLogo()) {
                    $oldLogoPath = $this->getParameter('images') . '/' . $institution->getLogo();
                    if (file_exists($oldLogoPath)) {
                        unlink($oldLogoPath);
                    }
                }

                $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $logoFile->guessExtension();

                try {
                    $logoFile->move(
                        $this->getParameter('images'),
                        $newFilename
                    );
                    $institution->setLogo($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo.');
                }
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'L\'institution "' . $institution->getName() . '" a été modifiée avec succès.');
            return $this->redirectToRoute('app_institutions');
        }

        return $this->render('institution/edit.html.twig', [
            'institution' => $institution,
            'form' => $form,
        ]);
    }

    /**
     * Supprimer une institution
     */
    #[Route('/{id}', name: 'app_institutions_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, Institution $institution): Response
    {
        if ($this->isCsrfTokenValid('delete' . $institution->getId(), $request->request->get('_token'))) {
            // Supprimer le logo s'il existe
            if ($institution->getLogo()) {
                $logoPath = $this->getParameter('images') . '/' . $institution->getLogo();
                if (file_exists($logoPath)) {
                    unlink($logoPath);
                }
            }

            $institutionName = $institution->getName();
            $this->entityManager->remove($institution);
            $this->entityManager->flush();

            $this->addFlash('success', 'L\'institution "' . $institutionName . '" a été supprimée.');
        }

        return $this->redirectToRoute('app_institutions');
    }

    /**
     * API: Recherche d'institutions (AJAX)
     */
    #[Route('/api/search', name: 'app_institutions_api_search', methods: ['GET'], priority: 10)]
    public function apiSearch(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        $institutions = $this->institutionRepository->search($query);

        $data = array_map(function (Institution $institution) {
            return [
                'id' => $institution->getId(),
                'name' => $institution->getName(),
                'acronym' => $institution->getAcronym(),
                'type' => $institution->getTypeInstitution()?->getName(),
                'sector' => $institution->getSector()?->getName(),
                'status' => $institution->getStatus(),
                'logo' => $institution->getLogo(),
            ];
        }, $institutions);

        return $this->json($data);
    }

    /**
     * API: Statistiques des institutions
     */
    #[Route('/api/stats', name: 'app_institutions_api_stats', methods: ['GET'], priority: 10)]
    public function apiStats(): JsonResponse
    {
        return $this->json([
            'total' => $this->institutionRepository->count([]),
            'actifs' => $this->institutionRepository->count(['status' => 'Actif']),
            'inactifs' => $this->institutionRepository->count(['status' => 'Inactif']),
            'byType' => $this->institutionRepository->countByType(),
            'bySector' => $this->institutionRepository->countBySector(),
            'recent' => array_map(function (Institution $i) {
                return [
                    'id' => $i->getId(),
                    'name' => $i->getName(),
                    'acronym' => $i->getAcronym(),
                    'createdAt' => $i->getCreatedAt()?->format('Y-m-d H:i:s'),
                ];
            }, $this->institutionRepository->findRecent(5)),
        ]);
    }

    /**
     * Changer le statut d'une institution (AJAX)
     */
    #[Route('/{id}/toggle-status', name: 'app_institutions_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Institution $institution): JsonResponse
    {
        if (!$this->isCsrfTokenValid('toggle' . $institution->getId(), $request->request->get('_token'))) {
            return $this->json(['error' => 'Token CSRF invalide'], Response::HTTP_FORBIDDEN);
        }

        $newStatus = $institution->getStatus() === 'Actif' ? 'Inactif' : 'Actif';
        $institution->setStatus($newStatus);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'status' => $newStatus,
            'message' => 'Statut mis à jour avec succès.',
        ]);
    }
}
