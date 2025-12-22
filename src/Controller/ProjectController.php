<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/projects')]
class ProjectController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ProjectRepository $projectRepository
    ) {}

    /**
     * Liste des projets avec filtres et pagination
     */
    #[Route('', name: 'app_projects', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        $search = $request->query->get('search');
        $status = $request->query->get('status');
        $sector = $request->query->get('sector');
        $priority = $request->query->get('priority');

        $projects = $this->projectRepository->findPaginated($page, $limit, $search, $status, $sector, $priority);
        $totalProjects = $this->projectRepository->countFiltered($search, $status, $sector, $priority);
        $totalPages = ceil($totalProjects / $limit);

        // Statistiques
        $stats = [
            'total' => $this->projectRepository->count([]),
            'enCours' => $this->projectRepository->count(['status' => Project::STATUS_EN_COURS]),
            'enRetard' => $this->projectRepository->count(['status' => Project::STATUS_EN_RETARD]),
            'termines' => $this->projectRepository->count(['status' => Project::STATUS_TERMINE]),
            'planifies' => $this->projectRepository->count(['status' => Project::STATUS_PLANIFIE]),
        ];

        // Budget total
        $budgetStats = $this->projectRepository->createQueryBuilder('p')
            ->select('SUM(p.budgetTotal) as budget, SUM(p.montantDecaisse) as decaisse')
            ->getQuery()
            ->getSingleResult();

        return $this->render('project/index.html.twig', [
            'projects' => $projects,
            'stats' => $stats,
            'budgetTotal' => $budgetStats['budget'] ?? 0,
            'montantDecaisse' => $budgetStats['decaisse'] ?? 0,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalProjects' => $totalProjects,
            'search' => $search,
            'status' => $status,
            'sector' => $sector,
            'priority' => $priority,
            'statuses' => Project::getStatuses(),
            'sectors' => Project::getSectors(),
            'priorities' => Project::getPriorities(),
        ]);
    }

    /**
     * Création d'un nouveau projet
     */
    #[Route('/new', name: 'app_projects_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $project = new Project();
        
        // Générer un code automatique
        $project->setCode($this->projectRepository->generateNewCode());
        
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($project);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le projet "' . $project->getName() . '" a été créé avec succès.');

            return $this->redirectToRoute('app_projects');
        }

        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form,
            'sectors' => Project::getSectors(),
            'priorities' => Project::getPriorities(),
        ]);
    }

    /**
     * Affichage d'un projet
     */
    #[Route('/{slug}', name: 'app_projects_show', methods: ['GET'])]
    public function show(string $slug): Response
    {
        $project = $this->projectRepository->findBySlug($slug);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }

    /**
     * Modification d'un projet
     */
    #[Route('/{id}/edit', name: 'app_projects_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Le projet "' . $project->getName() . '" a été mis à jour avec succès.');

            return $this->redirectToRoute('app_projects');
        }

        return $this->render('project/edit.html.twig', [
            'project' => $project,
            'form' => $form,
            'sectors' => Project::getSectors(),
            'priorities' => Project::getPriorities(),
        ]);
    }

    /**
     * Suppression d'un projet
     */
    #[Route('/{id}', name: 'app_projects_delete', methods: ['POST'])]
    public function delete(Request $request, int $id): Response
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        if ($this->isCsrfTokenValid('delete' . $project->getId(), $request->request->get('_token'))) {
            $projectName = $project->getName();
            $this->entityManager->remove($project);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le projet "' . $projectName . '" a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_projects');
    }

    /**
     * API: Recherche de projets
     */
    #[Route('/api/search', name: 'app_projects_api_search', methods: ['GET'])]
    public function apiSearch(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return $this->json([]);
        }

        $projects = $this->projectRepository->search($query);
        
        $results = array_map(function($project) {
            return [
                'id' => $project->getId(),
                'name' => $project->getName(),
                'code' => $project->getCode(),
                'sector' => $project->getSectorLabel(),
                'status' => $project->getStatusLabel(),
                'progress' => $project->getProgress(),
                'slug' => $project->getSlug(),
            ];
        }, $projects);

        return $this->json($results);
    }

    /**
     * API: Statistiques des projets
     */
    #[Route('/api/stats', name: 'app_projects_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        $stats = $this->projectRepository->getStatistics();
        
        return $this->json($stats);
    }

    /**
     * API: Mise à jour du statut
     */
    #[Route('/{id}/toggle-status', name: 'app_projects_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, int $id): JsonResponse
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            return $this->json(['error' => 'Projet non trouvé'], 404);
        }

        $newStatus = $request->request->get('status');
        
        if (!in_array($newStatus, array_values(Project::getStatuses()))) {
            return $this->json(['error' => 'Statut invalide'], 400);
        }

        $project->setStatus($newStatus);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'status' => $newStatus,
            'statusLabel' => $project->getStatusLabel(),
        ]);
    }

    /**
     * API: Mise à jour de la progression
     */
    #[Route('/{id}/update-progress', name: 'app_projects_update_progress', methods: ['POST'])]
    public function updateProgress(Request $request, int $id): JsonResponse
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            return $this->json(['error' => 'Projet non trouvé'], 404);
        }

        $progress = (int) $request->request->get('progress', 0);
        
        if ($progress < 0 || $progress > 100) {
            return $this->json(['error' => 'La progression doit être entre 0 et 100'], 400);
        }

        $project->setProgress($progress);
        
        // Mettre à jour automatiquement le statut si 100%
        if ($progress === 100 && $project->getStatus() !== Project::STATUS_TERMINE) {
            $project->setStatus(Project::STATUS_TERMINE);
        }
        
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'progress' => $progress,
            'status' => $project->getStatus(),
            'statusLabel' => $project->getStatusLabel(),
        ]);
    }

    /**
     * API: Budget par secteur
     */
    #[Route('/api/budget-by-sector', name: 'app_projects_api_budget_sector', methods: ['GET'])]
    public function apiBudgetBySector(): JsonResponse
    {
        $data = $this->projectRepository->getBudgetBySector();
        
        $result = [];
        foreach ($data as $item) {
            $result[] = [
                'sector' => $item['sector'],
                'sectorLabel' => match($item['sector']) {
                    'infrastructure' => 'Infrastructure',
                    'sante' => 'Santé',
                    'energie' => 'Énergie',
                    'agriculture' => 'Agriculture',
                    'education' => 'Éducation',
                    'eau' => 'Eau & Assainissement',
                    default => $item['sector']
                },
                'budget' => (float) $item['budget'],
                'decaisse' => (float) $item['decaisse'],
            ];
        }

        return $this->json($result);
    }

    /**
     * Duplication d'un projet
     */
    #[Route('/{id}/duplicate', name: 'app_projects_duplicate', methods: ['POST'])]
    public function duplicate(Request $request, int $id): Response
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }

        if ($this->isCsrfTokenValid('duplicate' . $project->getId(), $request->request->get('_token'))) {
            $newProject = new Project();
            $newProject->setName($project->getName() . ' (copie)');
            $newProject->setCode($this->projectRepository->generateNewCode());
            $newProject->setSector($project->getSector());
            $newProject->setDescription($project->getDescription());
            $newProject->setLocalisation($project->getLocalisation());
            $newProject->setPriorite($project->getPriorite());
            $newProject->setStatus(Project::STATUS_PLANIFIE);
            $newProject->setBudgetTotal($project->getBudgetTotal());
            $newProject->setSourceFinancement($project->getSourceFinancement());
            $newProject->setMaitreOuvrage($project->getMaitreOuvrage());
            $newProject->setBeneficiaires($project->getBeneficiaires());
            $newProject->setProgress(0);
            $newProject->setMontantDecaisse('0');

            $this->entityManager->persist($newProject);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le projet a été dupliqué avec succès.');
        }

        return $this->redirectToRoute('app_projects');
    }

    /**
     * Export des projets (JSON)
     */
    #[Route('/export/json', name: 'app_projects_export_json', methods: ['GET'])]
    public function exportJson(): JsonResponse
    {
        $projects = $this->projectRepository->findAll();
        
        $data = array_map(function($project) {
            return [
                'id' => $project->getId(),
                'name' => $project->getName(),
                'code' => $project->getCode(),
                'sector' => $project->getSector(),
                'sectorLabel' => $project->getSectorLabel(),
                'description' => $project->getDescription(),
                'localisation' => $project->getLocalisation(),
                'priorite' => $project->getPriorite(),
                'status' => $project->getStatus(),
                'dateDebut' => $project->getDateDebut()?->format('Y-m-d'),
                'dateFin' => $project->getDateFin()?->format('Y-m-d'),
                'budgetTotal' => $project->getBudgetTotal(),
                'montantDecaisse' => $project->getMontantDecaisse(),
                'progress' => $project->getProgress(),
                'sourceFinancement' => $project->getSourceFinancement(),
                'maitreOuvrage' => $project->getMaitreOuvrage(),
                'beneficiaires' => $project->getBeneficiaires(),
            ];
        }, $projects);

        return $this->json($data);
    }
}
