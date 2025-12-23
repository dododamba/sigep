<?php

namespace App\Repository;

use App\Entity\Decaissement;
use App\Entity\Financement;
use App\Entity\Projet;
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

    public function save(Decaissement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Decaissement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve tous les décaissements avec pagination
     */
    public function findAllWithPagination(int $page = 1, int $limit = 20): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p')
            ->orderBy('d.createdAt', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de décaissements
     */
    public function countAll(): int
    {
        return $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Trouve les décaissements par financement
     */
    public function findByFinancement(Financement $financement, ?string $statut = null): array
    {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.projet', 'p')
            ->addSelect('p')
            ->where('d.financement = :financement')
            ->setParameter('financement', $financement)
            ->orderBy('d.dateDemande', 'DESC');

        if ($statut !== null) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $statut);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les décaissements par projet
     */
    public function findByProjet(Projet $projet, ?string $statut = null): array
    {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->addSelect('f')
            ->where('d.projet = :projet')
            ->setParameter('projet', $projet)
            ->orderBy('d.dateDemande', 'DESC');

        if ($statut !== null) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $statut);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les décaissements par statut
     */
    public function findByStatut(string $statut): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p')
            ->where('d.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('d.dateDemande', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Calcule le montant total décaissé pour un financement
     */
    public function getTotalDecaisseByFinancement(Financement $financement, ?string $statut = null): float
    {
        $qb = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.financement = :financement')
            ->setParameter('financement', $financement);

        if ($statut !== null) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $statut);
        }

        return (float) ($qb->getQuery()->getSingleScalarResult() ?? 0);
    }

    /**
     * Calcule le montant total décaissé pour un projet
     */
    public function getTotalDecaisseByProjet(Projet $projet, ?string $statut = null): float
    {
        $qb = $this->createQueryBuilder('d')
            ->select('SUM(d.montant)')
            ->where('d.projet = :projet')
            ->setParameter('projet', $projet);

        if ($statut !== null) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $statut);
        }

        return (float) ($qb->getQuery()->getSingleScalarResult() ?? 0);
    }

    /**
     * Trouve les décaissements en attente de validation
     */
    public function findPendingValidation(): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p')
            ->where('d.statut = :statut')
            ->setParameter('statut', 'en_attente')
            ->orderBy('d.dateDemande', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les décaissements récents
     */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p')
            ->orderBy('d.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche de décaissements par critères multiples
     */
    public function search(array $criteria): array
    {
        $qb = $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p');

        if (!empty($criteria['reference'])) {
            $qb->andWhere('d.reference LIKE :reference')
               ->setParameter('reference', '%' . $criteria['reference'] . '%');
        }

        if (!empty($criteria['beneficiaire'])) {
            $qb->andWhere('d.beneficiaire LIKE :beneficiaire')
               ->setParameter('beneficiaire', '%' . $criteria['beneficiaire'] . '%');
        }

        if (!empty($criteria['statut'])) {
            $qb->andWhere('d.statut = :statut')
               ->setParameter('statut', $criteria['statut']);
        }

        if (!empty($criteria['projet_id'])) {
            $qb->andWhere('d.projet = :projet')
               ->setParameter('projet', $criteria['projet_id']);
        }

        if (!empty($criteria['financement_id'])) {
            $qb->andWhere('d.financement = :financement')
               ->setParameter('financement', $criteria['financement_id']);
        }

        if (!empty($criteria['date_debut'])) {
            $qb->andWhere('d.dateDemande >= :date_debut')
               ->setParameter('date_debut', $criteria['date_debut']);
        }

        if (!empty($criteria['date_fin'])) {
            $qb->andWhere('d.dateDemande <= :date_fin')
               ->setParameter('date_fin', $criteria['date_fin']);
        }

        if (!empty($criteria['montant_min'])) {
            $qb->andWhere('d.montant >= :montant_min')
               ->setParameter('montant_min', $criteria['montant_min']);
        }

        if (!empty($criteria['montant_max'])) {
            $qb->andWhere('d.montant <= :montant_max')
               ->setParameter('montant_max', $criteria['montant_max']);
        }

        $qb->orderBy('d.dateDemande', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Statistiques des décaissements par statut
     */
    public function getStatistiquesByStatut(): array
    {
        $results = $this->createQueryBuilder('d')
            ->select('d.statut, COUNT(d.id) as nombre, SUM(d.montant) as total')
            ->groupBy('d.statut')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['statut']] = [
                'nombre' => (int) $result['nombre'],
                'total' => (float) $result['total']
            ];
        }

        return $stats;
    }

    /**
     * Statistiques des décaissements par mois
     */
    public function getStatistiquesByMonth(int $year): array
    {
        $results = $this->createQueryBuilder('d')
            ->select('MONTH(d.dateDemande) as mois, COUNT(d.id) as nombre, SUM(d.montant) as total')
            ->where('YEAR(d.dateDemande) = :year')
            ->setParameter('year', $year)
            ->groupBy('mois')
            ->orderBy('mois', 'ASC')
            ->getQuery()
            ->getResult();

        $stats = [];
        for ($i = 1; $i <= 12; $i++) {
            $stats[$i] = ['nombre' => 0, 'total' => 0];
        }

        foreach ($results as $result) {
            $mois = (int) $result['mois'];
            $stats[$mois] = [
                'nombre' => (int) $result['nombre'],
                'total' => (float) $result['total']
            ];
        }

        return $stats;
    }

    /**
     * Top bénéficiaires par montant décaissé
     */
    public function getTopBeneficiaires(int $limit = 10): array
    {
        return $this->createQueryBuilder('d')
            ->select('d.beneficiaire, COUNT(d.id) as nombre, SUM(d.montant) as total')
            ->where('d.statut IN (:statuts)')
            ->setParameter('statuts', ['valide', 'execute'])
            ->groupBy('d.beneficiaire')
            ->orderBy('total', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Décaissements exécutés sur une période
     */
    public function findExecutedInPeriod(\DateTimeInterface $dateDebut, \DateTimeInterface $dateFin): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.financement', 'f')
            ->leftJoin('d.projet', 'p')
            ->addSelect('f', 'p')
            ->where('d.statut = :statut')
            ->andWhere('d.dateExecution BETWEEN :debut AND :fin')
            ->setParameter('statut', 'execute')
            ->setParameter('debut', $dateDebut)
            ->setParameter('fin', $dateFin)
            ->orderBy('d.dateExecution', 'DESC')
            ->getQuery()
            ->getResult();
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
