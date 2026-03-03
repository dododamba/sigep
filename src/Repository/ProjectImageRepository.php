<?php

namespace App\Repository;

use App\Entity\ProjectImage;
use App\Entity\Project;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjectImage>
 */
class ProjectImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectImage::class);
    }

    public function save(ProjectImage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProjectImage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Finds images associated with a specific project.
     */
    public function findByProject(Project $project): array
    {
        return $this->createQueryBuilder('pi')
            ->andWhere('pi.project = :project')
            ->setParameter('project', $project)
            ->orderBy('pi.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
