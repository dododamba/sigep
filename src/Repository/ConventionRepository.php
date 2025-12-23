<?php

namespace App\Repository;

use App\Entity\Convention;
use App\Entity\Financement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Convention>
 */
class ConventionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Convention::class);
    }

    public function save(Convention $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Convention $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve toutes les conventions avec pagination
     */
    public function findAllWithPagination(int $page = 1, int $limit = 20): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->orderBy('c.dateSignature', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total de conventions
     */
    public function countAll(): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Trouve les conventions par financement
     */
    public function findByFinancement(Financement $financement): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.financement = :financement')
            ->setParameter('financement', $financement)
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les conventions par statut
     */
    public function findByStatut(string $statut): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->where('c.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les conventions actives
     */
    public function findActive(): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->where('c.statut = :statut')
            ->setParameter('statut', 'en_cours')
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les conventions par partenaire
     */
    public function findByPartenaire(string $partenaire): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->where('c.partenaire LIKE :partenaire')
            ->setParameter('partenaire', '%' . $partenaire . '%')
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les conventions par type
     */
    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->where('c.type = :type')
            ->setParameter('type', $type)
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Calcule le montant total des conventions par statut
     */
    public function getTotalMontantByStatut(string $statut): float
    {
        $result = $this->createQueryBuilder('c')
            ->select('SUM(c.montantGlobal)')
            ->where('c.statut = :statut')
            ->setParameter('statut', $statut)
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    /**
     * Calcule le montant total de toutes les conventions
     */
    public function getTotalMontant(): float
    {
        $result = $this->createQueryBuilder('c')
            ->select('SUM(c.montantGlobal)')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    /**
     * Statistiques des conventions par statut
     */
    public function getStatistiquesByStatut(): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('c.statut, COUNT(c.id) as nombre, SUM(c.montantGlobal) as total')
            ->groupBy('c.statut')
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
     * Statistiques des conventions par type
     */
    public function getStatistiquesByType(): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('c.type, COUNT(c.id) as nombre, SUM(c.montantGlobal) as total')
            ->groupBy('c.type')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['type']] = [
                'nombre' => (int) $result['nombre'],
                'total' => (float) $result['total']
            ];
        }

        return $stats;
    }

    /**
     * Statistiques des conventions par partenaire
     */
    public function getStatistiquesByPartenaire(): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('c.partenaire, COUNT(c.id) as nombre, SUM(c.montantGlobal) as total')
            ->groupBy('c.partenaire')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['partenaire']] = [
                'nombre' => (int) $result['nombre'],
                'total' => (float) $result['total']
            ];
        }

        return $stats;
    }

    /**
     * Statistiques des conventions par année
     */
    public function getStatistiquesByAnnee(): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('YEAR(c.dateSignature) as annee, COUNT(c.id) as nombre, SUM(c.montantGlobal) as total')
            ->groupBy('annee')
            ->orderBy('annee', 'DESC')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['annee']] = [
                'nombre' => (int) $result['nombre'],
                'total' => (float) $result['total']
            ];
        }

        return $stats;
    }

    /**
     * Trouve les conventions récentes
     */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->orderBy('c.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les conventions arrivant à échéance
     */
    public function findExpiringSoon(int $daysBeforeExpiry = 90): array
    {
        $dateLimit = new \DateTime('+' . $daysBeforeExpiry . ' days');

        return $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f')
            ->where('c.statut = :statut')
            ->andWhere('c.dateLimiteDecaissement IS NOT NULL')
            ->andWhere('c.dateLimiteDecaissement <= :dateLimit')
            ->setParameter('statut', 'en_cours')
            ->setParameter('dateLimit', $dateLimit)
            ->orderBy('c.dateLimiteDecaissement', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche de conventions par critères multiples
     */
    public function search(array $criteria): array
    {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.financement', 'f')
            ->addSelect('f');

        if (!empty($criteria['code'])) {
            $qb->andWhere('c.code LIKE :code')
               ->setParameter('code', '%' . $criteria['code'] . '%');
        }

        if (!empty($criteria['intitule'])) {
            $qb->andWhere('c.intitule LIKE :intitule')
               ->setParameter('intitule', '%' . $criteria['intitule'] . '%');
        }

        if (!empty($criteria['type'])) {
            $qb->andWhere('c.type = :type')
               ->setParameter('type', $criteria['type']);
        }

        if (!empty($criteria['partenaire'])) {
            $qb->andWhere('c.partenaire LIKE :partenaire')
               ->setParameter('partenaire', '%' . $criteria['partenaire'] . '%');
        }

        if (!empty($criteria['statut'])) {
            $qb->andWhere('c.statut = :statut')
               ->setParameter('statut', $criteria['statut']);
        }

        if (!empty($criteria['financement_id'])) {
            $qb->andWhere('c.financement = :financement')
               ->setParameter('financement', $criteria['financement_id']);
        }

        if (!empty($criteria['date_signature_debut'])) {
            $qb->andWhere('c.dateSignature >= :date_debut')
               ->setParameter('date_debut', $criteria['date_signature_debut']);
        }

        if (!empty($criteria['date_signature_fin'])) {
            $qb->andWhere('c.dateSignature <= :date_fin')
               ->setParameter('date_fin', $criteria['date_signature_fin']);
        }

        if (!empty($criteria['montant_min'])) {
            $qb->andWhere('c.montantGlobal >= :montant_min')
               ->setParameter('montant_min', $criteria['montant_min']);
        }

        if (!empty($criteria['montant_max'])) {
            $qb->andWhere('c.montantGlobal <= :montant_max')
               ->setParameter('montant_max', $criteria['montant_max']);
        }

        $qb->orderBy('c.dateSignature', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Calcule la contrepartie totale de l'État
     */
    public function getTotalContrepartieEtat(): float
    {
        $result = $this->createQueryBuilder('c')
            ->select('SUM(c.contrepartieEtat)')
            ->where('c.statut = :statut')
            ->setParameter('statut', 'en_cours')
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0);
    }

    /**
     * Trouve les conventions sans document
     */
    public function findWithoutDocument(): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.documentConvention IS NULL OR c.documentConvention = :empty')
            ->setParameter('empty', '')
            ->orderBy('c.dateSignature', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
