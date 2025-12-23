<?php

namespace App\Repository;

use App\Entity\Institution;
use App\Entity\TypeInstitution;
use App\Entity\SectorInstitution;
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

    public function save(Institution $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Institution $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Trouve toutes les institutions actives
     * @return Institution[]
     */
    public function findAllActive(): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.status = :status')
            ->setParameter('status', 'Actif')
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les institutions par type
     * @return Institution[]
     */
    public function findByType(TypeInstitution $type): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.typeInstitution = :type')
            ->setParameter('type', $type)
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve les institutions par secteur
     * @return Institution[]
     */
    public function findBySector(SectorInstitution $sector): array
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.sector = :sector')
            ->setParameter('sector', $sector)
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche d'institutions
     * @return Institution[]
     */
    public function search(string $query): array
    {
        return $this->createQueryBuilder('i')
            ->leftJoin('i.typeInstitution', 't')
            ->leftJoin('i.sector', 's')
            ->where('i.name LIKE :query')
            ->orWhere('i.acronym LIKE :query')
            ->orWhere('i.description LIKE :query')
            ->orWhere('t.name LIKE :query')
            ->orWhere('s.name LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte les institutions par statut
     * @return array<string, int>
     */
    public function countByStatus(): array
    {
        $results = $this->createQueryBuilder('i')
            ->select('i.status, COUNT(i.id) as count')
            ->groupBy('i.status')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['status']] = $result['count'];
        }

        return $counts;
    }

    /**
     * Compte les institutions par type
     * @return array<string, int>
     */
    public function countByType(): array
    {
        $results = $this->createQueryBuilder('i')
            ->leftJoin('i.typeInstitution', 't')
            ->select('t.name as typeName, COUNT(i.id) as count')
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
     * Compte les institutions par secteur
     * @return array<string, int>
     */
    public function countBySector(): array
    {
        $results = $this->createQueryBuilder('i')
            ->leftJoin('i.sector', 's')
            ->select('s.name as sectorName, COUNT(i.id) as count')
            ->groupBy('s.id')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['sectorName'] ?? 'Non défini'] = $result['count'];
        }

        return $counts;
    }

    /**
     * Trouve les institutions récemment ajoutées
     * @return Institution[]
     */
    public function findRecent(int $limit = 5): array
    {
        return $this->createQueryBuilder('i')
            ->orderBy('i.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Trouve une institution par son slug
     */
    public function findBySlug(string $slug): ?Institution
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Liste paginée des institutions avec filtres
     * @return Institution[]
     */
    public function findPaginated(
        int $page = 1, 
        int $limit = 10, 
        ?string $search = null, 
        ?string $status = null, 
        ?int $typeId = null,
        ?int $sectorId = null
    ): array {
        $qb = $this->createQueryBuilder('i')
            ->leftJoin('i.typeInstitution', 't')
            ->leftJoin('i.sector', 's')
            ->addSelect('t', 's');

        if ($search) {
            $qb->andWhere('i.name LIKE :search OR i.acronym LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('i.status = :status')
               ->setParameter('status', $status);
        }

        if ($typeId) {
            $qb->andWhere('t.id = :typeId')
               ->setParameter('typeId', $typeId);
        }

        if ($sectorId) {
            $qb->andWhere('s.id = :sectorId')
               ->setParameter('sectorId', $sectorId);
        }

        return $qb->orderBy('i.name', 'ASC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Compte total des institutions avec filtres
     */
    public function countFiltered(
        ?string $search = null, 
        ?string $status = null, 
        ?int $typeId = null,
        ?int $sectorId = null
    ): int {
        $qb = $this->createQueryBuilder('i')
            ->select('COUNT(i.id)');

        if ($search) {
            $qb->andWhere('i.name LIKE :search OR i.acronym LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('i.status = :status')
               ->setParameter('status', $status);
        }

        if ($typeId) {
            $qb->leftJoin('i.typeInstitution', 't')
               ->andWhere('t.id = :typeId')
               ->setParameter('typeId', $typeId);
        }

        if ($sectorId) {
            $qb->leftJoin('i.sector', 's')
               ->andWhere('s.id = :sectorId')
               ->setParameter('sectorId', $sectorId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Trouve les ministères uniquement
     * @return Institution[]
     */
    public function findMinistries(): array
    {
        return $this->createQueryBuilder('i')
            ->leftJoin('i.typeInstitution', 't')
            ->where('t.code = :code')
            ->setParameter('code', 'MINISTERE')
            ->orderBy('i.name', 'ASC')
            ->getQuery()
            ->getResult();
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
}
