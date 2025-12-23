<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Project>
 */
class ProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Project::class);
    }

    /**
     * Trouve les projets actifs (en cours)
     */
    public function findActifs(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', Project::STATUS_EN_COURS)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets en retard
     */
    public function findEnRetard(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', Project::STATUS_EN_RETARD)
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets par secteur
     */
    public function findBySector(string $sector): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.sector = :sector')
            ->setParameter('sector', $sector)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets par institution
     */
    public function findByInstitution(int $institutionId): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.institution = :institution')
            ->setParameter('institution', $institutionId)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par secteur
     */
    public function getStatsBySector(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.sector, COUNT(p.id) as count, SUM(p.budgetTotal) as budget, SUM(p.montantDecaisse) as decaisse, AVG(p.progress) as avgProgress')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par statut
     */
    public function getStatsByStatus(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();
    }

    /**
     * Projets créés dans une période
     */
    public function findCreatedBetween(\DateTimeInterface $start, \DateTimeInterface $end): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.createdAt BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les projets créés dans une période
     */
    public function countCreatedBetween(\DateTimeInterface $start, \DateTimeInterface $end): int
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.createdAt BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Projets avec deadline proche
     */
    public function findWithUpcomingDeadline(int $days = 30): array
    {
        $deadline = (new \DateTime())->modify("+{$days} days");
        
        return $this->createQueryBuilder('p')
            ->where('p.dateFin <= :deadline')
            ->andWhere('p.dateFin >= :today')
            ->andWhere('p.status = :status')
            ->setParameter('deadline', $deadline)
            ->setParameter('today', new \DateTime())
            ->setParameter('status', Project::STATUS_EN_COURS)
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Projets à risque (deadline proche et progression insuffisante)
     */
    public function findAtRisk(int $days = 30, int $minProgress = 80): array
    {
        $deadline = (new \DateTime())->modify("+{$days} days");
        
        return $this->createQueryBuilder('p')
            ->where('p.dateFin <= :deadline')
            ->andWhere('p.dateFin >= :today')
            ->andWhere('p.status = :status')
            ->andWhere('p.progress < :minProgress')
            ->setParameter('deadline', $deadline)
            ->setParameter('today', new \DateTime())
            ->setParameter('status', Project::STATUS_EN_COURS)
            ->setParameter('minProgress', $minProgress)
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Budget total engagé
     */
    public function getTotalBudget(): float
    {
        $result = $this->createQueryBuilder('p')
            ->select('SUM(p.budgetTotal)')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Montant total décaissé
     */
    public function getTotalDecaisse(): float
    {
        $result = $this->createQueryBuilder('p')
            ->select('SUM(p.montantDecaisse)')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Taux d'exécution global
     */
    public function getTauxExecution(): float
    {
        $budget = $this->getTotalBudget();
        $decaisse = $this->getTotalDecaisse();
        
        if ($budget <= 0) {
            return 0.0;
        }
        
        return round(($decaisse / $budget) * 100, 2);
    }

    /**
     * Recherche avancée
     */
    public function search(
        ?string $query = null,
        ?string $sector = null,
        ?string $status = null,
        ?string $priority = null,
        ?int $institutionId = null,
        string $orderBy = 'createdAt',
        string $orderDir = 'DESC'
    ): array {
        $qb = $this->createQueryBuilder('p');

        if ($query) {
            $qb->andWhere('p.name LIKE :query OR p.code LIKE :query OR p.description LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        if ($sector) {
            $qb->andWhere('p.sector = :sector')
               ->setParameter('sector', $sector);
        }

        if ($status) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $status);
        }

        if ($priority) {
            $qb->andWhere('p.priorite = :priority')
               ->setParameter('priority', $priority);
        }

        if ($institutionId) {
            $qb->andWhere('p.institution = :institution')
               ->setParameter('institution', $institutionId);
        }

        $qb->orderBy('p.' . $orderBy, $orderDir);

        return $qb->getQuery()->getResult();
    }

    /**
     * Projets récents avec relations
     */
    public function findRecentWithRelations(int $limit = 10): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.institution', 'i')
            ->leftJoin('p.partnerPrincipal', 'pp')
            ->addSelect('i', 'pp')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Top projets par budget
     */
    public function findTopByBudget(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.budgetTotal IS NOT NULL')
            ->orderBy('p.budgetTotal', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
