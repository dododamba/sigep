<?php

namespace App\Service;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;

class ProjectStatisticsService
{
    public function __construct(
        private ProjectRepository $projectRepository
    ) {}

    public function getDashboardStatistics(?int $institutionId = null): array
    {
        $totalProjects = $this->projectRepository->countProjects($institutionId);
        $enCours = $this->projectRepository->countProjectsByStatus(Project::STATUS_EN_COURS, $institutionId);
        $enRetard = $this->projectRepository->countProjectsByStatus(Project::STATUS_EN_RETARD, $institutionId);
        $termines = $this->projectRepository->countProjectsByStatus(Project::STATUS_TERMINE, $institutionId);
        $planifies = $this->projectRepository->countProjectsByStatus(Project::STATUS_PLANIFIE, $institutionId);
        
        $budgetTotal = $this->projectRepository->getSumBudgetTotal($institutionId);
        $montantDecaisse = $this->projectRepository->getSumMontantDecaisse($institutionId);

        return [
            'total' => $totalProjects,
            'enCours' => $enCours,
            'enRetard' => $enRetard,
            'termines' => $termines,
            'planifies' => $planifies,
            'budgetTotal' => $budgetTotal,
            'montantDecaisse' => $montantDecaisse,
        ];
    }
}
