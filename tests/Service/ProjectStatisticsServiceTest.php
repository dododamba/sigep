<?php

namespace App\Tests\Service;

use App\Entity\Project;
use App\Repository\ProjectRepository;
use App\Service\ProjectStatisticsService;
use PHPUnit\Framework\TestCase;

class ProjectStatisticsServiceTest extends TestCase
{
    private ProjectRepository $projectRepository;
    private ProjectStatisticsService $service;

    protected function setUp(): void
    {
        // Mock the ProjectRepository
        $this->projectRepository = $this->createMock(ProjectRepository::class);
        
        // Instantiate the service with the mocked repository
        $this->service = new ProjectStatisticsService($this->projectRepository);
    }

    public function testGetDashboardStatisticsWithSuperAdmin(): void
    {
        // Mock repository methods
        $this->projectRepository->expects($this->once())
            ->method('countProjects')
            ->with(null) // Expect null institutionId for super admin
            ->willReturn(10);
        
        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_EN_COURS, null)
            ->willReturn(5);

        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_TERMINE, null)
            ->willReturn(3);

        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_EN_RETARD, null)
            ->willReturn(2);

        $this->projectRepository->expects($this->once())
            ->method('getSumBudgetTotal')
            ->with(null)
            ->willReturn('10000000000'); // 10 billion

        // Call the service method
        $stats = $this->service->getDashboardStatistics(null); // null for super admin

        // Assertions
        $this->assertIsArray($stats);
        $this->assertArrayHasKey('total', $stats);
        $this->assertArrayHasKey('enCours', $stats);
        $this->assertArrayHasKey('termines', $stats);
        $this->assertArrayHasKey('enRetard', $stats);
        $this->assertArrayHasKey('budgetTotal', $stats);
        
        $this->assertEquals(10, $stats['total']);
        $this->assertEquals(5, $stats['enCours']);
        $this->assertEquals(3, $stats['termines']);
        $this->assertEquals(2, $stats['enRetard']);
        $this->assertEquals('10000000000', $stats['budgetTotal']);
    }

    public function testGetDashboardStatisticsWithInstitutionId(): void
    {
        $institutionId = 1;

        // Mock repository methods with institutionId
        $this->projectRepository->expects($this->once())
            ->method('countProjects')
            ->with($institutionId)
            ->willReturn(5);
        
        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_EN_COURS, $institutionId)
            ->willReturn(2);

        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_TERMINE, $institutionId)
            ->willReturn(1);

        $this->projectRepository->expects($this->once())
            ->method('countProjectsByStatus')
            ->with(Project::STATUS_EN_RETARD, $institutionId)
            ->willReturn(1);

        $this->projectRepository->expects($this->once())
            ->method('getSumBudgetTotal')
            ->with($institutionId)
            ->willReturn('5000000000'); // 5 billion

        // Call the service method
        $stats = $this->service->getDashboardStatistics($institutionId);

        // Assertions
        $this->assertIsArray($stats);
        $this->assertEquals(5, $stats['total']);
        $this->assertEquals(2, $stats['enCours']);
        $this->assertEquals(1, $stats['termines']);
        $this->assertEquals(1, $stats['enRetard']);
        $this->assertEquals('5000000000', $stats['budgetTotal']);
    }
}
