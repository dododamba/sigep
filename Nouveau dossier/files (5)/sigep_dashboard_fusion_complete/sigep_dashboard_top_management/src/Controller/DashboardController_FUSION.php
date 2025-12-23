<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use App\Repository\FinancingRepository;
use App\Repository\DisbursementRepository;
use App\Repository\InstitutionRepository;
use App\Repository\AuditRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/dashboard')]
#[IsGranted('ROLE_USER')]
class DashboardController extends AbstractController
{
    public function __construct(
        private ProjectRepository $projectRepository,
        private FinancingRepository $financingRepository,
        private DisbursementRepository $disbursementRepository,
        private InstitutionRepository $institutionRepository,
        private AuditRepository $auditRepository
    ) {}

    /**
     * Dashboard Principal / Index - Vue générale du système
     * Template: dashboard/index.html.twig
     */
    #[Route('/', name: 'app_dashboard_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        // Récupération des données avec filtres
        $projects = $this->projectRepository->findByFilters($filters);
        $financings = $this->financingRepository->findByFilters($filters);
        $institutions = $this->institutionRepository->findAll();
        
        // Calcul des KPIs principaux
        $kpis = $this->calculateKPIs($projects, $financings);
        
        // Statistiques par secteur
        $sectorStats = $this->calculateSectorStats($projects);
        
        // Statistiques par source de financement
        $financingSourceStats = $this->calculateFinancingSourceStats($financings);
        
        // Statistiques par statut
        $statusStats = $this->calculateStatusStats($projects);
        
        // Top projets par budget
        $topProjects = $this->getTopProjects($projects, 10);
        
        // Évolution mensuelle
        $monthlyEvolution = $this->calculateMonthlyEvolution($projects, $financings);
        
        // Taux de décaissement
        $disbursementRate = $this->calculateDisbursementRate($financings);
        
        // Projets critiques (retard ou problèmes)
        $criticalProjects = $this->getCriticalProjects($projects);
        
        // Performance par institution
        $institutionPerformance = $this->calculateInstitutionPerformance($institutions, $projects);
        
        // Récents audits
        $recentAudits = $this->auditRepository->findRecentAudits(10);
        
        return $this->render('dashboard/index.html.twig', [
            'kpis' => $kpis,
            'sectorStats' => $sectorStats,
            'financingSourceStats' => $financingSourceStats,
            'statusStats' => $statusStats,
            'topProjects' => $topProjects,
            'monthlyEvolution' => $monthlyEvolution,
            'disbursementRate' => $disbursementRate,
            'criticalProjects' => $criticalProjects,
            'institutionPerformance' => $institutionPerformance,
            'recentAudits' => $recentAudits,
            'institutions' => $institutions,
            'filters' => $filters,
            'years' => $this->getAvailableYears(),
        ]);
    }

    /**
     * Dashboard Top Management - Vue stratégique pour le management
     * Template: dashboard/management.html.twig
     * Accès: /dashboard/management
     */
    #[Route('/management', name: 'app_dashboard_management', methods: ['GET'])]
    #[IsGranted('ROLE_MANAGER')] // Restreindre au management
    public function management(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        // Récupération des données avec filtres
        $projects = $this->projectRepository->findByFilters($filters);
        $financings = $this->financingRepository->findByFilters($filters);
        $institutions = $this->institutionRepository->findAll();
        
        // Calcul des KPIs principaux
        $kpis = $this->calculateKPIs($projects, $financings);
        
        // Statistiques par secteur
        $sectorStats = $this->calculateSectorStats($projects);
        
        // Statistiques par source de financement
        $financingSourceStats = $this->calculateFinancingSourceStats($financings);
        
        // Statistiques par statut
        $statusStats = $this->calculateStatusStats($projects);
        
        // Top projets par budget
        $topProjects = $this->getTopProjects($projects, 10);
        
        // Évolution mensuelle
        $monthlyEvolution = $this->calculateMonthlyEvolution($projects, $financings);
        
        // Taux de décaissement
        $disbursementRate = $this->calculateDisbursementRate($financings);
        
        // Projets critiques (retard ou problèmes)
        $criticalProjects = $this->getCriticalProjects($projects);
        
        // Performance par institution
        $institutionPerformance = $this->calculateInstitutionPerformance($institutions, $projects);
        
        // Récents audits
        $recentAudits = $this->auditRepository->findRecentAudits(10);
        
        // Indicateurs supplémentaires pour le management
        $managementMetrics = $this->calculateManagementMetrics($projects, $financings, $institutions);
        
        // Analyse des risques globaux
        $globalRiskAnalysis = $this->calculateGlobalRiskAnalysis($projects);
        
        // Tendances et prévisions
        $trends = $this->calculateTrends($projects, $financings);
        
        return $this->render('dashboard/management.html.twig', [
            'kpis' => $kpis,
            'sectorStats' => $sectorStats,
            'financingSourceStats' => $financingSourceStats,
            'statusStats' => $statusStats,
            'topProjects' => $topProjects,
            'monthlyEvolution' => $monthlyEvolution,
            'disbursementRate' => $disbursementRate,
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
    #[Route('/project/{id}', name: 'app_dashboard_project_detail', methods: ['GET'])]
    public function projectDetail(int $id): Response
    {
        $project = $this->projectRepository->find($id);
        
        if (!$project) {
            throw $this->createNotFoundException('Projet non trouvé');
        }
        
        // Détails financiers du projet
        $financingDetails = $this->financingRepository->findByProject($project);
        
        // Décaissements du projet
        $disbursements = $this->disbursementRepository->findByProject($project);
        
        // Audits du projet
        $audits = $this->auditRepository->findByProject($project);
        
        // Calcul des métriques du projet
        $metrics = [
            'totalBudget' => $this->calculateProjectTotalBudget($project, $financingDetails),
            'totalDisbursed' => $this->calculateProjectTotalDisbursed($project, $disbursements),
            'disbursementRate' => $this->calculateProjectDisbursementRate($project, $financingDetails, $disbursements),
            'physicalProgress' => $project->getPhysicalProgress() ?? 0,
            'financialProgress' => $this->calculateProjectFinancialProgress($project, $financingDetails, $disbursements),
            'daysRemaining' => $this->calculateDaysRemaining($project),
            'isDelayed' => $this->isProjectDelayed($project),
            'riskLevel' => $this->assessProjectRisk($project),
        ];
        
        // Évolution mensuelle du projet
        $monthlyProgress = $this->calculateProjectMonthlyProgress($project, $disbursements);
        
        return $this->render('dashboard/_project_details.html.twig', [
            'project' => $project,
            'financingDetails' => $financingDetails,
            'disbursements' => $disbursements,
            'audits' => $audits,
            'metrics' => $metrics,
            'monthlyProgress' => $monthlyProgress,
        ]);
    }

    /**
     * Détails d'un financement
     */
    #[Route('/financing/{id}', name: 'app_dashboard_financing_detail', methods: ['GET'])]
    public function financingDetail(int $id): Response
    {
        $financing = $this->financingRepository->find($id);
        
        if (!$financing) {
            throw $this->createNotFoundException('Financement non trouvé');
        }
        
        // Décaissements liés au financement
        $disbursements = $this->disbursementRepository->findByFinancing($financing);
        
        // Projets financés par cette source
        $fundedProjects = $this->projectRepository->findByFinancing($financing);
        
        // Calcul des métriques du financement
        $metrics = [
            'totalAmount' => $financing->getMontantTotal() ?? 0,
            'totalDisbursed' => $this->calculateFinancingTotalDisbursed($disbursements),
            'disbursementRate' => $this->calculateFinancingDisbursementRate($financing, $disbursements),
            'remainingAmount' => $this->calculateFinancingRemainingAmount($financing, $disbursements),
            'projectsCount' => count($fundedProjects),
            'averageProjectSize' => $this->calculateAverageProjectSize($fundedProjects),
            'successRate' => $this->calculateFinancingSuccessRate($fundedProjects),
        ];
        
        // Répartition par secteur
        $sectorDistribution = $this->calculateFinancingSectorDistribution($fundedProjects);
        
        // Évolution des décaissements
        $disbursementEvolution = $this->calculateFinancingDisbursementEvolution($disbursements);
        
        return $this->render('dashboard/_financing_details.html.twig', [
            'financing' => $financing,
            'disbursements' => $disbursements,
            'fundedProjects' => $fundedProjects,
            'metrics' => $metrics,
            'sectorDistribution' => $sectorDistribution,
            'disbursementEvolution' => $disbursementEvolution,
        ]);
    }

    /**
     * API - KPIs principaux
     */
    #[Route('/api/kpis', name: 'app_dashboard_api_kpis', methods: ['GET'])]
    public function apiKpis(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $projects = $this->projectRepository->findByFilters($filters);
        $financings = $this->financingRepository->findByFilters($filters);
        
        $kpis = $this->calculateKPIs($projects, $financings);
        
        return $this->json([
            'success' => true,
            'data' => $kpis,
        ]);
    }

    /**
     * API - Données des graphiques
     */
    #[Route('/api/charts', name: 'app_dashboard_api_charts', methods: ['GET'])]
    public function apiCharts(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        $chartType = $request->query->get('type', 'all');
        
        $projects = $this->projectRepository->findByFilters($filters);
        $financings = $this->financingRepository->findByFilters($filters);
        
        $chartsData = [];
        
        if ($chartType === 'all' || $chartType === 'sector') {
            $chartsData['sector'] = $this->calculateSectorStats($projects);
        }
        
        if ($chartType === 'all' || $chartType === 'financing') {
            $chartsData['financing'] = $this->calculateFinancingSourceStats($financings);
        }
        
        if ($chartType === 'all' || $chartType === 'status') {
            $chartsData['status'] = $this->calculateStatusStats($projects);
        }
        
        if ($chartType === 'all' || $chartType === 'evolution') {
            $chartsData['evolution'] = $this->calculateMonthlyEvolution($projects, $financings);
        }
        
        return $this->json([
            'success' => true,
            'data' => $chartsData,
        ]);
    }

    // ========== MÉTHODES PRIVÉES DE CALCUL ==========

    private function getFiltersFromRequest(Request $request): array
    {
        return [
            'year' => $request->query->get('year'),
            'institution_id' => $request->query->get('institution'),
            'status' => $request->query->get('status'),
            'sector' => $request->query->get('sector'),
        ];
    }

    private function calculateKPIs(array $projects, array $financings): array
    {
        $totalProjects = count($projects);
        $activeProjects = count(array_filter($projects, fn($p) => $p->getStatut() === 'en_cours'));
        $completedProjects = count(array_filter($projects, fn($p) => $p->getStatut() === 'termine'));
        
        $totalBudget = array_reduce($financings, fn($sum, $f) => $sum + ($f->getMontantTotal() ?? 0), 0);
        
        $totalDisbursed = 0;
        foreach ($financings as $financing) {
            $disbursements = $this->disbursementRepository->findBy(['financement' => $financing]);
            $totalDisbursed += array_reduce($disbursements, fn($sum, $d) => $sum + ($d->getMontant() ?? 0), 0);
        }
        
        $disbursementRate = $totalBudget > 0 ? ($totalDisbursed / $totalBudget) * 100 : 0;
        
        $avgPhysicalProgress = $totalProjects > 0 
            ? array_reduce($projects, fn($sum, $p) => $sum + ($p->getTauxRealisation() ?? 0), 0) / $totalProjects
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

    private function calculateSectorStats(array $projects): array
    {
        $stats = [];
        
        foreach ($projects as $project) {
            $sector = $project->getSecteur() ?? 'Non défini';
            
            if (!isset($stats[$sector])) {
                $stats[$sector] = [
                    'count' => 0,
                    'budget' => 0,
                    'progress' => 0,
                ];
            }
            
            $stats[$sector]['count']++;
            $stats[$sector]['progress'] += $project->getTauxRealisation() ?? 0;
        }
        
        // Calculer la moyenne de progression par secteur
        foreach ($stats as $sector => $data) {
            $stats[$sector]['avgProgress'] = $data['count'] > 0 
                ? round($data['progress'] / $data['count'], 2) 
                : 0;
        }
        
        return $stats;
    }

    private function calculateFinancingSourceStats(array $financings): array
    {
        $stats = [];
        
        foreach ($financings as $financing) {
            $source = $financing->getSourceFinancement() ?? 'Non défini';
            
            if (!isset($stats[$source])) {
                $stats[$source] = [
                    'count' => 0,
                    'totalAmount' => 0,
                ];
            }
            
            $stats[$source]['count']++;
            $stats[$source]['totalAmount'] += $financing->getMontantTotal() ?? 0;
        }
        
        return $stats;
    }

    private function calculateStatusStats(array $projects): array
    {
        $stats = [
            'planifie' => 0,
            'en_cours' => 0,
            'suspendu' => 0,
            'termine' => 0,
            'annule' => 0,
        ];
        
        foreach ($projects as $project) {
            $status = $project->getStatut() ?? 'planifie';
            if (isset($stats[$status])) {
                $stats[$status]++;
            }
        }
        
        return $stats;
    }

    private function getTopProjects(array $projects, int $limit): array
    {
        // Trier par budget total (via financements)
        usort($projects, function($a, $b) {
            $budgetA = $this->getProjectTotalBudget($a);
            $budgetB = $this->getProjectTotalBudget($b);
            return $budgetB <=> $budgetA;
        });
        
        return array_slice($projects, 0, $limit);
    }

    private function getProjectTotalBudget($project): float
    {
        $financings = $this->financingRepository->findBy(['projet' => $project]);
        return array_reduce($financings, fn($sum, $f) => $sum + ($f->getMontantTotal() ?? 0), 0);
    }

    private function calculateMonthlyEvolution(array $projects, array $financings): array
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
            
            $evolution[$monthKey] = [
                'projects' => count($monthProjects),
                'budget' => array_reduce($monthProjects, function($sum, $p) {
                    return $sum + $this->getProjectTotalBudget($p);
                }, 0),
            ];
        }
        
        return $evolution;
    }

    private function calculateDisbursementRate(array $financings): array
    {
        $rates = [];
        
        foreach ($financings as $financing) {
            $totalAmount = $financing->getMontantTotal() ?? 0;
            $disbursements = $this->disbursementRepository->findBy(['financement' => $financing]);
            $totalDisbursed = array_reduce($disbursements, fn($sum, $d) => $sum + ($d->getMontant() ?? 0), 0);
            
            $rate = $totalAmount > 0 ? ($totalDisbursed / $totalAmount) * 100 : 0;
            
            $rates[] = [
                'financing' => $financing,
                'rate' => round($rate, 2),
                'disbursed' => $totalDisbursed,
                'total' => $totalAmount,
            ];
        }
        
        return $rates;
    }

    private function getCriticalProjects(array $projects): array
    {
        return array_filter($projects, function($project) {
            // Projet critique si : retard, faible progression, ou problèmes signalés
            $isDelayed = $this->isProjectDelayed($project);
            $lowProgress = ($project->getTauxRealisation() ?? 0) < 30;
            $hasSuspensions = $project->getStatut() === 'suspendu';
            
            return $isDelayed || $lowProgress || $hasSuspensions;
        });
    }

    private function calculateInstitutionPerformance(array $institutions, array $projects): array
    {
        $performance = [];
        
        foreach ($institutions as $institution) {
            $instProjects = array_filter($projects, fn($p) => $p->getInstitution() === $institution);
            
            if (empty($instProjects)) {
                continue;
            }
            
            $avgProgress = array_reduce($instProjects, fn($sum, $p) => $sum + ($p->getTauxRealisation() ?? 0), 0) / count($instProjects);
            $completedCount = count(array_filter($instProjects, fn($p) => $p->getStatut() === 'termine'));
            
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
    private function calculateManagementMetrics(array $projects, array $financings, array $institutions): array
    {
        $totalBudget = array_reduce($financings, fn($sum, $f) => $sum + ($f->getMontantTotal() ?? 0), 0);
        
        $totalDisbursed = 0;
        foreach ($financings as $financing) {
            $disbursements = $this->disbursementRepository->findBy(['financement' => $financing]);
            $totalDisbursed += array_reduce($disbursements, fn($sum, $d) => $sum + ($d->getMontant() ?? 0), 0);
        }
        
        $delayedProjects = count(array_filter($projects, fn($p) => $this->isProjectDelayed($p)));
        $onTimeProjects = count($projects) - $delayedProjects;
        
        $avgExecutionRate = count($projects) > 0 
            ? array_reduce($projects, fn($sum, $p) => $sum + ($p->getTauxRealisation() ?? 0), 0) / count($projects)
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
    private function calculateTrends(array $projects, array $financings): array
    {
        $currentYear = date('Y');
        $lastYear = $currentYear - 1;
        
        // Projets de l'année en cours
        $currentYearProjects = array_filter($projects, function($p) use ($currentYear) {
            $startDate = $p->getDateDebut();
            return $startDate && $startDate->format('Y') == $currentYear;
        });
        
        // Projets de l'année dernière
        $lastYearProjects = array_filter($projects, function($p) use ($lastYear) {
            $startDate = $p->getDateDebut();
            return $startDate && $startDate->format('Y') == $lastYear;
        });
        
        $projectGrowth = count($lastYearProjects) > 0 
            ? round(((count($currentYearProjects) - count($lastYearProjects)) / count($lastYearProjects)) * 100, 2)
            : 0;
        
        // Budget de l'année en cours
        $currentYearBudget = array_reduce($currentYearProjects, function($sum, $p) {
            return $sum + $this->getProjectTotalBudget($p);
        }, 0);
        
        // Budget de l'année dernière
        $lastYearBudget = array_reduce($lastYearProjects, function($sum, $p) {
            return $sum + $this->getProjectTotalBudget($p);
        }, 0);
        
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

    private function isProjectDelayed($project): bool
    {
        $endDate = $project->getDateFin();
        $now = new \DateTime();
        
        if (!$endDate) {
            return false;
        }
        
        $status = $project->getStatut();
        
        // Projet en retard si date de fin dépassée et pas terminé
        return $endDate < $now && $status !== 'termine';
    }

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

    private function assessProjectRisk($project): string
    {
        $riskScore = 0;
        
        // Facteurs de risque
        if ($this->isProjectDelayed($project)) {
            $riskScore += 3;
        }
        
        $progress = $project->getTauxRealisation() ?? 0;
        if ($progress < 30) {
            $riskScore += 2;
        }
        
        if ($project->getStatut() === 'suspendu') {
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

    private function calculateProjectTotalBudget($project, array $financingDetails): float
    {
        return array_reduce($financingDetails, fn($sum, $f) => $sum + ($f->getMontantTotal() ?? 0), 0);
    }

    private function calculateProjectTotalDisbursed($project, array $disbursements): float
    {
        return array_reduce($disbursements, fn($sum, $d) => $sum + ($d->getMontant() ?? 0), 0);
    }

    private function calculateProjectDisbursementRate($project, array $financingDetails, array $disbursements): float
    {
        $totalBudget = $this->calculateProjectTotalBudget($project, $financingDetails);
        $totalDisbursed = $this->calculateProjectTotalDisbursed($project, $disbursements);
        
        return $totalBudget > 0 ? round(($totalDisbursed / $totalBudget) * 100, 2) : 0;
    }

    private function calculateProjectFinancialProgress($project, array $financingDetails, array $disbursements): float
    {
        return $this->calculateProjectDisbursementRate($project, $financingDetails, $disbursements);
    }

    private function calculateProjectMonthlyProgress($project, array $disbursements): array
    {
        $progress = [];
        
        foreach ($disbursements as $disbursement) {
            $date = $disbursement->getDateDecaissement();
            if ($date) {
                $monthKey = $date->format('Y-m');
                if (!isset($progress[$monthKey])) {
                    $progress[$monthKey] = 0;
                }
                $progress[$monthKey] += $disbursement->getMontant() ?? 0;
            }
        }
        
        ksort($progress);
        return $progress;
    }

    private function calculateFinancingTotalDisbursed(array $disbursements): float
    {
        return array_reduce($disbursements, fn($sum, $d) => $sum + ($d->getMontant() ?? 0), 0);
    }

    private function calculateFinancingDisbursementRate($financing, array $disbursements): float
    {
        $totalAmount = $financing->getMontantTotal() ?? 0;
        $totalDisbursed = $this->calculateFinancingTotalDisbursed($disbursements);
        
        return $totalAmount > 0 ? round(($totalDisbursed / $totalAmount) * 100, 2) : 0;
    }

    private function calculateFinancingRemainingAmount($financing, array $disbursements): float
    {
        $totalAmount = $financing->getMontantTotal() ?? 0;
        $totalDisbursed = $this->calculateFinancingTotalDisbursed($disbursements);
        
        return $totalAmount - $totalDisbursed;
    }

    private function calculateAverageProjectSize(array $projects): float
    {
        if (empty($projects)) {
            return 0;
        }
        
        $totalBudget = array_reduce($projects, function($sum, $p) {
            return $sum + $this->getProjectTotalBudget($p);
        }, 0);
        
        return round($totalBudget / count($projects), 2);
    }

    private function calculateFinancingSuccessRate(array $projects): float
    {
        if (empty($projects)) {
            return 0;
        }
        
        $completedProjects = count(array_filter($projects, fn($p) => $p->getStatut() === 'termine'));
        
        return round(($completedProjects / count($projects)) * 100, 2);
    }

    private function calculateFinancingSectorDistribution(array $projects): array
    {
        $distribution = [];
        
        foreach ($projects as $project) {
            $sector = $project->getSecteur() ?? 'Non défini';
            
            if (!isset($distribution[$sector])) {
                $distribution[$sector] = 0;
            }
            
            $distribution[$sector]++;
        }
        
        return $distribution;
    }

    private function calculateFinancingDisbursementEvolution(array $disbursements): array
    {
        $evolution = [];
        
        foreach ($disbursements as $disbursement) {
            $date = $disbursement->getDateDecaissement();
            if ($date) {
                $monthKey = $date->format('Y-m');
                if (!isset($evolution[$monthKey])) {
                    $evolution[$monthKey] = 0;
                }
                $evolution[$monthKey] += $disbursement->getMontant() ?? 0;
            }
        }
        
        ksort($evolution);
        return $evolution;
    }

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
