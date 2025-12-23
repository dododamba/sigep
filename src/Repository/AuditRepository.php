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
     * Trouve tous les audits avec pagination
     */
    public function findAllWithPagination(int $page = 1, int $limit = 20): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->orderBy('a.dateAudit', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total d'audits
     */
    public function countAll(): int
    {
        return $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Trouve les audits par projet
     */
    public function findByProjet(Project $projet): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.projet = :projet')
            ->setParameter('projet', $projet)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits par type
     */
    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('a.type = :type')
            ->setParameter('type', $type)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits par statut
     */
    public function findByStatut(string $statut): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('a.statut = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits par niveau de résultat
     */
    public function findByNiveau(string $niveau): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('a.niveau = :niveau')
            ->setParameter('niveau', $niveau)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits récents
     */
    public function findRecent(int $limit = 10): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits planifiés à venir
     */
    public function findUpcoming(int $daysAhead = 30): array
    {
        $dateLimit = new \DateTime('+' . $daysAhead . ' days');

        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('a.statut = :statut')
            ->andWhere('a.dateAudit <= :dateLimit')
            ->andWhere('a.dateAudit >= :now')
            ->setParameter('statut', 'planifie')
            ->setParameter('dateLimit', $dateLimit)
            ->setParameter('now', new \DateTime())
            ->orderBy('a.dateAudit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques des audits par type
     */
    public function getStatistiquesByType(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.type, COUNT(a.id) as nombre')
            ->groupBy('a.type')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['type']] = (int) $result['nombre'];
        }

        return $stats;
    }

    /**
     * Statistiques des audits par statut
     */
    public function getStatistiquesByStatut(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.statut, COUNT(a.id) as nombre')
            ->groupBy('a.statut')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['statut']] = (int) $result['nombre'];
        }

        return $stats;
    }

    /**
     * Statistiques des audits par niveau
     */
    public function getStatistiquesByNiveau(): array
    {
        $results = $this->createQueryBuilder('a')
            ->select('a.niveau, COUNT(a.id) as nombre')
            ->where('a.niveau IS NOT NULL')
            ->groupBy('a.niveau')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[$result['niveau']] = (int) $result['nombre'];
        }

        return $stats;
    }

    /**
     * Score moyen des audits par projet
     */
    public function getScoreMoyenByProjet(Project $projet): ?float
    {
        $result = $this->createQueryBuilder('a')
            ->select('AVG(a.score) as moyenne')
            ->where('a.projet = :projet')
            ->andWhere('a.score IS NOT NULL')
            ->setParameter('projet', $projet)
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? round((float) $result, 2) : null;
    }

    /**
     * Recherche multicritères
     */
    public function search(array $criteria): array
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p');

        if (!empty($criteria['reference'])) {
            $qb->andWhere('a.reference LIKE :reference')
               ->setParameter('reference', '%' . $criteria['reference'] . '%');
        }

        if (!empty($criteria['titre'])) {
            $qb->andWhere('a.titre LIKE :titre')
               ->setParameter('titre', '%' . $criteria['titre'] . '%');
        }

        if (!empty($criteria['type'])) {
            $qb->andWhere('a.type = :type')
               ->setParameter('type', $criteria['type']);
        }

        if (!empty($criteria['statut'])) {
            $qb->andWhere('a.statut = :statut')
               ->setParameter('statut', $criteria['statut']);
        }

        if (!empty($criteria['niveau'])) {
            $qb->andWhere('a.niveau = :niveau')
               ->setParameter('niveau', $criteria['niveau']);
        }

        if (!empty($criteria['projet_id'])) {
            $qb->andWhere('a.projet = :projet')
               ->setParameter('projet', $criteria['projet_id']);
        }

        if (!empty($criteria['auditeur'])) {
            $qb->andWhere('a.auditeur LIKE :auditeur')
               ->setParameter('auditeur', '%' . $criteria['auditeur'] . '%');
        }

        if (!empty($criteria['date_debut'])) {
            $qb->andWhere('a.dateAudit >= :date_debut')
               ->setParameter('date_debut', $criteria['date_debut']);
        }

        if (!empty($criteria['date_fin'])) {
            $qb->andWhere('a.dateAudit <= :date_fin')
               ->setParameter('date_fin', $criteria['date_fin']);
        }

        if (!empty($criteria['score_min'])) {
            $qb->andWhere('a.score >= :score_min')
               ->setParameter('score_min', $criteria['score_min']);
        }

        if (!empty($criteria['score_max'])) {
            $qb->andWhere('a.score <= :score_max')
               ->setParameter('score_max', $criteria['score_max']);
        }

        $qb->orderBy('a.dateAudit', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Audits par année
     */
    public function findByYear(int $year): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('YEAR(a.dateAudit) = :year')
            ->setParameter('year', $year)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les audits par projet
     */
    public function countByProjet(Project $projet): int
    {
        return $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.projet = :projet')
            ->setParameter('projet', $projet)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Dernier audit d'un projet
     */
    public function findLastAuditByProjet(Project $projet): ?Audit
    {
        return $this->createQueryBuilder('a')
            ->where('a.projet = :projet')
            ->setParameter('projet', $projet)
            ->orderBy('a.dateAudit', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Audits avec des recommandations
     */
    public function findWithRecommandations(): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p')
            ->where('a.recommandations IS NOT NULL')
            ->andWhere('a.recommandations != :empty')
            ->setParameter('empty', '')
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

        /**
     * Trouve les audits planifiés
     */
    public function findPlanifies(): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.statut = :statut')
            ->setParameter('statut', 'planifie')
            ->orderBy('a.dateAudit', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits en cours
     */
    public function findEnCours(): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.statut = :statut')
            ->setParameter('statut', 'en_cours')
            ->orderBy('a.dateDebut', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits terminés
     */
    public function findTermines(): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.statut = :statut')
            ->setParameter('statut', 'termine')
            ->orderBy('a.dateFin', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les audits par projet
     */
    public function findByProject(int $projectId): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.projet = :projet')
            ->setParameter('projet', $projectId)
            ->orderBy('a.dateAudit', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par type d'audit
     */
    public function getStatsByType(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.type, COUNT(a.id) as count')
            ->groupBy('a.type')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par statut
     */
    public function getStatsByStatut(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.statut, COUNT(a.id) as count')
            ->groupBy('a.statut')
            ->getQuery()
            ->getResult();
    }

 

 

    /**
     * Score moyen des audits terminés
     */
    public function getAverageScore(): ?float
    {
        $result = $this->createQueryBuilder('a')
            ->select('AVG(a.score)')
            ->where('a.statut = :statut')
            ->andWhere('a.score IS NOT NULL')
            ->setParameter('statut', 'termine')
            ->getQuery()
            ->getSingleScalarResult();
        
        return $result ? round((float) $result, 1) : null;
    }
}
