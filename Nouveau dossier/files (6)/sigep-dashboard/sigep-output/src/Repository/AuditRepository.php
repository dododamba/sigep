<?php

namespace App\Repository;

use App\Entity\Audit;
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
     * Audits à venir (30 prochains jours)
     */
    public function findUpcoming(int $days = 30): array
    {
        $deadline = (new \DateTime())->modify("+{$days} days");
        
        return $this->createQueryBuilder('a')
            ->where('a.dateAudit >= :today')
            ->andWhere('a.dateAudit <= :deadline')
            ->andWhere('a.statut = :statut')
            ->setParameter('today', new \DateTime())
            ->setParameter('deadline', $deadline)
            ->setParameter('statut', 'planifie')
            ->orderBy('a.dateAudit', 'ASC')
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
        ?int $projetId = null
    ): array {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.projet', 'p')
            ->addSelect('p');

        if ($query) {
            $qb->andWhere('a.reference LIKE :query OR a.titre LIKE :query OR a.auditeur LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        if ($type) {
            $qb->andWhere('a.type = :type')
               ->setParameter('type', $type);
        }

        if ($statut) {
            $qb->andWhere('a.statut = :statut')
               ->setParameter('statut', $statut);
        }

        if ($projetId) {
            $qb->andWhere('a.projet = :projet')
               ->setParameter('projet', $projetId);
        }

        return $qb->orderBy('a.dateAudit', 'DESC')
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
