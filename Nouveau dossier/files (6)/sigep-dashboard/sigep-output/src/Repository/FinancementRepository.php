<?php

namespace App\Repository;

use App\Entity\Financement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Financement>
 */
class FinancementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Financement::class);
    }

    /**
     * Trouve les financements actifs
     */
    public function findActifs(): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.statut = :statut')
            ->setParameter('statut', Financement::STATUT_ACTIF)
            ->orderBy('f.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les financements par bailleur
     */
    public function findByBailleur(int $bailleurId): array
    {
        return $this->createQueryBuilder('f')
            ->where('f.bailleur = :bailleur')
            ->setParameter('bailleur', $bailleurId)
            ->orderBy('f.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Montant total engagé
     */
    public function getTotalEngage(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('SUM(f.montantEngage)')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Montant total décaissé
     */
    public function getTotalDecaisse(): float
    {
        $result = $this->createQueryBuilder('f')
            ->select('SUM(f.montantDecaisse)')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Financements approchant l'échéance
     */
    public function findApproachingDeadline(int $days = 90): array
    {
        $deadline = (new \DateTime())->modify("+{$days} days");
        
        return $this->createQueryBuilder('f')
            ->where('f.dateEcheance <= :deadline')
            ->andWhere('f.dateEcheance >= :today')
            ->andWhere('f.statut = :statut')
            ->setParameter('deadline', $deadline)
            ->setParameter('today', new \DateTime())
            ->setParameter('statut', Financement::STATUT_ACTIF)
            ->orderBy('f.dateEcheance', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par type de financement
     */
    public function getStatsByType(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.type, COUNT(f.id) as count, SUM(f.montantEngage) as totalEngage, SUM(f.montantDecaisse) as totalDecaisse')
            ->groupBy('f.type')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par bailleur
     */
    public function getStatsByBailleur(): array
    {
        return $this->createQueryBuilder('f')
            ->select('IDENTITY(f.bailleur) as bailleurId, COUNT(f.id) as count, SUM(f.montantEngage) as totalEngage')
            ->groupBy('f.bailleur')
            ->orderBy('totalEngage', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche avancée
     */
    public function search(
        ?string $query = null,
        ?string $type = null,
        ?string $statut = null,
        ?int $bailleurId = null
    ): array {
        $qb = $this->createQueryBuilder('f')
            ->leftJoin('f.bailleur', 'b')
            ->addSelect('b');

        if ($query) {
            $qb->andWhere('f.numeroConvention LIKE :query OR b.name LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        if ($type) {
            $qb->andWhere('f.type = :type')
               ->setParameter('type', $type);
        }

        if ($statut) {
            $qb->andWhere('f.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($bailleurId) {
            $qb->andWhere('f.bailleur = :bailleur')
               ->setParameter('bailleur', $bailleurId);
        }

        return $qb->orderBy('f.dateSignature', 'DESC')
                  ->getQuery()
                  ->getResult();
    }
}
