<?php

namespace App\Repository;

use App\Entity\UserActivity;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserActivity>
 */
class UserActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserActivity::class);
    }

    /**
     * Récupère les activités récentes avec pagination
     */
    public function findRecent(int $page = 1, int $limit = 20): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->addSelect('u')
            ->orderBy('a.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les activités d'un utilisateur spécifique
     */
    public function findByUser(User $user, int $limit = 50): array
    {
        return $this->createQueryBuilder('a')
            ->where('a.user = :user')
            ->setParameter('user', $user)
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche d'activités avec filtres
     */
    public function search(array $filters = [], int $page = 1, int $limit = 20): array
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->addSelect('u');

        if (!empty($filters['user_id'])) {
            $qb->andWhere('a.user = :user')
               ->setParameter('user', $filters['user_id']);
        }

        if (!empty($filters['activity_type'])) {
            $qb->andWhere('a.activityType = :activityType')
               ->setParameter('activityType', $filters['activity_type']);
        }

        if (!empty($filters['entity_type'])) {
            $qb->andWhere('a.entityType = :entityType')
               ->setParameter('entityType', $filters['entity_type']);
        }

        if (!empty($filters['level'])) {
            $qb->andWhere('a.level = :level')
               ->setParameter('level', $filters['level']);
        }

        if (!empty($filters['date_from'])) {
            $qb->andWhere('a.createdAt >= :dateFrom')
               ->setParameter('dateFrom', new \DateTimeImmutable($filters['date_from']));
        }

        if (!empty($filters['date_to'])) {
            $qb->andWhere('a.createdAt <= :dateTo')
               ->setParameter('dateTo', (new \DateTimeImmutable($filters['date_to']))->setTime(23, 59, 59));
        }

        if (!empty($filters['search'])) {
            $qb->andWhere('a.description LIKE :search OR a.entityName LIKE :search')
               ->setParameter('search', '%' . $filters['search'] . '%');
        }

        return $qb->orderBy('a.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte le nombre total d'activités selon les filtres
     */
    public function countFiltered(array $filters = []): int
    {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)');

        if (!empty($filters['user_id'])) {
            $qb->andWhere('a.user = :user')
               ->setParameter('user', $filters['user_id']);
        }

        if (!empty($filters['activity_type'])) {
            $qb->andWhere('a.activityType = :activityType')
               ->setParameter('activityType', $filters['activity_type']);
        }

        if (!empty($filters['entity_type'])) {
            $qb->andWhere('a.entityType = :entityType')
               ->setParameter('entityType', $filters['entity_type']);
        }

        if (!empty($filters['level'])) {
            $qb->andWhere('a.level = :level')
               ->setParameter('level', $filters['level']);
        }

        if (!empty($filters['date_from'])) {
            $qb->andWhere('a.createdAt >= :dateFrom')
               ->setParameter('dateFrom', new \DateTimeImmutable($filters['date_from']));
        }

        if (!empty($filters['date_to'])) {
            $qb->andWhere('a.createdAt <= :dateTo')
               ->setParameter('dateTo', (new \DateTimeImmutable($filters['date_to']))->setTime(23, 59, 59));
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Statistiques par type d'activité
     */
    public function getStatsByActivityType(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.activityType', 'COUNT(a.id) as total')
            ->groupBy('a.activityType')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Statistiques par entité
     */
    public function getStatsByEntityType(): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.entityType', 'COUNT(a.id) as total')
            ->where('a.entityType IS NOT NULL')
            ->groupBy('a.entityType')
            ->orderBy('total', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Utilisateurs les plus actifs
     */
    public function getMostActiveUsers(int $limit = 10): array
    {
        return $this->createQueryBuilder('a')
            ->select('u.id', 'u.firstname', 'u.lastname', 'u.email', 'COUNT(a.id) as activityCount')
            ->join('a.user', 'u')
            ->groupBy('u.id', 'u.firstname', 'u.lastname', 'u.email')
            ->orderBy('activityCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Activités par jour sur une période
     */
    public function getActivityByDay(int $days = 30): array
    {
        $startDate = new \DateTimeImmutable("-{$days} days");
        
        return $this->createQueryBuilder('a')
            ->select('DATE(a.createdAt) as date', 'COUNT(a.id) as count')
            ->where('a.createdAt >= :startDate')
            ->setParameter('startDate', $startDate)
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Activités par heure de la journée
     */
    public function getActivityByHour(): array
    {
        return $this->createQueryBuilder('a')
            ->select('HOUR(a.createdAt) as hour', 'COUNT(a.id) as count')
            ->groupBy('hour')
            ->orderBy('hour', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Dernière connexion de chaque utilisateur
     */
    public function getLastLoginByUser(): array
    {
        return $this->createQueryBuilder('a')
            ->select('u.id', 'u.firstname', 'u.lastname', 'MAX(a.createdAt) as lastLogin')
            ->join('a.user', 'u')
            ->where('a.activityType = :login')
            ->setParameter('login', UserActivity::TYPE_LOGIN)
            ->groupBy('u.id', 'u.firstname', 'u.lastname')
            ->orderBy('lastLogin', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Activités critiques récentes
     */
    public function getCriticalActivities(int $limit = 20): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->addSelect('u')
            ->where('a.level = :critical')
            ->setParameter('critical', UserActivity::LEVEL_CRITICAL)
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Activités sur une entité spécifique
     */
    public function findByEntity(string $entityType, int $entityId, int $limit = 50): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->addSelect('u')
            ->where('a.entityType = :entityType')
            ->andWhere('a.entityId = :entityId')
            ->setParameter('entityType', $entityType)
            ->setParameter('entityId', $entityId)
            ->orderBy('a.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Nettoyer les anciennes activités
     */
    public function deleteOlderThan(\DateTimeImmutable $date): int
    {
        return $this->createQueryBuilder('a')
            ->delete()
            ->where('a.createdAt < :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->execute();
    }

    /**
     * Exporter les activités au format CSV
     */
    public function exportToCsv(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a.id', 'a.createdAt', 'a.activityType', 'a.entityType', 
                     'a.entityName', 'a.description', 'a.level', 'a.ipAddress',
                     'u.firstname', 'u.lastname', 'u.email')
            ->join('a.user', 'u');

        // Appliquer les filtres si fournis
        if (!empty($filters['date_from'])) {
            $qb->andWhere('a.createdAt >= :dateFrom')
               ->setParameter('dateFrom', new \DateTimeImmutable($filters['date_from']));
        }

        if (!empty($filters['date_to'])) {
            $qb->andWhere('a.createdAt <= :dateTo')
               ->setParameter('dateTo', (new \DateTimeImmutable($filters['date_to']))->setTime(23, 59, 59));
        }

        return $qb->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * Statistiques globales
     */
    public function getGlobalStats(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = '
            SELECT 
                COUNT(*) as total_activities,
                COUNT(DISTINCT user_id) as unique_users,
                COUNT(CASE WHEN activity_type = :login THEN 1 END) as total_logins,
                COUNT(CASE WHEN level = :critical THEN 1 END) as critical_count,
                COUNT(CASE WHEN DATE(created_at) = CURDATE() THEN 1 END) as today_count
            FROM user_activities
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery([
            'login' => UserActivity::TYPE_LOGIN,
            'critical' => UserActivity::LEVEL_CRITICAL
        ]);

        return $result->fetchAssociative() ?: [];
    }
}
