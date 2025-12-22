<?php

namespace App\Repository;

use App\Entity\Financement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Financement>
 */
class FinancementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Financement::class);
    }

    public function save(Financement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Financement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllActive(): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.statut = :statut')
            ->setParameter('statut', Financement::STATUT_ACTIF)
            ->orderBy('f.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findBySlug(string $slug): ?Financement
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByNumeroConvention(string $numero): ?Financement
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.numeroConvention = :numero')
            ->setParameter('numero', $numero)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByBailleur(string $bailleur): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.bailleur = :bailleur')
            ->setParameter('bailleur', $bailleur)
            ->orderBy('f.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function search(string $query): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.numeroConvention LIKE :query OR f.bailleur LIKE :query OR f.conditions LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('f.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findPaginated(
        int $page = 1,
        int $limit = 10,
        ?string $search = null,
        ?string $statut = null,
        ?string $bailleur = null,
        ?string $type = null
    ): array {
        $qb = $this->createFilteredQueryBuilder($search, $statut, $bailleur, $type);

        return $qb
            ->orderBy('f.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function countFiltered(
        ?string $search = null,
        ?string $statut = null,
        ?string $bailleur = null,
        ?string $type = null
    ): int {
        $qb = $this->createFilteredQueryBuilder($search, $statut, $bailleur, $type);

        return (int) $qb
            ->select('COUNT(f.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function createFilteredQueryBuilder(
        ?string $search = null,
        ?string $statut = null,
        ?string $bailleur = null,
        ?string $type = null
    ): QueryBuilder {
        $qb = $this->createQueryBuilder('f');

        if ($search) {
            $qb->andWhere('f.numeroConvention LIKE :search OR f.bailleur LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($statut) {
            $qb->andWhere('f.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($bailleur) {
            $qb->andWhere('f.bailleur = :bailleur')
               ->setParameter('bailleur', $bailleur);
        }

        if ($type) {
            $qb->andWhere('f.type = :type')
               ->setParameter('type', $type);
        }

        return $qb;
    }

    public function getStatistics(): array
    {
        $total = $this->count([]);
        
        $montantTotal = $this->createQueryBuilder('f')
            ->select('SUM(f.montantEngage) as total')
            ->getQuery()
            ->getSingleScalarResult();

        $montantDecaisse = $this->createQueryBuilder('f')
            ->select('SUM(f.montantDecaisse) as total')
            ->getQuery()
            ->getSingleScalarResult();

        $byStatut = $this->createQueryBuilder('f')
            ->select('f.statut, COUNT(f.id) as count, SUM(f.montantEngage) as montant')
            ->groupBy('f.statut')
            ->getQuery()
            ->getResult();

        $byBailleur = $this->createQueryBuilder('f')
            ->select('f.bailleur, COUNT(f.id) as count, SUM(f.montantEngage) as montant, SUM(f.montantDecaisse) as decaisse')
            ->groupBy('f.bailleur')
            ->getQuery()
            ->getResult();

        return [
            'total' => $total,
            'montantTotal' => $montantTotal ?? 0,
            'montantDecaisse' => $montantDecaisse ?? 0,
            'byStatut' => $byStatut,
            'byBailleur' => $byBailleur,
        ];
    }

    public function countByStatut(): array
    {
        $results = $this->createQueryBuilder('f')
            ->select('f.statut, COUNT(f.id) as count')
            ->groupBy('f.statut')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['statut']] = $result['count'];
        }

        return $counts;
    }

    public function getMontantsByBailleur(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.bailleur, SUM(f.montantEngage) as engage, SUM(f.montantDecaisse) as decaisse')
            ->groupBy('f.bailleur')
            ->orderBy('engage', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findApproachingDeadline(int $days = 90): array
    {
        $now = new \DateTime();
        $deadline = (new \DateTime())->modify("+{$days} days");

        return $this->createQueryBuilder('f')
            ->andWhere('f.dateEcheance BETWEEN :now AND :deadline')
            ->andWhere('f.statut = :statut')
            ->setParameter('now', $now)
            ->setParameter('deadline', $deadline)
            ->setParameter('statut', Financement::STATUT_ACTIF)
            ->orderBy('f.dateEcheance', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getTotalMontantEngage(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('SUM(f.montantEngage) as total')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    public function getTotalMontantDecaisse(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('SUM(f.montantDecaisse) as total')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    public function generateNumeroConvention(string $bailleur): string
    {
        $year = date('Y');
        $prefix = strtoupper(substr($bailleur, 0, 3));
        
        $lastFinancement = $this->createQueryBuilder('f')
            ->andWhere('f.numeroConvention LIKE :pattern')
            ->setParameter('pattern', "CONV-{$prefix}-{$year}-%")
            ->orderBy('f.numeroConvention', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if ($lastFinancement) {
            $lastNumber = (int) substr($lastFinancement->getNumeroConvention(), -3);
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '001';
        }

        return "CONV-{$prefix}-{$year}-{$newNumber}";
    }
}
