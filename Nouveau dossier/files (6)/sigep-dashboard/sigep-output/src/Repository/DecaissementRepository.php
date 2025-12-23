<?php

namespace App\Repository;

use App\Entity\Decaissement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Decaissement>
 */
class DecaissementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Decaissement::class);
    }

    /**
     * Trouve les décaissements en attente
     */
    public function findEnAttente(): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'en_attente')
            ->orderBy('d.dateDemande', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les décaissements exécutés
     */
    public function findExecutes(): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'execute')
            ->orderBy('d.dateExecution', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les décaissements par projet
     */
    public function findByProject(int $projectId): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.projet = :projet')
            ->setParameter('projet', $projectId)
            ->orderBy('d.dateDemande', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les décaissements par financement
     */
    public function findByFinancement(int $financementId): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.financement = :financement')
            ->setParameter('financement', $financementId)
            ->orderBy('d.dateDemande', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Montant total des décaissements exécutés
     */
    public function getTotalExecute(): float
    {
        $result = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'execute')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Montant total en attente
     */
    public function getTotalEnAttente(): float
    {
        $result = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'en_attente')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Statistiques par statut
     */
    public function getStatsByStatut(): array
    {
        return $this->createQueryBuilder('d')
            ->select('d.statut, COUNT(d.id) as count, SUM(d.montant) as total')
            ->groupBy('d.statut')
            ->getQuery()
            ->getResult();
    }

    /**
     * Décaissements exécutés dans une période
     */
    public function findExecutesBetween(\DateTimeInterface $start, \DateTimeInterface $end): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.dateExecution BETWEEN :start AND :end')
            ->andWhere('d.statut = :statut')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->setParameter('statut', 'execute')
            ->orderBy('d.dateExecution', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Somme des décaissements exécutés dans une période
     */
    public function sumExecutesBetween(\DateTimeInterface $start, \DateTimeInterface $end): float
    {
        $result = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.dateExecution BETWEEN :start AND :end')
            ->andWhere('d.statut = :statut')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->setParameter('statut', 'execute')
            ->getQuery()
            ->getSingleScalarResult();
        
        return (float) ($result ?? 0);
    }

    /**
     * Recherche avancée
     */
    public function search(
        ?string $query = null,
        ?string $statut = null,
        ?int $projetId = null,
        ?int $financementId = null
    ): array {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.projet', 'p')
            ->leftJoin('d.financement', 'f')
            ->addSelect('p', 'f');

        if ($query) {
            $qb->andWhere('d.reference LIKE :query OR d.beneficiaire LIKE :query OR p.name LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        if ($statut) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($projetId) {
            $qb->andWhere('d.projet = :projet')
               ->setParameter('projet', $projetId);
        }

        if ($financementId) {
            $qb->andWhere('d.financement = :financement')
               ->setParameter('financement', $financementId);
        }

        return $qb->orderBy('d.dateDemande', 'DESC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Décaissements récents avec relations
     */
    public function findRecentWithRelations(int $limit = 10): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.projet', 'p')
            ->leftJoin('d.financement', 'f')
            ->addSelect('p', 'f')
            ->orderBy('d.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
