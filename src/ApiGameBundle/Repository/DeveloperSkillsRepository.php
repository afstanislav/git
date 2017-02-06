<?php

namespace ApiGameBundle\Repository;

/**
 * DeveloperSkillsRepository
 */
class DeveloperSkillsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return array
     */
    public function getDeveloperSkills()
    {
        return $this->createQueryBuilder('ds')
            ->orderBy('ds.ratio', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
