<?php

namespace App\Repository;

use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

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
     * Sauvegarde un projet
     */
    public function save(Project $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Supprime un projet
     */
    public function remove(Project $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve tous les projets actifs (non suspendus)
     */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status != :status')
            ->setParameter('status', Project::STATUS_SUSPENDU)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets par secteur
     */
    public function findBySector(string $sector): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.sector = :sector')
            ->setParameter('sector', $sector)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets par statut
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = :status')
            ->setParameter('status', $status)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les projets par priorité
     */
    public function findByPriority(string $priority): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.priorite = :priority')
            ->setParameter('priority', $priority)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche fulltext
     */
    public function search(string $query): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.name LIKE :query OR p.code LIKE :query OR p.description LIKE :query OR p.localisation LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve un projet par son slug
     */
    public function findBySlug(string $slug): ?Project
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Trouve un projet par son code
     */
    public function findByCode(string $code): ?Project
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.code = :code')
            ->setParameter('code', $code)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Liste paginée avec filtres multiples
     */
    public function findPaginated(
        int $page = 1,
        int $limit = 10,
        ?string $search = null,
        ?string $status = null,
        ?string $sector = null,
        ?string $priority = null
    ): array {
        $qb = $this->createFilteredQueryBuilder($search, $status, $sector, $priority);

        return $qb
            ->orderBy('p.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de résultats filtrés
     */
    public function countFiltered(
        ?string $search = null,
        ?string $status = null,
        ?string $sector = null,
        ?string $priority = null
    ): int {
        $qb = $this->createFilteredQueryBuilder($search, $status, $sector, $priority);

        return (int) $qb
            ->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Crée un QueryBuilder avec les filtres appliqués
     */
    private function createFilteredQueryBuilder(
        ?string $search = null,
        ?string $status = null,
        ?string $sector = null,
        ?string $priority = null
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('p');

        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.code LIKE :search OR p.description LIKE :search OR p.localisation LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $status);
        }

        if ($sector) {
            $qb->andWhere('p.sector = :sector')
               ->setParameter('sector', $sector);
        }

        if ($priority) {
            $qb->andWhere('p.priorite = :priority')
               ->setParameter('priority', $priority);
        }

        return $qb;
    }

    /**
     * Statistiques générales
     */
    public function getStatistics(): array
    {
        $total = $this->count([]);
        
        $byStatus = $this->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();

        $bySector = $this->createQueryBuilder('p')
            ->select('p.sector, COUNT(p.id) as count')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();

        $byPriority = $this->createQueryBuilder('p')
            ->select('p.priorite, COUNT(p.id) as count')
            ->groupBy('p.priorite')
            ->getQuery()
            ->getResult();

        $budgetTotal = $this->createQueryBuilder('p')
            ->select('SUM(p.budgetTotal) as total')
            ->getQuery()
            ->getSingleScalarResult();

        $montantDecaisse = $this->createQueryBuilder('p')
            ->select('SUM(p.montantDecaisse) as total')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total' => $total,
            'byStatus' => $byStatus,
            'bySector' => $bySector,
            'byPriority' => $byPriority,
            'budgetTotal' => $budgetTotal ?? 0,
            'montantDecaisse' => $montantDecaisse ?? 0,
        ];
    }

    /**
     * Compte par statut
     */
    public function countByStatus(): array
    {
        $results = $this->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['status']] = $result['count'];
        }

        return $counts;
    }

    /**
     * Compte par secteur
     */
    public function countBySector(): array
    {
        $results = $this->createQueryBuilder('p')
            ->select('p.sector, COUNT(p.id) as count')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['sector']] = $result['count'];
        }

        return $counts;
    }

    /**
     * Projets récents
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Projets en retard
     */
    public function findDelayed(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = :status')
            ->setParameter('status', Project::STATUS_EN_RETARD)
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Projets dont la date de fin approche
     */
    public function findApproachingDeadline(int $days = 30): array
    {
        $now = new \DateTime();
        $deadline = (new \DateTime())->modify("+{$days} days");

        return $this->createQueryBuilder('p')
            ->andWhere('p.dateFin BETWEEN :now AND :deadline')
            ->andWhere('p.status NOT IN (:excludedStatuses)')
            ->setParameter('now', $now)
            ->setParameter('deadline', $deadline)
            ->setParameter('excludedStatuses', [Project::STATUS_TERMINE, Project::STATUS_SUSPENDU])
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Budget total par secteur
     */
    public function getBudgetBySector(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.sector, SUM(p.budgetTotal) as budget, SUM(p.montantDecaisse) as decaisse')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();
    }

    /**
     * Progression moyenne par secteur
     */
    public function getAverageProgressBySector(): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.sector, AVG(p.progress) as avgProgress')
            ->groupBy('p.sector')
            ->getQuery()
            ->getResult();
    }

    /**
     * Projets haute priorité en cours
     */
    public function findHighPriorityOngoing(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.priorite = :priority')
            ->andWhere('p.status = :status')
            ->setParameter('priority', Project::PRIORITY_HAUTE)
            ->setParameter('status', Project::STATUS_EN_COURS)
            ->orderBy('p.dateFin', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Génère un nouveau code projet
     */
    public function generateNewCode(): string
    {
        $year = date('Y');
        
        $lastProject = $this->createQueryBuilder('p')
            ->andWhere('p.code LIKE :pattern')
            ->setParameter('pattern', "PRJ-{$year}-%")
            ->orderBy('p.code', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if ($lastProject) {
            $lastCode = $lastProject->getCode();
            $lastNumber = (int) substr($lastCode, -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        return "PRJ-{$year}-{$newNumber}";
    }
}
