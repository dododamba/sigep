<?php

namespace App\Repository;

use App\Entity\Institution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Institution>
 */
class InstitutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Institution::class);
    }

    /**
     * Trouve les institutions actives
     */
    public function findActives(): array
    {
        return $this->createQueryBuilder('i')
            ->where('i.status = :status')
            ->setParameter('status', 'Actif')
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les institutions par type
     */
    public function findByType(int $typeId): array
    {
        return $this->createQueryBuilder('i')
            ->where('i.typeInstitution = :type')
            ->setParameter('type', $typeId)
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les institutions par secteur
     */
    public function findBySector(int $sectorId): array
    {
        return $this->createQueryBuilder('i')
            ->where('i.sector = :sector')
            ->setParameter('sector', $sectorId)
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche par nom ou acronyme
     */
    public function search(?string $query = null): array
    {
        $qb = $this->createQueryBuilder('i')
            ->leftJoin('i.typeInstitution', 't')
            ->leftJoin('i.sector', 's')
            ->addSelect('t', 's');

        if ($query) {
            $qb->andWhere('i.name LIKE :query OR i.acronym LIKE :query')
               ->setParameter('query', "%{$query}%");
        }

        return $qb->orderBy('i.name', 'ASC')
                  ->getQuery()
                  ->getResult();
    }

    /**
     * Statistiques par type
     */
    public function getStatsByType(): array
    {
        return $this->createQueryBuilder('i')
            ->select('IDENTITY(i.typeInstitution) as typeId, COUNT(i.id) as count')
            ->groupBy('i.typeInstitution')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve institution par slug
     */
    public function findBySlug(string $slug): ?Institution
    {
        return $this->createQueryBuilder('i')
            ->where('i.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
