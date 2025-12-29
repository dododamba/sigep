<?php

namespace App\Repository;

use App\Entity\Role;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Role>
 */
class RoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Role::class);
    }

    public function save(Role $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Role $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve tous les rôles actifs
     */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.isActive = :active')
            ->setParameter('active', true)
            ->orderBy('r.priority', 'DESC')
            ->addOrderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve tous les rôles non système
     */
    public function findAllNonSystem(): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.isSystem = :system')
            ->setParameter('system', false)
            ->orderBy('r.priority', 'DESC')
            ->addOrderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve un rôle par son code
     */
    public function findOneByCode(string $code): ?Role
    {
        return $this->createQueryBuilder('r')
            ->where('r.code = :code')
            ->setParameter('code', $code)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Recherche des rôles par nom ou code
     */
    public function search(string $query): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.name LIKE :query')
            ->orWhere('r.code LIKE :query')
            ->orWhere('r.description LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('r.priority', 'DESC')
            ->addOrderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les rôles avec pagination
     */
    public function findPaginated(
        int $page = 1,
        int $limit = 10,
        ?string $search = null,
        ?bool $isActive = null,
        ?bool $isSystem = null
    ): array {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.users', 'u')
            ->addSelect('u');

        if ($search) {
            $qb->andWhere('r.name LIKE :search OR r.code LIKE :search OR r.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($isActive !== null) {
            $qb->andWhere('r.isActive = :active')
               ->setParameter('active', $isActive);
        }

        if ($isSystem !== null) {
            $qb->andWhere('r.isSystem = :system')
               ->setParameter('system', $isSystem);
        }

        return $qb
            ->orderBy('r.priority', 'DESC')
            ->addOrderBy('r.name', 'ASC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les rôles avec filtres
     */
    public function countFiltered(
        ?string $search = null,
        ?bool $isActive = null,
        ?bool $isSystem = null
    ): int {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)');

        if ($search) {
            $qb->andWhere('r.name LIKE :search OR r.code LIKE :search OR r.description LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($isActive !== null) {
            $qb->andWhere('r.isActive = :active')
               ->setParameter('active', $isActive);
        }

        if ($isSystem !== null) {
            $qb->andWhere('r.isSystem = :system')
               ->setParameter('system', $isSystem);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Compte les rôles par statut
     */
    public function countByStatus(): array
    {
        $results = $this->createQueryBuilder('r')
            ->select('r.isActive, COUNT(r.id) as count')
            ->groupBy('r.isActive')
            ->getQuery()
            ->getResult();

        $counts = ['actifs' => 0, 'inactifs' => 0];
        foreach ($results as $result) {
            if ($result['isActive']) {
                $counts['actifs'] = (int) $result['count'];
            } else {
                $counts['inactifs'] = (int) $result['count'];
            }
        }

        return $counts;
    }

    /**
     * Compte les rôles système vs personnalisés
     */
    public function countByType(): array
    {
        $results = $this->createQueryBuilder('r')
            ->select('r.isSystem, COUNT(r.id) as count')
            ->groupBy('r.isSystem')
            ->getQuery()
            ->getResult();

        $counts = ['system' => 0, 'custom' => 0];
        foreach ($results as $result) {
            if ($result['isSystem']) {
                $counts['system'] = (int) $result['count'];
            } else {
                $counts['custom'] = (int) $result['count'];
            }
        }

        return $counts;
    }

    /**
     * Trouve les rôles les plus utilisés
     */
    public function findMostUsed(int $limit = 5): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.users', 'u')
            ->addSelect('COUNT(u.id) as usersCount')
            ->groupBy('r.id')
            ->orderBy('usersCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les rôles récents
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Vérifie si un code de rôle existe déjà
     */
    public function codeExists(string $code, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.code = :code')
            ->setParameter('code', $code);

        if ($excludeId) {
            $qb->andWhere('r.id != :id')
               ->setParameter('id', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Statistiques globales des rôles
     */
    public function getStatistics(): array
    {
        $total = $this->count([]);
        $actifs = $this->count(['isActive' => true]);
        $system = $this->count(['isSystem' => true]);
        
        $totalUsers = $this->createQueryBuilder('r')
            ->select('COUNT(u.id)')
            ->leftJoin('r.users', 'u')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total' => $total,
            'actifs' => $actifs,
            'inactifs' => $total - $actifs,
            'system' => $system,
            'custom' => $total - $system,
            'totalUsers' => (int) $totalUsers,
            'avgUsersPerRole' => $total > 0 ? round($totalUsers / $total, 1) : 0,
        ];
    }

    /**
     * Trouve les rôles avec le nombre d'utilisateurs
     */
    public function findAllWithUsersCount(): array
    {
        return $this->createQueryBuilder('r')
            ->leftJoin('r.users', 'u')
            ->addSelect('COUNT(u.id) as usersCount')
            ->groupBy('r.id')
            ->orderBy('r.priority', 'DESC')
            ->addOrderBy('r.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les rôles ayant une permission spécifique
     */
    public function findByPermission(string $entity, string $action): array
    {
        $permission = $entity . '.' . $action;
        
        return $this->createQueryBuilder('r')
            ->where('JSON_CONTAINS(r.permissions, :permission) = 1')
            ->setParameter('permission', json_encode($permission))
            ->orderBy('r.priority', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Clone un rôle (copie avec nouveau nom)
     */
    public function cloneRole(Role $role, string $newName, string $newCode): Role
    {
        $newRole = new Role();
        $newRole->setName($newName);
        $newRole->setCode($newCode);
        $newRole->setDescription($role->getDescription());
        $newRole->setPermissions($role->getPermissions());
        $newRole->setIsSystem(false);
        $newRole->setIsActive(true);
        $newRole->setPriority($role->getPriority());

        $this->save($newRole, true);

        return $newRole;
    }
}
