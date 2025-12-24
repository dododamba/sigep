<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use App\Repository\FinancementRepository;
use App\Repository\DecaissementRepository;
use App\Repository\InstitutionRepository;
use App\Repository\AuditRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/top-management')]
//#[IsGranted('ROLE_MANAGER')]
class TopManagementController extends AbstractController
{
    public function __construct(
        private ProjectRepository $projectRepository,
        private FinancementRepository $financementRepository,
        private DecaissementRepository $decaissementRepository,
        private InstitutionRepository $institutionRepository,
        private AuditRepository $auditRepository
    ) {}

    /**
     * Dashboard Top Management Principal
     */
    #[Route('/', name: 'app_top_management_dashboard', methods: ['GET'])]
    public function dashboard(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        // Récupération des données avec filtres
        $projects = $this->getFilteredProjects($filters);
        $financements = $this->getFilteredFinancements($filters);
        $institutions = $this->institutionRepository->findAll();
        
        // KPIs principaux
        $kpis = $this->calculateKPIs($projects, $financements);
        
        // Statistiques par secteur
        $sectorStats = $this->calculateSectorStats($projects);
        
        // Statistiques par source de financement
        $financingSourceStats = $this->calculateFinancingSourceStats($financements);
        
        // Statistiques par statut
        $statusStats = $this->calculateStatusStats($projects);
        
        // Top projets par budget
        $topProjects = $this->projectRepository->findTopByBudget(10);
        
        // Évolution mensuelle
        $monthlyEvolution = $this->calculateMonthlyEvolution($projects, $financements);
        
        // Projets critiques (à risque)
        $criticalProjects = $this->projectRepository->findAtRisk(30, 70);
        
        // Performance par institution
        $institutionPerformance = $this->calculateInstitutionPerformance($institutions, $projects);
        
        // Audits récents
        $recentAudits = $this->auditRepository->findRecent(10);
        
        // MÉTRIQUES SPÉCIFIQUES AU TOP MANAGEMENT
        $managementMetrics = $this->calculateManagementMetrics($projects, $financements, $institutions);
        
        // Analyse des risques globaux
        $globalRiskAnalysis = $this->calculateGlobalRiskAnalysis($projects);
        
        // Tendances et prévisions
        $trends = $this->calculateTrends($projects, $financements);
        
        return $this->render('top_management/dashboard.html.twig', [
            'kpis' => $kpis,
            'sectorStats' => $sectorStats,
            'financingSourceStats' => $financingSourceStats,
            'statusStats' => $statusStats,
            'topProjects' => $topProjects,
            'monthlyEvolution' => $monthlyEvolution,
            'criticalProjects' => $criticalProjects,
            'institutionPerformance' => $institutionPerformance,
            'recentAudits' => $recentAudits,
            'institutions' => $institutions,
            'filters' => $filters,
            'years' => $this->getAvailableYears(),
            // Données spécifiques au management
            'managementMetrics' => $managementMetrics,
            'globalRiskAnalysis' => $globalRiskAnalysis,
            'trends' => $trends,
        ]);
    }

    /**
     * Détails d'un projet
     */
    #[Route('/project/{id}', name: 'app_top_management_project_detail', methods: ['GET'])]
    public function projectDetail(int $id): Response
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }
        
        // Décaissements du projet
        $decaissements = $this->decaissementRepository->findByProject($id);
        
        // Audits du projet
        $audits = $this->auditRepository->findByProject($id);
        
        // Calcul des métriques du projet
        $metrics = [
            'totalBudget' => $project->getBudgetTotal() ?? 0,
            'totalDisbursed' => $project->getMontantDecaisse() ?? 0,
            'disbursementRate' => $this->calculateProjectDisbursementRate($project),
            'physicalProgress' => $project->getProgress() ?? 0,
            'financialProgress' => $this->calculateProjectFinancialProgress($project),
            'daysRemaining' => $this->calculateDaysRemaining($project),
            'isDelayed' => $this->isProjectDelayed($project),
            'riskLevel' => $this->assessProjectRisk($project),
        ];
        
        // Évolution mensuelle du projet
        $monthlyProgress = $this->calculateProjectMonthlyProgress($project, $decaissements);
        
        return $this->render('top_management/project_details.html.twig', [
            'project' => $project,
            'decaissements' => $decaissements,
            'audits' => $audits,
            'metrics' => $metrics,
            'monthlyProgress' => $monthlyProgress,
        ]);
    }

    /**
     * Détails d'un financement
     */
    #[Route('/financing/{id}', name: 'app_top_management_financing_detail', methods: ['GET'])]
    public function financingDetail(int $id): Response
    {
        $financement = $this->financementRepository->find($id);
        
        if (!$financement) {
            throw $this->createNotFoundException('Financement non trouvé');
        }
        
        // Décaissements liés au financement
        $decaissements = $this->decaissementRepository->findByFinancement($financement);
        
        // Projets financés (à adapter selon votre entité Financement)
        $fundedProjects = []; // À compléter selon votre modèle
        
        // Calcul des métriques du financement
        $metrics = [
            'totalAmount' => $financement->getMontantEngage() ?? 0,
            'totalDisbursed' => $financement->getMontantDecaisse() ?? 0,
            'disbursementRate' => $this->calculateFinancingDisbursementRate($financement),
            'remainingAmount' => ($financement->getMontantEngage() ?? 0) - ($financement->getMontantDecaisse() ?? 0),
            'projectsCount' => count($fundedProjects),
        ];
        
        // Évolution des décaissements
        $disbursementEvolution = $this->calculateFinancingDisbursementEvolution($decaissements);
        
        return $this->render('top_management/financing_details.html.twig', [
            'financement' => $financement,
            'decaissements' => $decaissements,
            'fundedProjects' => $fundedProjects,
            'metrics' => $metrics,
            'disbursementEvolution' => $disbursementEvolution,
        ]);
    }

    /**
     * API - KPIs principaux
     */
    #[Route('/api/kpis', name: 'app_top_management_api_kpis', methods: ['GET'])]
    public function apiKpis(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $projects = $this->getFilteredProjects($filters);
        $financements = $this->getFilteredFinancements($filters);
        
        $kpis = $this->calculateKPIs($projects, $financements);
        
        return $this->json([
            'success' => true,
            'data' => $kpis,
        ]);
    }

    /**
     * API - Données des graphiques
     */
    #[Route('/api/charts', name: 'app_top_management_api_charts', methods: ['GET'])]
    public function apiCharts(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        $chartType = $request->query->get('type', 'all');
        
        $projects = $this->getFilteredProjects($filters);
        $financements = $this->getFilteredFinancements($filters);
        
        $chartsData = [];
        
        if ($chartType === 'all' || $chartType === 'sector') {
            $chartsData['sector'] = $this->calculateSectorStats($projects);
        }
        
        if ($chartType === 'all' || $chartType === 'financing') {
            $chartsData['financing'] = $this->calculateFinancingSourceStats($financements);
        }
        
        if ($chartType === 'all' || $chartType === 'status') {
            $chartsData['status'] = $this->calculateStatusStats($projects);
        }
        
        if ($chartType === 'all' || $chartType === 'evolution') {
            $chartsData['evolution'] = $this->calculateMonthlyEvolution($projects, $financements);
        }
        
        return $this->json([
            'success' => true,
            'data' => $chartsData,
        ]);
    }

    // ========== MÉTHODES PRIVÉES DE CALCUL ==========

    /**
     * Récupère les filtres depuis la requête
     */
    private function getFiltersFromRequest(Request $request): array
    {
        return [
            'year' => $request->query->get('year'),
            'institution' => $request->query->get('institution'),
            'status' => $request->query->get('status'),
            'sector' => $request->query->get('sector'),
        ];
    }

    /**
     * Récupère les projets filtrés
     */
    private function getFilteredProjects(array $filters): array
    {
        $qb = $this->projectRepository->createQueryBuilder('p');
        
        if (!empty($filters['year'])) {
            $qb->andWhere('YEAR(p.dateDebut) = :year')
               ->setParameter('year', $filters['year']);
        }
        
        if (!empty($filters['institution'])) {
            $qb->andWhere('p.institution = :institution')
               ->setParameter('institution', $filters['institution']);
        }
        
        if (!empty($filters['status'])) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $filters['status']);
        }
        
        if (!empty($filters['sector'])) {
            $qb->andWhere('p.sector = :sector')
               ->setParameter('sector', $filters['sector']);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les financements filtrés
     */
    private function getFilteredFinancements(array $filters): array
    {
        $qb = $this->financementRepository->createQueryBuilder('f');
        
        if (!empty($filters['year'])) {
            $qb->andWhere('YEAR(f.dateSignature) = :year')
               ->setParameter('year', $filters['year']);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Calcule les KPIs principaux
     */
    private function calculateKPIs(array $projects, array $financements): array
    {
        $totalProjects = count($projects);
        $activeProjects = count(array_filter($projects, fn($p) => $p->getStatus() === 'en-cours'));
        $completedProjects = count(array_filter($projects, fn($p) => $p->getStatus() === 'termine'));
        
        $totalBudget = $this->projectRepository->getTotalBudget();
        $totalDisbursed = $this->projectRepository->getTotalDecaisse();
        
        $disbursementRate = $totalBudget > 0 ? ($totalDisbursed / $totalBudget) * 100 : 0;
        
        $avgPhysicalProgress = $totalProjects > 0 
            ? array_reduce($projects, fn($sum, $p) => $sum + ($p->getProgress() ?? 0), 0) / $totalProjects
            : 0;
        
        return [
            'totalProjects' => $totalProjects,
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
            'totalBudget' => $totalBudget,
            'totalDisbursed' => $totalDisbursed,
            'remainingBudget' => $totalBudget - $totalDisbursed,
            'disbursementRate' => round($disbursementRate, 2),
            'avgPhysicalProgress' => round($avgPhysicalProgress, 2),
        ];
    }

    /**
     * Calcule les statistiques par secteur
     */
    private function calculateSectorStats(array $projects): array
    {
        $stats = [];
        
        foreach ($projects as $project) {
            $sector = $project->getSector() ?? 'Non défini';
            
            if (!isset($stats[$sector])) {
                $stats[$sector] = [
                    'count' => 0,
                    'budget' => 0,
                    'progress' => 0,
                ];
            }
            
            $stats[$sector]['count']++;
            $stats[$sector]['budget'] += $project->getBudgetTotal() ?? 0;
            $stats[$sector]['progress'] += $project->getProgress() ?? 0;
        }
        
        // Calculer la moyenne de progression par secteur
        foreach ($stats as $sector => $data) {
            $stats[$sector]['avgProgress'] = $data['count'] > 0 
                ? round($data['progress'] / $data['count'], 2) 
                : 0;
        }
        
        return $stats;
    }

    /**
     * Calcule les statistiques par source de financement
     */
    private function calculateFinancingSourceStats(array $financements): array
    {
        $stats = [];
        
        foreach ($financements as $financement) {
            $bailleur = $financement->getBailleur() ? $financement->getBailleur()->getName() : 'Non défini';
            
            if (!isset($stats[$bailleur])) {
                $stats[$bailleur] = [
                    'count' => 0,
                    'totalAmount' => 0,
                ];
            }
            
            $stats[$bailleur]['count']++;
            $stats[$bailleur]['totalAmount'] += $financement->getMontantEngage() ?? 0;
        }
        
        return $stats;
    }

    /**
     * Calcule les statistiques par statut
     */
    private function calculateStatusStats(array $projects): array
    {
        $stats = [
            'planifie' => 0,
            'en-cours' => 0,
            'suspendu' => 0,
            'termine' => 0,
            'en-retard' => 0,
        ];
        
        foreach ($projects as $project) {
            $status = $project->getStatus() ?? 'planifie';
            if (isset($stats[$status])) {
                $stats[$status]++;
            } else {
                $stats[$status] = 1;
            }
        }
        
        return $stats;
    }

    /**
     * Calcule l'évolution mensuelle
     */
    private function calculateMonthlyEvolution(array $projects, array $financements): array
    {
        $currentYear = date('Y');
        $evolution = [];
        
        for ($month = 1; $month <= 12; $month++) {
            $monthKey = sprintf('%d-%02d', $currentYear, $month);
            
            $monthProjects = array_filter($projects, function($p) use ($month, $currentYear) {
                $startDate = $p->getDateDebut();
                return $startDate && 
                       $startDate->format('Y') == $currentYear && 
                       $startDate->format('n') <= $month;
            });
            
            $budget = array_reduce($monthProjects, fn($sum, $p) => $sum + ($p->getBudgetTotal() ?? 0), 0);
            
            $evolution[$monthKey] = [
                'projects' => count($monthProjects),
                'budget' => $budget,
            ];
        }
        
        return $evolution;
    }

    /**
     * Calcule la performance par institution
     */
    private function calculateInstitutionPerformance(array $institutions, array $projects): array
    {
        $performance = [];
        
        foreach ($institutions as $institution) {
            $instProjects = array_filter($projects, fn($p) => $p->getInstitution() === $institution);
            
            if (empty($instProjects)) {
                continue;
            }
            
            $avgProgress = array_reduce($instProjects, fn($sum, $p) => $sum + ($p->getProgress() ?? 0), 0) / count($instProjects);
            $completedCount = count(array_filter($instProjects, fn($p) => $p->getStatus() === 'termine'));
            
            $performance[] = [
                'institution' => $institution,
                'projectsCount' => count($instProjects),
                'avgProgress' => round($avgProgress, 2),
                'completedCount' => $completedCount,
                'successRate' => count($instProjects) > 0 ? round(($completedCount / count($instProjects)) * 100, 2) : 0,
            ];
        }
        
        // Trier par taux de réussite
        usort($performance, fn($a, $b) => $b['successRate'] <=> $a['successRate']);
        
        return $performance;
    }

    /**
     * Calcule les métriques spécifiques pour le top management
     */
    private function calculateManagementMetrics(array $projects, array $financements, array $institutions): array
    {
        $totalBudget = $this->projectRepository->getTotalBudget();
        $totalDisbursed = $this->projectRepository->getTotalDecaisse();
        
        $delayedProjects = count(array_filter($projects, fn($p) => $this->isProjectDelayed($p)));
        $onTimeProjects = count($projects) - $delayedProjects;
        
        $avgExecutionRate = count($projects) > 0 
            ? array_reduce($projects, fn($sum, $p) => $sum + ($p->getProgress() ?? 0), 0) / count($projects)
            : 0;
        
        return [
            'portfolioValue' => $totalBudget,
            'activatedFunds' => $totalDisbursed,
            'fundingEfficiency' => $totalBudget > 0 ? round(($totalDisbursed / $totalBudget) * 100, 2) : 0,
            'onTimeRate' => count($projects) > 0 ? round(($onTimeProjects / count($projects)) * 100, 2) : 0,
            'delayRate' => count($projects) > 0 ? round(($delayedProjects / count($projects)) * 100, 2) : 0,
            'avgExecutionRate' => round($avgExecutionRate, 2),
            'activeInstitutions' => count($institutions),
            'projectsPerInstitution' => count($institutions) > 0 ? round(count($projects) / count($institutions), 2) : 0,
        ];
    }

    /**
     * Analyse des risques globaux du portefeuille
     */
    private function calculateGlobalRiskAnalysis(array $projects): array
    {
        $riskLevels = [
            'Faible' => 0,
            'Moyen' => 0,
            'Élevé' => 0,
        ];
        
        foreach ($projects as $project) {
            $riskLevel = $this->assessProjectRisk($project);
            if (isset($riskLevels[$riskLevel])) {
                $riskLevels[$riskLevel]++;
            }
        }
        
        $totalProjects = count($projects);
        
        return [
            'lowRisk' => $riskLevels['Faible'],
            'mediumRisk' => $riskLevels['Moyen'],
            'highRisk' => $riskLevels['Élevé'],
            'lowRiskPercent' => $totalProjects > 0 ? round(($riskLevels['Faible'] / $totalProjects) * 100, 2) : 0,
            'mediumRiskPercent' => $totalProjects > 0 ? round(($riskLevels['Moyen'] / $totalProjects) * 100, 2) : 0,
            'highRiskPercent' => $totalProjects > 0 ? round(($riskLevels['Élevé'] / $totalProjects) * 100, 2) : 0,
            'criticalProjectsCount' => $riskLevels['Élevé'],
        ];
    }

    /**
     * Calcule les tendances et prévisions
     */
    private function calculateTrends(array $projects, array $financements): array
    {
        $currentYear = date('Y');
        $lastYear = $currentYear - 1;
        
        $startCurrentYear = new \DateTime("$currentYear-01-01");
        $endCurrentYear = new \DateTime("$currentYear-12-31");
        $startLastYear = new \DateTime("$lastYear-01-01");
        $endLastYear = new \DateTime("$lastYear-12-31");
        
        // Projets de l'année en cours
        $currentYearProjects = $this->projectRepository->findCreatedBetween($startCurrentYear, $endCurrentYear);
        
        // Projets de l'année dernière
        $lastYearProjects = $this->projectRepository->findCreatedBetween($startLastYear, $endLastYear);
        
        $projectGrowth = count($lastYearProjects) > 0 
            ? round(((count($currentYearProjects) - count($lastYearProjects)) / count($lastYearProjects)) * 100, 2)
            : 0;
        
        // Budget de l'année en cours
        $currentYearBudget = array_reduce($currentYearProjects, fn($sum, $p) => $sum + ($p->getBudgetTotal() ?? 0), 0);
        
        // Budget de l'année dernière
        $lastYearBudget = array_reduce($lastYearProjects, fn($sum, $p) => $sum + ($p->getBudgetTotal() ?? 0), 0);
        
        $budgetGrowth = $lastYearBudget > 0 
            ? round((($currentYearBudget - $lastYearBudget) / $lastYearBudget) * 100, 2)
            : 0;
        
        return [
            'projectGrowth' => $projectGrowth,
            'budgetGrowth' => $budgetGrowth,
            'currentYearProjects' => count($currentYearProjects),
            'lastYearProjects' => count($lastYearProjects),
            'currentYearBudget' => $currentYearBudget,
            'lastYearBudget' => $lastYearBudget,
        ];
    }

    /**
     * Vérifie si un projet est en retard
     */
    private function isProjectDelayed($project): bool
    {
        $endDate = $project->getDateFin();
        $now = new \DateTime();
        
        if (!$endDate) {
            return false;
        }
        
        $status = $project->getStatus();
        
        return $endDate < $now && $status !== 'termine';
    }

    /**
     * Calcule les jours restants
     */
    private function calculateDaysRemaining($project): ?int
    {
        $endDate = $project->getDateFin();
        $now = new \DateTime();
        
        if (!$endDate) {
            return null;
        }
        
        $interval = $now->diff($endDate);
        return $interval->invert ? -$interval->days : $interval->days;
    }

    /**
     * Évalue le niveau de risque d'un projet
     */
    private function assessProjectRisk($project): string
    {
        $riskScore = 0;
        
        // Facteurs de risque
        if ($this->isProjectDelayed($project)) {
            $riskScore += 3;
        }
        
        $progress = $project->getProgress() ?? 0;
        if ($progress < 30) {
            $riskScore += 2;
        }
        
        if ($project->getStatus() === 'suspendu') {
            $riskScore += 3;
        }
        
        // Classification
        if ($riskScore >= 5) {
            return 'Élevé';
        } elseif ($riskScore >= 3) {
            return 'Moyen';
        } else {
            return 'Faible';
        }
    }

    /**
     * Calcule le taux de décaissement d'un projet
     */
    private function calculateProjectDisbursementRate($project): float
    {
        $totalBudget = $project->getBudgetTotal() ?? 0;
        $totalDisbursed = $project->getMontantDecaisse() ?? 0;
        
        return $totalBudget > 0 ? round(($totalDisbursed / $totalBudget) * 100, 2) : 0;
    }

    /**
     * Calcule la progression financière d'un projet
     */
    private function calculateProjectFinancialProgress($project): float
    {
        return $this->calculateProjectDisbursementRate($project);
    }

    /**
     * Calcule la progression mensuelle d'un projet
     */
    private function calculateProjectMonthlyProgress($project, array $decaissements): array
    {
        $progress = [];
        
        foreach ($decaissements as $decaissement) {
            $date = $decaissement->getDateDemande();
            if ($date) {
                $monthKey = $date->format('Y-m');
                if (!isset($progress[$monthKey])) {
                    $progress[$monthKey] = 0;
                }
                $progress[$monthKey] += $decaissement->getMontant() ?? 0;
            }
        }
        
        ksort($progress);
        return $progress;
    }

    /**
     * Calcule le taux de décaissement d'un financement
     */
    private function calculateFinancingDisbursementRate($financement): float
    {
        $totalAmount = $financement->getMontantEngage() ?? 0;
        $totalDisbursed = $financement->getMontantDecaisse() ?? 0;
        
        return $totalAmount > 0 ? round(($totalDisbursed / $totalAmount) * 100, 2) : 0;
    }

    /**
     * Calcule l'évolution des décaissements d'un financement
     */
    private function calculateFinancingDisbursementEvolution(array $decaissements): array
    {
        $evolution = [];
        
        foreach ($decaissements as $decaissement) {
            $date = $decaissement->getDateDemande();
            if ($date) {
                $monthKey = $date->format('Y-m');
                if (!isset($evolution[$monthKey])) {
                    $evolution[$monthKey] = 0;
                }
                $evolution[$monthKey] += $decaissement->getMontant() ?? 0;
            }
        }
        
        ksort($evolution);
        return $evolution;
    }

    /**
     * Retourne les années disponibles
     */
    private function getAvailableYears(): array
    {
        $currentYear = (int) date('Y');
        $years = [];
        
        for ($i = 0; $i < 5; $i++) {
            $years[] = $currentYear - $i;
        }
        
        return $years;
    }
}
