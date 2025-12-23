<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Institution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;

/**
 * @extends ServiceEntityRepository<User>
 * @implements PasswordUpgraderInterface<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * Trouve tous les utilisateurs d'une institution spécifique
     *
     * @return User[]
     */
    public function findByInstitution(Institution $institution, ?array $orderBy = ['createdAt' => 'DESC']): array
    {
        return $this->findBy(['institution' => $institution], $orderBy);
    }

    /**
     * Trouve les utilisateurs vérifiés d'une institution
     *
     * @return User[]
     */
    public function findVerifiedByInstitution(Institution $institution): array
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.institution = :institution')
            ->andWhere('u.isVerified = :verified')
            ->setParameter('institution', $institution)
            ->setParameter('verified', true)
            ->orderBy('u.lastname', 'ASC')
            ->addOrderBy('u.firstname', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les utilisateurs par rôle
     *
     * @return User[]
     */
    public function findByRole(string $role, ?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.roles LIKE :role')
            ->setParameter('role', '%"'.$role.'"%')
            ->orderBy('u.lastname', 'ASC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les administrateurs d'une institution
     *
     * @return User[]
     */
    public function findAdminsByInstitution(Institution $institution): array
    {
        return $this->findByRole('ROLE_ADMIN', $institution);
    }

    /**
     * Trouve les utilisateurs par niveau d'accès
     *
     * @return User[]
     */
    public function findByAccessLevel(string $accessLevel, ?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.accessLevel = :accessLevel')
            ->setParameter('accessLevel', $accessLevel)
            ->orderBy('u.lastname', 'ASC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Recherche des utilisateurs par nom, prénom ou email
     *
     * @return User[]
     */
    public function searchUsers(string $searchTerm, ?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.firstname LIKE :search')
            ->orWhere('u.lastname LIKE :search')
            ->orWhere('u.email LIKE :search')
            ->orWhere('u.matricule LIKE :search')
            ->setParameter('search', '%'.$searchTerm.'%')
            ->orderBy('u.lastname', 'ASC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte le nombre d'utilisateurs par institution
     */
    public function countByInstitution(Institution $institution): int
    {
        return $this->count(['institution' => $institution]);
    }

    /**
     * Compte le nombre d'utilisateurs vérifiés par institution
     */
    public function countVerifiedByInstitution(Institution $institution): int
    {
        return $this->count([
            'institution' => $institution,
            'isVerified' => true
        ]);
    }

    /**
     * Obtient les statistiques des utilisateurs par institution
     */
    public function getStatsByInstitution(Institution $institution): array
    {
        $qb = $this->createQueryBuilder('u')
            ->select('
                COUNT(u.id) as total,
                SUM(CASE WHEN u.isVerified = true THEN 1 ELSE 0 END) as verified,
                SUM(CASE WHEN u.isVerified = false THEN 1 ELSE 0 END) as unverified
            ')
            ->where('u.institution = :institution')
            ->setParameter('institution', $institution);

        $result = $qb->getQuery()->getSingleResult();

        // Statistiques par rôle
        $roles = $this->createQueryBuilder('u')
            ->select('u.roles')
            ->where('u.institution = :institution')
            ->setParameter('institution', $institution)
            ->getQuery()
            ->getResult();

        $admins = 0;
        $managers = 0;
        $users = 0;

        foreach ($roles as $userRoles) {
            $roleArray = $userRoles['roles'];
            if (in_array('ROLE_ADMIN', $roleArray) || in_array('ROLE_SUPER_ADMIN', $roleArray)) {
                $admins++;
            } elseif (in_array('ROLE_MANAGER', $roleArray)) {
                $managers++;
            } else {
                $users++;
            }
        }

        return [
            'total' => (int) $result['total'],
            'verified' => (int) $result['verified'],
            'unverified' => (int) $result['unverified'],
            'admins' => $admins,
            'managers' => $managers,
            'users' => $users,
        ];
    }

    /**
     * Obtient les statistiques globales
     */
    public function getGlobalStats(): array
    {
        $qb = $this->createQueryBuilder('u')
            ->select('
                COUNT(u.id) as total,
                SUM(CASE WHEN u.isVerified = true THEN 1 ELSE 0 END) as verified,
                SUM(CASE WHEN u.isVerified = false THEN 1 ELSE 0 END) as unverified
            ');

        return $qb->getQuery()->getSingleResult();
    }

    /**
     * Trouve les utilisateurs récemment créés
     *
     * @return User[]
     */
    public function findRecentUsers(int $limit = 10, ?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.createdAt', 'DESC')
            ->setMaxResults($limit);

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve les utilisateurs par département
     *
     * @return User[]
     */
    public function findByDepartment(string $department, ?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->andWhere('u.department = :department')
            ->setParameter('department', $department)
            ->orderBy('u.lastname', 'ASC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Trouve un utilisateur par son matricule
     */
    public function findOneByMatricule(string $matricule): ?User
    {
        return $this->findOneBy(['matricule' => $matricule]);
    }

    /**
     * Vérifie si un email existe déjà
     */
    public function emailExists(string $email, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.email = :email')
            ->setParameter('email', $email);

        if ($excludeId) {
            $qb->andWhere('u.id != :id')
               ->setParameter('id', $excludeId);
        }

        return $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Vérifie si un matricule existe déjà
     */
    public function matriculeExists(string $matricule, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.matricule = :matricule')
            ->setParameter('matricule', $matricule);

        if ($excludeId) {
            $qb->andWhere('u.id != :id')
               ->setParameter('id', $excludeId);
        }

        return $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Obtient la liste des départements uniques pour une institution
     *
     * @return string[]
     */
    public function getUniqueDepartments(?Institution $institution = null): array
    {
        $qb = $this->createQueryBuilder('u')
            ->select('DISTINCT u.department')
            ->where('u.department IS NOT NULL')
            ->orderBy('u.department', 'ASC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        $result = $qb->getQuery()->getResult();

        return array_column($result, 'department');
    }

    /**
     * Obtient les utilisateurs avec pagination
     *
     * @return array{users: User[], total: int, pages: int}
     */
    public function findPaginated(
        int $page = 1,
        int $perPage = 20,
        ?Institution $institution = null,
        ?array $filters = []
    ): array {
        $qb = $this->createQueryBuilder('u')
            ->orderBy('u.createdAt', 'DESC');

        if ($institution) {
            $qb->andWhere('u.institution = :institution')
               ->setParameter('institution', $institution);
        }

        // Appliquer les filtres
        if (isset($filters['search']) && $filters['search']) {
            $qb->andWhere('u.firstname LIKE :search OR u.lastname LIKE :search OR u.email LIKE :search')
               ->setParameter('search', '%'.$filters['search'].'%');
        }

        if (isset($filters['isVerified']) && $filters['isVerified'] !== null) {
            $qb->andWhere('u.isVerified = :verified')
               ->setParameter('verified', $filters['isVerified']);
        }

        if (isset($filters['role']) && $filters['role']) {
            $qb->andWhere('u.roles LIKE :role')
               ->setParameter('role', '%"'.$filters['role'].'"%');
        }

        if (isset($filters['accessLevel']) && $filters['accessLevel']) {
            $qb->andWhere('u.accessLevel = :accessLevel')
               ->setParameter('accessLevel', $filters['accessLevel']);
        }

        // Compter le total
        $countQb = clone $qb;
        $total = (int) $countQb->select('COUNT(u.id)')->getQuery()->getSingleScalarResult();

        // Appliquer la pagination
        $qb->setFirstResult(($page - 1) * $perPage)
           ->setMaxResults($perPage);

        $users = $qb->getQuery()->getResult();

        return [
            'users' => $users,
            'total' => $total,
            'pages' => (int) ceil($total / $perPage),
            'currentPage' => $page,
            'perPage' => $perPage,
        ];
    }
}
