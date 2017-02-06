<?php

namespace ApiGameBundle\Repository;

use ApiGameBundle\Entity\Project;

/**
 * ProjectRepository
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function getActiveProjects()
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter(':status', Project::PROJECT_ACTIVE)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $projectId
     *
     * @return array
     */
    public function getActiveProjectById($projectId)
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->andWhere('p.id = :id')
            ->setParameters(
                [
                    'id'     => $projectId,
                    'status' => Project::PROJECT_ACTIVE,
                ]
            )
            ->getQuery()
            ->getResult();
    }
}
