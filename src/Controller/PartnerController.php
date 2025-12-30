<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Form\PartnerType;
use App\Repository\PartnerRepository;
use App\Repository\TypePartnerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\ActivityLogger;
use App\Entity\UserActivity;

#[Route('/partners')]
class PartnerController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private PartnerRepository $partnerRepository,
        private TypePartnerRepository $typePartnerRepository,
        private SluggerInterface $slugger,
        private ActivityLogger $activityLogger
    ) {}

    /**
     * Liste des partenaires
     */
    #[Route('', name: 'app_partners', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $search = $request->query->get('search');
        $status = $request->query->get('status');
        $typeId = $request->query->getInt('type');
        $page = $request->query->getInt('page', 1);
        $limit = 10;

        $partners = $this->partnerRepository->findPaginated(
            $page,
            $limit,
            $search,
            $status,
            $typeId ?: null
        );

        $total = $this->partnerRepository->countFiltered($search, $status, $typeId ?: null);
        $totalPages = ceil($total / $limit);

        // Statistiques
        $stats = [
            'total' => $this->partnerRepository->count([]),
            'actifs' => $this->partnerRepository->count(['status' => 'Actif']),
            'byStatus' => $this->partnerRepository->countByStatus(),
            'byType' => $this->partnerRepository->countByType(),
        ];

        $this->activityLogger->logCreate(UserActivity::ENTITY_PARTNER, $partners[0]->getId(), $partners[0]->getName());

        return $this->render('partner/index.html.twig', [
            'partners' => $partners,
            'types' => $this->typePartnerRepository->findAllOrdered(),
            'stats' => $stats,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
            'search' => $search,
            'currentStatus' => $status,
            'currentType' => $typeId,
        ]);
    }

    /**
     * Créer un nouveau partenaire
     */
    #[Route('/new', name: 'app_partners_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);
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
                    $partner->setLogo($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo.');
                }
            }

            $this->entityManager->persist($partner);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le partenaire "' . $partner->getName() . '" a été créé avec succès.');
            $this->activityLogger->logCreate( UserActivity::ENTITY_PARTNER, $partner->getId(), $partner->getName() );
            return $this->redirectToRoute('app_partners');
        }

        $this->activityLogger->logCreate( UserActivity::ENTITY_PARTNER, 0, 'Création nouveau partenaire' );

        return $this->render('partner/new.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    /**
     * Afficher un partenaire
     */
    #[Route('/{slug}', name: 'app_partners_show', methods: ['GET'])]
    public function show(string $slug): Response
    {
        $partner = $this->partnerRepository->findBySlug($slug);

        if (!$partner) {
            $this->addFlash('error', 'Partenaire non trouvé.');

            throw $this->createNotFoundException('Partenaire non trouvé.');
        }

        $this->activityLogger->logCreate( UserActivity::ENTITY_PARTNER, $partner->getId(), $partner->getName() );
        return $this->render('partner/show.html.twig', [
            'partner' => $partner,
        ]);
    }

    /**
     * Modifier un partenaire
     */
    #[Route('/{id}/edit', name: 'app_partners_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Partner $partner): Response
    {
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du logo
            $logoFile = $form->get('logoFile')->getData();
            if ($logoFile) {
                // Supprimer l'ancien logo s'il existe
                if ($partner->getLogo()) {
                    $oldLogoPath = $this->getParameter('images') . '/' . $partner->getLogo();
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
                    $partner->setLogo($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du logo.');
                }
            }

            $this->entityManager->flush();
            $this->activityLogger->logCreate( UserActivity::ENTITY_PARTNER, $partner->getId(), $partner->getName() );
            $this->addFlash('success', 'Le partenaire "' . $partner->getName() . '" a été modifié avec succès.');
            return $this->redirectToRoute('app_partners');
        }

        return $this->render('partner/edit.html.twig', [
            'partner' => $partner,
            'form' => $form,
        ]);
    }

    /**
     * Supprimer un partenaire
     */
    #[Route('/{id}', name: 'app_partners_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, Partner $partner): Response
    {
        if ($this->isCsrfTokenValid('delete' . $partner->getId(), $request->request->get('_token'))) {
            // Supprimer le logo s'il existe
            if ($partner->getLogo()) {
                $logoPath = $this->getParameter('images') . '/' . $partner->getLogo();
                if (file_exists($logoPath)) {
                    unlink($logoPath);
                }
            }

            $partnerName = $partner->getName();
            $this->entityManager->remove($partner);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le partenaire "' . $partnerName . '" a été supprimé.');
        }

        return $this->redirectToRoute('app_partners');
    }

    /**
     * API: Recherche de partenaires (AJAX)
     */
    #[Route('/api/search', name: 'app_partners_api_search', methods: ['GET'])]
    public function apiSearch(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        $partners = $this->partnerRepository->search($query);

        $data = array_map(function (Partner $partner) {
            return [
                'id' => $partner->getId(),
                'name' => $partner->getName(),
                'acronym' => $partner->getAcronym(),
                'type' => $partner->getTypePartner()?->getName(),
                'status' => $partner->getStatus(),
                'logo' => $partner->getLogo(),
            ];
        }, $partners);

        return $this->json($data);
    }

    /**
     * API: Statistiques des partenaires
     */
    #[Route('/api/stats', name: 'app_partners_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        return $this->json([
            'total' => $this->partnerRepository->count([]),
            'actifs' => $this->partnerRepository->count(['status' => 'Actif']),
            'inactifs' => $this->partnerRepository->count(['status' => 'Inactif']),
            'byType' => $this->partnerRepository->countByType(),
            'recent' => array_map(function (Partner $p) {
                return [
                    'id' => $p->getId(),
                    'name' => $p->getName(),
                    'createdAt' => $p->getCreatedAt()?->format('Y-m-d H:i:s'),
                ];
            }, $this->partnerRepository->findRecent(5)),
        ]);
    }

    /**
     * Changer le statut d'un partenaire (AJAX)
     */
    #[Route('/{id}/toggle-status', name: 'app_partners_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Partner $partner): JsonResponse
    {
        if (!$this->isCsrfTokenValid('toggle' . $partner->getId(), $request->request->get('_token'))) {
            return $this->json(['error' => 'Token CSRF invalide'], Response::HTTP_FORBIDDEN);
        }

        $newStatus = $partner->getStatus() === 'Actif' ? 'Inactif' : 'Actif';
        $partner->setStatus($newStatus);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'status' => $newStatus,
            'message' => 'Statut mis à jour avec succès.',
        ]);
    }
}
