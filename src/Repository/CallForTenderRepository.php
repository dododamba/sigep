<?php

namespace App\Repository;

use App\Entity\CallForTender;
use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CallForTender>
 */
class CallForTenderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CallForTender::class);
    }

    public function save(CallForTender $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CallForTender $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Finds calls for tenders associated with a specific project.
     */
    public function findByProject(Project $project): array
    {
        return $this->createQueryBuilder('cft')
            ->andWhere('cft.project = :project')
            ->setParameter('project', $project)
            ->orderBy('cft.publicationDate', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
