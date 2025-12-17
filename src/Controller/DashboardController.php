<?php

namespace App\Controller;

use App\Entity\Conges;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(
    ): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();
    
        return $this->render('dashboard/index.html.twig');
    }
    
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function adminDashboard(
        EmployeRepository $employeRepository,
        CongesRepository $congesRepository,
        PointageRepository $pointageRepository
    ): Response
    {
        // Vérifier que l'utilisateur est admin
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $user = $this->getUser();
        $institution = $user->getInstitution();
        
        if (!$institution) {
            throw new AccessDeniedException('Vous devez être associé à une institution.');
        }
        
        // Dashboard administrateur avec vue globale de l'institution
        $stats = [
            'totalEmployes' => $employeRepository->countByInstitution($institution),
            'totalServices' => $this->getDoctrine()->getRepository(Service::class)->countByInstitution($institution),
            'congesEnAttente' => $congesRepository->countPendingByInstitution($institution),
            'tauxPresenceGlobal' => $pointageRepository->getGlobalPresenceRateByInstitution($institution),
        ];
        
        // Statistiques par service
        $statsByService = $pointageRepository->getStatsByServiceAndInstitution($institution);
        
        // Historique sur 12 mois
        $yearlyStats = $pointageRepository->getYearlyStatsByInstitution($institution);
        
        return $this->render('dashboard/admin.html.twig', [
            'stats' => $stats,
            'statsByService' => $statsByService,
            'yearlyStats' => $yearlyStats,
        ]);
    }
}