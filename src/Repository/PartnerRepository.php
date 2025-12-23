<?php

namespace App\Repository;

use App\Entity\Partner;
use App\Entity\TypePartner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Partner>
 */
class PartnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partner::class);
    }

    /**
     * Sauvegarde un partenaire
     */
    public function save(Partner $partner, bool $flush = false): void
    {
        $this->getEntityManager()->persist($partner);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Supprime un partenaire
     */
    public function remove(Partner $partner, bool $flush = false): void
    {
        $this->getEntityManager()->remove($partner);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve tous les partenaires actifs
     * @return Partner[]
     */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = :status')
            ->setParameter('status', 'Actif')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les partenaires par type
     * @return Partner[]
     */
    public function findByType(TypePartner $type): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.typePartner = :type')
            ->setParameter('type', $type)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche de partenaires
     * @return Partner[]
     */
    public function search(string $query): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.typePartner', 't')
            ->where('p.name LIKE :query')
            ->orWhere('p.acronym LIKE :query')
            ->orWhere('p.description LIKE :query')
            ->orWhere('t.name LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les partenaires par statut
     * @return array<string, int>
     */
    public function countByStatus(): array
    {
        $results = $this->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['status']] = $result['count'];
        }

        return $counts;
    }

    /**
     * Compte les partenaires par type
     * @return array<string, int>
     */
    public function countByType(): array
    {
        $results = $this->createQueryBuilder('p')
            ->leftJoin('p.typePartner', 't')
            ->select('t.name as typeName, COUNT(p.id) as count')
            ->groupBy('t.id')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['typeName'] ?? 'Non défini'] = $result['count'];
        }

        return $counts;
    }

    /**
     * Trouve les partenaires récemment ajoutés
     * @return Partner[]
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve un partenaire par son slug
     */
    public function findBySlug(string $slug): ?Partner
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Liste paginée des partenaires avec filtres
     * @return Partner[]
     */
    public function findPaginated(int $page = 1, int $limit = 10, ?string $search = null, ?string $status = null, ?int $typeId = null): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.typePartner', 't')
            ->addSelect('t');

        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.acronym LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $status);
        }

        if ($typeId) {
            $qb->andWhere('t.id = :typeId')
               ->setParameter('typeId', $typeId);
        }

        return $qb->orderBy('p.name', 'ASC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte total des partenaires avec filtres
     */
    public function countFiltered(?string $search = null, ?string $status = null, ?int $typeId = null): int
    {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id)');

        if ($search) {
            $qb->andWhere('p.name LIKE :search OR p.acronym LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('p.status = :status')
               ->setParameter('status', $status);
        }

        if ($typeId) {
            $qb->leftJoin('p.typePartner', 't')
               ->andWhere('t.id = :typeId')
               ->setParameter('typeId', $typeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }


      /**
     * Trouve les partenaires actifs
     */
    public function findActifs(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', 'Actif')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }


    /**
     * Statistiques par type de partenaire
     */
    public function getStatsByType(): array
    {
        return $this->createQueryBuilder('p')
            ->select('IDENTITY(p.typePartner) as typeId, COUNT(p.id) as count')
            ->groupBy('p.typePartner')
            ->getQuery()
            ->getResult();
    }

    /**
     * Top partenaires par nombre de projets
     */
    public function findTopByProjects(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.name, p.acronym, COUNT(proj.id) as projectCount')
            ->leftJoin('p.projects', 'proj')
            ->groupBy('p.id')
            ->orderBy('projectCount', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

  
    /**
     * Partenaires avec projets actifs
     */
    public function findWithActiveProjects(): array
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.projects', 'proj')
            ->where('proj.status = :status')
            ->setParameter('status', 'en-cours')
            ->groupBy('p.id')
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
