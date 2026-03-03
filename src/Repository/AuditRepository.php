<?php

namespace App\Repository;

use App\Entity\Audit;
use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Audit>
 */
class AuditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Audit::class);
    }

    public function save(Audit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Audit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Finds audits associated with a specific project.
     */
    public function findByProject(Project $project): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.project = :project')
            ->setParameter('project', $project)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAllWithPagination(int $page, int $limit): array
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.dateAudit', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countAll(): int
    {
        return $this->createQueryBuilder('a')
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getStatistiquesByStatut(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.statut, count(a.id) as nombre')
            ->groupBy('a.statut')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $row) {
            $stats[$row['statut']] = (int) $row['nombre'];
        }

        return $stats;
    }

    public function getStatistiquesByType(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.type, count(a.id) as nombre')
            ->groupBy('a.type')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $row) {
            $stats[$row['type']] = (int) $row['nombre'];
        }

        return $stats;
    }

    public function getStatistiquesByNiveau(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.niveau, count(a.id) as nombre')
            ->groupBy('a.niveau')
            ->where('a.niveau IS NOT NULL')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $row) {
            $stats[$row['niveau']] = (int) $row['nombre'];
        }

        return $stats;
    }

}