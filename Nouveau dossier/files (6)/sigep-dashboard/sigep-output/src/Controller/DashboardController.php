<?php

namespace App\Controller;

use App\Entity\Project;
use App\Entity\Institution;
use App\Entity\Partner;
use App\Entity\Financement;
use App\Entity\Decaissement;
use App\Entity\Audit;
use App\Entity\Convention;
use App\Entity\User;
use App\Repository\ProjectRepository;
use App\Repository\InstitutionRepository;
use App\Repository\PartnerRepository;
use App\Repository\FinancementRepository;
use App\Repository\DecaissementRepository;
use App\Repository\AuditRepository;
use App\Repository\ConventionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em,
        private ProjectRepository $projectRepository,
        private FinancementRepository $financementRepository,
        private DecaissementRepository $decaissementRepository,
        private InstitutionRepository $institutionRepository,
        private PartnerRepository $partnerRepository,
        private AuditRepository $auditRepository,
    ) {}

    #[Route('/', name: 'app_dashboard', methods: ['GET'])]
    public function index(): Response
    {
        // === STATISTIQUES PROJETS ===
        $totalProjects = $this->projectRepository->count([]);
        $projectsActifs = $this->projectRepository->count(['status' => Project::STATUS_EN_COURS]);
        $projectsTermines = $this->projectRepository->count(['status' => Project::STATUS_TERMINE]);
        $projectsEnRetard = $this->projectRepository->count(['status' => Project::STATUS_EN_RETARD]);
        $projectsPlanifies = $this->projectRepository->count(['status' => Project::STATUS_PLANIFIE]);
        $projectsSuspendus = $this->projectRepository->count(['status' => Project::STATUS_SUSPENDU]);

        // Projets créés ce mois
        $debutMois = new \DateTime('first day of this month midnight');
        $projectsCeMois = $this->projectRepository->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.createdAt >= :debut')
            ->setParameter('debut', $debutMois)
            ->getQuery()
            ->getSingleScalarResult();

        // === STATISTIQUES FINANCIÈRES ===
        $budgetTotal = $this->projectRepository->createQueryBuilder('p')
            ->select('SUM(p.budgetTotal)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $montantDecaisseTotal = $this->projectRepository->createQueryBuilder('p')
            ->select('SUM(p.montantDecaisse)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $tauxExecution = $budgetTotal > 0 ? round(($montantDecaisseTotal / $budgetTotal) * 100, 1) : 0;

        // Financements
        $totalFinancements = $this->financementRepository->count([]);
        $financementsActifs = $this->financementRepository->count(['statut' => Financement::STATUT_ACTIF]);
        
        $montantEngageTotal = $this->financementRepository->createQueryBuilder('f')
            ->select('SUM(f.montantEngage)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $montantDecaisseFinancements = $this->financementRepository->createQueryBuilder('f')
            ->select('SUM(f.montantDecaisse)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        // === STATISTIQUES PAR SECTEUR ===
        $statsBySector = $this->projectRepository->createQueryBuilder('p')
            ->select('p.sector, COUNT(p.id) as count, SUM(p.budgetTotal) as budget, SUM(p.montantDecaisse) as decaisse, AVG(p.progress) as avgProgress')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();

        $sectorsData = [];
        foreach ($statsBySector as $stat) {
            $sectorsData[$stat['sector']] = [
                'count' => $stat['count'],
                'budget' => (float) $stat['budget'],
                'decaisse' => (float) $stat['decaisse'],
                'avgProgress' => round((float) $stat['avgProgress'], 1),
                'tauxExecution' => $stat['budget'] > 0 ? round(($stat['decaisse'] / $stat['budget']) * 100, 1) : 0,
            ];
        }

        // === STATISTIQUES PAR STATUT ===
        $statsByStatus = $this->projectRepository->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();

        // === DERNIERS PROJETS ===
        $recentProjects = $this->projectRepository->findBy(
            [],
            ['createdAt' => 'DESC'],
            10
        );

        // === DERNIERS DÉCAISSEMENTS ===
        $recentDecaissements = $this->decaissementRepository->findBy(
            [],
            ['createdAt' => 'DESC'],
            5
        );

        // Décaissements en attente
        $decaissementsEnAttente = $this->decaissementRepository->count(['statut' => 'en_attente']);
        $decaissementsValides = $this->decaissementRepository->count(['statut' => 'valide']);
        $decaissementsExecutes = $this->decaissementRepository->count(['statut' => 'execute']);

        // Montant total des décaissements exécutés
        $montantDecaissementsExecutes = $this->decaissementRepository->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'execute')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        // === STATISTIQUES INSTITUTIONS & PARTENAIRES ===
        $totalInstitutions = $this->institutionRepository->count([]);
        $institutionsActives = $this->institutionRepository->count(['status' => 'Actif']);
        
        $totalPartners = $this->partnerRepository->count([]);
        $partnersActifs = $this->partnerRepository->count(['status' => 'Actif']);

        // === AUDITS ===
        $totalAudits = $this->auditRepository->count([]);
        $auditsPlanifies = $this->auditRepository->count(['statut' => 'planifie']);
        $auditsEnCours = $this->auditRepository->count(['statut' => 'en_cours']);
        $auditsTermines = $this->auditRepository->count(['statut' => 'termine']);

        // Audits récents
        $recentAudits = $this->auditRepository->findBy(
            [],
            ['dateAudit' => 'DESC'],
            5
        );

        // === PROJETS À RISQUE (deadline proche) ===
        $dateLimite = new \DateTime('+30 days');
        $projetsArisque = $this->projectRepository->createQueryBuilder('p')
            ->where('p.dateFin <= :limite')
            ->andWhere('p.dateFin >= :today')
            ->andWhere('p.status = :status')
            ->andWhere('p.progress < 80')
            ->setParameter('limite', $dateLimite)
            ->setParameter('today', new \DateTime())
            ->setParameter('status', Project::STATUS_EN_COURS)
            ->orderBy('p.dateFin', 'ASC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        // === EVOLUTION MENSUELLE (12 derniers mois) ===
        $evolutionMensuelle = $this->getEvolutionMensuelle();

        // === RÉPARTITION PAR PRIORITÉ ===
        $statsByPriority = $this->projectRepository->createQueryBuilder('p')
            ->select('p.priorite, COUNT(p.id) as count')
            ->groupBy('p.priorite')
            ->getQuery()
            ->getResult();

        // === TOP PARTENAIRES PAR PROJETS ===
        $topPartners = $this->partnerRepository->createQueryBuilder('p')
            ->select('p.name, p.acronym, COUNT(proj.id) as projectCount')
            ->leftJoin('p.projects', 'proj')
            ->groupBy('p.id')
            ->orderBy('projectCount', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();

        // === ACTIVITÉS RÉCENTES (simulées basées sur les données) ===
        $activitesRecentes = $this->getActivitesRecentes();

        return $this->render('dashboard/index.html.twig', [
            // Statistiques principales
            'stats' => [
                'totalProjects' => $totalProjects,
                'projectsActifs' => $projectsActifs,
                'projectsTermines' => $projectsTermines,
                'projectsEnRetard' => $projectsEnRetard,
                'projectsPlanifies' => $projectsPlanifies,
                'projectsSuspendus' => $projectsSuspendus,
                'projectsCeMois' => $projectsCeMois,
                'budgetTotal' => $budgetTotal,
                'montantDecaisse' => $montantDecaisseTotal,
                'tauxExecution' => $tauxExecution,
                'totalFinancements' => $totalFinancements,
                'financementsActifs' => $financementsActifs,
                'montantEngage' => $montantEngageTotal,
                'montantDecaisseFinancements' => $montantDecaisseFinancements,
                'totalInstitutions' => $totalInstitutions,
                'institutionsActives' => $institutionsActives,
                'totalPartners' => $totalPartners,
                'partnersActifs' => $partnersActifs,
                'totalAudits' => $totalAudits,
                'auditsPlanifies' => $auditsPlanifies,
                'auditsEnCours' => $auditsEnCours,
                'auditsTermines' => $auditsTermines,
                'decaissementsEnAttente' => $decaissementsEnAttente,
                'decaissementsValides' => $decaissementsValides,
                'decaissementsExecutes' => $decaissementsExecutes,
                'montantDecaissementsExecutes' => $montantDecaissementsExecutes,
            ],
            
            // Données par secteur
            'sectorsData' => $sectorsData,
            'statsByStatus' => $statsByStatus,
            'statsByPriority' => $statsByPriority,
            
            // Listes récentes
            'recentProjects' => $recentProjects,
            'recentDecaissements' => $recentDecaissements,
            'recentAudits' => $recentAudits,
            'projetsArisque' => $projetsArisque,
            'topPartners' => $topPartners,
            
            // Évolution et activités
            'evolutionMensuelle' => $evolutionMensuelle,
            'activitesRecentes' => $activitesRecentes,
            
            // Date actuelle
            'currentDate' => new \DateTime(),
        ]);
    }

    #[Route('/api/stats', name: 'app_dashboard_api_stats', methods: ['GET'])]
    public function apiStats(): JsonResponse
    {
        $totalProjects = $this->projectRepository->count([]);
        $projectsActifs = $this->projectRepository->count(['status' => Project::STATUS_EN_COURS]);
        $projectsEnRetard = $this->projectRepository->count(['status' => Project::STATUS_EN_RETARD]);

        $budgetTotal = $this->projectRepository->createQueryBuilder('p')
            ->select('SUM(p.budgetTotal)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $montantDecaisse = $this->projectRepository->createQueryBuilder('p')
            ->select('SUM(p.montantDecaisse)')
            ->getQuery()
            ->getSingleScalarResult() ?? 0;

        $tauxExecution = $budgetTotal > 0 ? round(($montantDecaisse / $budgetTotal) * 100, 1) : 0;

        return new JsonResponse([
            'totalProjects' => $totalProjects,
            'projectsActifs' => $projectsActifs,
            'projectsEnRetard' => $projectsEnRetard,
            'budgetTotal' => $budgetTotal,
            'montantDecaisse' => $montantDecaisse,
            'tauxExecution' => $tauxExecution,
        ]);
    }

    #[Route('/api/chart/sectors', name: 'app_dashboard_api_chart_sectors', methods: ['GET'])]
    public function apiChartSectors(): JsonResponse
    {
        $stats = $this->projectRepository->createQueryBuilder('p')
            ->select('p.sector, COUNT(p.id) as count, SUM(p.budgetTotal) as budget, SUM(p.montantDecaisse) as decaisse')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();

        $labels = [];
        $budgets = [];
        $decaisses = [];
        $tauxExecution = [];

        $sectorLabels = [
            'infrastructure' => 'Infrastructure',
            'sante' => 'Santé',
            'energie' => 'Énergie',
            'agriculture' => 'Agriculture',
            'education' => 'Éducation',
            'eau' => 'Eau & Assainissement',
        ];

        foreach ($stats as $stat) {
            $labels[] = $sectorLabels[$stat['sector']] ?? ucfirst($stat['sector']);
            $budgets[] = round((float) $stat['budget'] / 1000000000, 2); // En milliards
            $decaisses[] = round((float) $stat['decaisse'] / 1000000000, 2);
            $tauxExecution[] = $stat['budget'] > 0 
                ? round(($stat['decaisse'] / $stat['budget']) * 100, 1) 
                : 0;
        }

        return new JsonResponse([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Budget engagé (Mds FCFA)',
                    'data' => $budgets,
                    'backgroundColor' => 'rgba(0, 38, 100, 0.8)',
                ],
                [
                    'label' => 'Montant décaissé (Mds FCFA)',
                    'data' => $decaisses,
                    'backgroundColor' => 'rgba(254, 203, 0, 0.8)',
                ],
            ],
            'tauxExecution' => $tauxExecution,
        ]);
    }

    #[Route('/api/chart/evolution', name: 'app_dashboard_api_chart_evolution', methods: ['GET'])]
    public function apiChartEvolution(): JsonResponse
    {
        $evolution = $this->getEvolutionMensuelle();

        return new JsonResponse([
            'labels' => array_column($evolution, 'mois'),
            'datasets' => [
                [
                    'label' => 'Projets créés',
                    'data' => array_column($evolution, 'projets'),
                    'borderColor' => '#002664',
                    'backgroundColor' => 'rgba(0, 38, 100, 0.1)',
                    'tension' => 0.4,
                    'fill' => true,
                ],
                [
                    'label' => 'Décaissements (Mds)',
                    'data' => array_column($evolution, 'decaissements'),
                    'borderColor' => '#FECB00',
                    'backgroundColor' => 'rgba(254, 203, 0, 0.1)',
                    'tension' => 0.4,
                    'fill' => true,
                ],
            ],
        ]);
    }

    #[Route('/api/chart/status', name: 'app_dashboard_api_chart_status', methods: ['GET'])]
    public function apiChartStatus(): JsonResponse
    {
        $stats = $this->projectRepository->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();

        $statusLabels = [
            'planifie' => 'Planifié',
            'en-cours' => 'En cours',
            'en-retard' => 'En retard',
            'termine' => 'Terminé',
            'suspendu' => 'Suspendu',
        ];

        $statusColors = [
            'planifie' => '#6b7280',
            'en-cours' => '#002664',
            'en-retard' => '#c60c30',
            'termine' => '#10b981',
            'suspendu' => '#f59e0b',
        ];

        $labels = [];
        $data = [];
        $colors = [];

        foreach ($stats as $stat) {
            $labels[] = $statusLabels[$stat['status']] ?? ucfirst($stat['status']);
            $data[] = $stat['count'];
            $colors[] = $statusColors[$stat['status']] ?? '#6b7280';
        }

        return new JsonResponse([
            'labels' => $labels,
            'datasets' => [
                [
                    'data' => $data,
                    'backgroundColor' => $colors,
                ],
            ],
        ]);
    }

    private function getEvolutionMensuelle(): array
    {
        $evolution = [];
        $now = new \DateTime();

        for ($i = 11; $i >= 0; $i--) {
            $date = (clone $now)->modify("-{$i} months");
            $debut = (clone $date)->modify('first day of this month midnight');
            $fin = (clone $date)->modify('last day of this month 23:59:59');

            $projetsCount = $this->projectRepository->createQueryBuilder('p')
                ->select('COUNT(p.id)')
                ->where('p.createdAt BETWEEN :debut AND :fin')
                ->setParameter('debut', $debut)
                ->setParameter('fin', $fin)
                ->getQuery()
                ->getSingleScalarResult();

            $decaissementsSum = $this->decaissementRepository->createQueryBuilder('d')
                ->select('SUM(d.montant)')
                ->where('d.dateExecution BETWEEN :debut AND :fin')
                ->andWhere('d.statut = :statut')
                ->setParameter('debut', $debut)
                ->setParameter('fin', $fin)
                ->setParameter('statut', 'execute')
                ->getQuery()
                ->getSingleScalarResult() ?? 0;

            $evolution[] = [
                'mois' => $date->format('M Y'),
                'moisCourt' => $this->getMoisFrancais($date->format('n')),
                'projets' => (int) $projetsCount,
                'decaissements' => round((float) $decaissementsSum / 1000000000, 2),
            ];
        }

        return $evolution;
    }

    private function getActivitesRecentes(): array
    {
        $activites = [];

        // Derniers décaissements exécutés
        $decaissements = $this->decaissementRepository->findBy(
            ['statut' => 'execute'],
            ['dateExecution' => 'DESC'],
            3
        );

        foreach ($decaissements as $dec) {
            $activites[] = [
                'type' => 'decaissement',
                'icon' => 'check-circle',
                'iconClass' => 'green',
                'title' => 'Décaissement validé',
                'description' => $dec->getProject() 
                    ? $dec->getProject()->getName() . ' - ' . $this->formatMontant($dec->getMontant())
                    : 'Décaissement de ' . $this->formatMontant($dec->getMontant()),
                'date' => $dec->getDateExecution() ?? $dec->getCreatedAt(),
            ];
        }

        // Derniers audits planifiés
        $audits = $this->auditRepository->findBy(
            ['statut' => 'planifie'],
            ['dateAudit' => 'ASC'],
            2
        );

        foreach ($audits as $audit) {
            $activites[] = [
                'type' => 'audit',
                'icon' => 'clipboard-check',
                'iconClass' => 'blue',
                'title' => 'Audit planifié',
                'description' => $audit->getTitre() . ' - ' . $audit->getDateAudit()->format('d/m/Y'),
                'date' => $audit->getCreatedAt(),
            ];
        }

        // Projets récemment créés
        $projets = $this->projectRepository->findBy(
            [],
            ['createdAt' => 'DESC'],
            2
        );

        foreach ($projets as $projet) {
            $activites[] = [
                'type' => 'projet',
                'icon' => 'folder-plus',
                'iconClass' => 'gold',
                'title' => 'Nouveau projet',
                'description' => $projet->getName() . ' - ' . $projet->getSectorLabel(),
                'date' => $projet->getCreatedAt(),
            ];
        }

        // Projets en retard (alertes)
        $projetsRetard = $this->projectRepository->findBy(
            ['status' => Project::STATUS_EN_RETARD],
            ['updatedAt' => 'DESC'],
            2
        );

        foreach ($projetsRetard as $projet) {
            $activites[] = [
                'type' => 'alerte',
                'icon' => 'alert-circle',
                'iconClass' => 'red',
                'title' => 'Alerte retard',
                'description' => $projet->getName() . ' - ' . $projet->getProgress() . '% achevé',
                'date' => $projet->getUpdatedAt() ?? $projet->getCreatedAt(),
            ];
        }

        // Trier par date décroissante
        usort($activites, function ($a, $b) {
            return $b['date'] <=> $a['date'];
        });

        return array_slice($activites, 0, 6);
    }

    private function formatMontant(string $montant): string
    {
        $value = (float) $montant;
        if ($value >= 1000000000) {
            return number_format($value / 1000000000, 1, ',', ' ') . ' Mds FCFA';
        } elseif ($value >= 1000000) {
            return number_format($value / 1000000, 1, ',', ' ') . ' M FCFA';
        }
        return number_format($value, 0, ',', ' ') . ' FCFA';
    }

    private function getMoisFrancais(int $mois): string
    {
        $moisFr = [
            1 => 'Jan', 2 => 'Fév', 3 => 'Mar', 4 => 'Avr',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juil', 8 => 'Août',
            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Déc'
        ];
        return $moisFr[$mois] ?? '';
    }

    private function getTimeAgo(\DateTimeInterface $date): string
    {
        $now = new \DateTime();
        $diff = $now->diff($date);

        if ($diff->days == 0) {
            if ($diff->h == 0) {
                return 'Il y a ' . max(1, $diff->i) . ' min';
            }
            return 'Il y a ' . $diff->h . 'h';
        } elseif ($diff->days == 1) {
            return 'Hier';
        } elseif ($diff->days < 7) {
            return 'Il y a ' . $diff->days . ' jours';
        } else {
            return $date->format('d/m/Y');
        }
    }
}
