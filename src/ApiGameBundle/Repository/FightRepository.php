<?php

namespace ApiGameBundle\Repository;

/**
 * FightRepository
 */
class FightRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $developerId
     * @param $projectId
     *
     * @return mixed
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function isDeveloperCanFightWithProject($developerId, $projectId)
    {
        return $this->createQueryBuilder('f')
            ->select('COUNT(f.id)')
            ->where('f.developer = :developerId')
            ->andWhere('f.project = :projectId')
            ->setParameters(
                [
                    ':developerId' => $developerId,
                    ':projectId'   => $projectId,
                ]
            )
            ->getQuery()
            ->getSingleScalarResult();
    }
}
