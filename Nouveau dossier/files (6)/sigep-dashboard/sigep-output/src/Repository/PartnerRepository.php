<?php

namespace App\Repository;

use App\Entity\Partner;
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
     * Trouve les partenaires par type
     */
    public function findByType(int $typeId): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.typePartner = :type')
            ->setParameter('type', $typeId)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche par nom ou acronyme
     */
    public function search(?string $query = null): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.typePartner', 't')
            ->addSelect('t');

        if ($query) {
            $qb->andWhere('p.name LIKE :query OR p.acronym LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        return $qb->orderBy('p.name', 'ASC')
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
     * Trouve partenaire par slug
     */
    public function findBySlug(string $slug): ?Partner
    {
        return $this->createQueryBuilder('p')
            ->where('p.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
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
