<?php

namespace App\Controller;

use App\Entity\UserActivity;
use App\Repository\UserActivityRepository;
use App\Service\ActivityLogger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/activity')]
//#[IsGranted('ROLE_USER')]
class ActivityController extends AbstractController
{
    public function __construct(
        private UserActivityRepository $activityRepository,
        private ActivityLogger $activityLogger
    ) {}

    /**
     * Page principale de l'historique
     */
    #[Route('', name: 'app_activity_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        // Récupérer les filtres
        $filters = [
            'user_id' => $request->query->get('user_id'),
            'activity_type' => $request->query->get('activity_type'),
            'entity_type' => $request->query->get('entity_type'),
            'level' => $request->query->get('level'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'search' => $request->query->get('search'),
        ];

        $page = max(1, (int) $request->query->get('page', 1));
        $limit = 20;

        // Récupérer les activités filtrées
        $activities = $this->activityRepository->search($filters, $page, $limit);
        $totalCount = $this->activityRepository->countFiltered($filters);
        $totalPages = (int) ceil($totalCount / $limit);

        // Statistiques globales
        $globalStats = $this->activityRepository->getGlobalStats();
        
        // Statistiques par type
        $statsByType = $this->activityRepository->getStatsByActivityType();
        $statsByEntity = $this->activityRepository->getStatsByEntityType();
        
        // Utilisateurs les plus actifs
        $mostActiveUsers = $this->activityRepository->getMostActiveUsers(5);

        return $this->render('activity/index.html.twig', [
            'activities' => $activities,
            'filters' => $filters,
            'page' => $page,
            'totalPages' => $totalPages,
            'totalCount' => $totalCount,
            'globalStats' => $globalStats,
            'statsByType' => $statsByType,
            'statsByEntity' => $statsByEntity,
            'mostActiveUsers' => $mostActiveUsers,
            'activityTypes' => UserActivity::getActivityTypes(),
            'entityTypes' => UserActivity::getEntityTypes(),
        ]);
    }

    /**
     * Détails d'une activité
     */
    #[Route('/{id}', name: 'app_activity_show', methods: ['GET'])]
    public function show(UserActivity $activity): Response
    {
        return $this->render('activity/show.html.twig', [
            'activity' => $activity,
        ]);
    }

    /**
     * Historique d'un utilisateur spécifique
     */
    #[Route('/user/{id}', name: 'app_activity_user', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function userHistory(int $id, Request $request): Response
    {
        $user = $this->entityManager->getRepository(User::class)->find($id);
        
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        $page = max(1, (int) $request->query->get('page', 1));
        $limit = 50;

        $activities = $this->activityRepository->findByUser($user, $limit);
        
        // Statistiques de l'utilisateur
        $userStats = $this->activityLogger->getUserStats($user);

        return $this->render('activity/user.html.twig', [
            'user' => $user,
            'activities' => $activities,
            'userStats' => $userStats,
        ]);
    }

    /**
     * Historique d'une entité spécifique
     */
    #[Route('/entity/{type}/{id}', name: 'app_activity_entity', methods: ['GET'])]
    public function entityHistory(string $type, int $id): Response
    {
        $activities = $this->activityRepository->findByEntity($type, $id);

        return $this->render('activity/entity.html.twig', [
            'entityType' => $type,
            'entityId' => $id,
            'activities' => $activities,
        ]);
    }

    /**
     * API: Récupérer les activités récentes (JSON)
     */
    #[Route('/api/recent', name: 'app_activity_api_recent', methods: ['GET'])]
    public function apiRecent(Request $request): JsonResponse
    {
        $limit = min(50, (int) $request->query->get('limit', 10));
        $activities = $this->activityRepository->findRecent(1, $limit);

        $data = array_map(function(UserActivity $activity) {
            return [
                'id' => $activity->getId(),
                'type' => $activity->getActivityType(),
                'typeLabel' => $activity->getActivityTypeLabel(),
                'entityType' => $activity->getEntityType(),
                'entityTypeLabel' => $activity->getEntityTypeLabel(),
                'entityName' => $activity->getEntityName(),
                'description' => $activity->getDescription(),
                'level' => $activity->getLevel(),
                'levelLabel' => $activity->getLevelLabel(),
                'icon' => $activity->getActivityIcon(),
                'timeAgo' => $activity->getTimeAgo(),
                'user' => [
                    'id' => $activity->getUser()->getId(),
                    'name' => $activity->getUser()->getFullName(),
                    'email' => $activity->getUser()->getEmail(),
                ],
                'createdAt' => $activity->getCreatedAt()->format('Y-m-d H:i:s'),
            ];
        }, $activities);

        return $this->json($data);
    }

    /**
     * API: Statistiques globales (JSON)
     */
    #[Route('/api/stats', name: 'app_activity_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        $globalStats = $this->activityRepository->getGlobalStats();
        $statsByType = $this->activityRepository->getStatsByActivityType();
        $statsByEntity = $this->activityRepository->getStatsByEntityType();
        $activityByDay = $this->activityRepository->getActivityByDay(30);
        $activityByHour = $this->activityRepository->getActivityByHour();

        return $this->json([
            'global' => $globalStats,
            'byType' => $statsByType,
            'byEntity' => $statsByEntity,
            'byDay' => $activityByDay,
            'byHour' => $activityByHour,
        ]);
    }

    /**
     * API: Recherche d'activités (JSON)
     */
    #[Route('/api/search', name: 'app_activity_api_search', methods: ['GET'])]
    public function apiSearch(Request $request): JsonResponse
    {
        $filters = [
            'user_id' => $request->query->get('user_id'),
            'activity_type' => $request->query->get('activity_type'),
            'entity_type' => $request->query->get('entity_type'),
            'level' => $request->query->get('level'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'search' => $request->query->get('search'),
        ];

        $page = max(1, (int) $request->query->get('page', 1));
        $limit = min(100, (int) $request->query->get('limit', 20));

        $activities = $this->activityRepository->search($filters, $page, $limit);
        $totalCount = $this->activityRepository->countFiltered($filters);

        $data = array_map(function(UserActivity $activity) {
            return [
                'id' => $activity->getId(),
                'type' => $activity->getActivityType(),
                'typeLabel' => $activity->getActivityTypeLabel(),
                'description' => $activity->getDescription(),
                'level' => $activity->getLevel(),
                'timeAgo' => $activity->getTimeAgo(),
                'user' => $activity->getUser()->getFullName(),
                'createdAt' => $activity->getCreatedAt()->format('Y-m-d H:i:s'),
            ];
        }, $activities);

        return $this->json([
            'data' => $data,
            'total' => $totalCount,
            'page' => $page,
            'limit' => $limit,
            'totalPages' => (int) ceil($totalCount / $limit),
        ]);
    }

    /**
     * Export CSV de l'historique
     */
    #[Route('/export', name: 'app_activity_export', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function export(Request $request): Response
    {
        $filters = [
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $activities = $this->activityRepository->exportToCsv($filters);

        // Log l'export
        $this->activityLogger->logExport(
            'activity',
            'csv',
            count($activities),
            ['filters' => $filters]
        );

        // Créer le CSV
        $csv = $this->generateCsv($activities);

        $response = new Response($csv);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="historique_activites_' . date('Y-m-d') . '.csv"');

        return $response;
    }

    /**
     * Nettoyer les anciennes activités
     */
    #[Route('/cleanup', name: 'app_activity_cleanup', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function cleanup(Request $request): JsonResponse
    {
        $daysToKeep = (int) $request->request->get('days', 90);
        
        $deletedCount = $this->activityLogger->cleanup($daysToKeep);

        $this->activityLogger->logCritical(
            UserActivity::TYPE_DELETE,
            sprintf('Nettoyage de l\'historique: %d activités supprimées', $deletedCount),
            'activity',
            null,
            null,
            ['days_to_keep' => $daysToKeep, 'deleted_count' => $deletedCount]
        );

        return $this->json([
            'success' => true,
            'deleted' => $deletedCount,
            'message' => sprintf('%d activité(s) supprimée(s)', $deletedCount)
        ]);
    }

    /**
     * Génère le contenu CSV
     */
    private function generateCsv(array $data): string
    {
        $output = fopen('php://temp', 'r+');

        // En-têtes UTF-8 avec BOM
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // En-têtes de colonnes
        fputcsv($output, [
            'ID',
            'Date/Heure',
            'Utilisateur',
            'Email',
            'Type d\'activité',
            'Entité',
            'Nom de l\'entité',
            'Description',
            'Niveau',
            'Adresse IP'
        ], ';');

        // Données
        foreach ($data as $row) {
            fputcsv($output, [
                $row['id'],
                $row['createdAt']->format('d/m/Y H:i:s'),
                $row['firstname'] . ' ' . $row['lastname'],
                $row['email'],
                $row['activityType'],
                $row['entityType'] ?? '',
                $row['entityName'] ?? '',
                $row['description'],
                $row['level'],
                $row['ipAddress']
            ], ';');
        }

        rewind($output);
        $csv = stream_get_contents($output);
        fclose($output);

        return $csv;
    }
}
