<?php

namespace ApiGameBundle\Utils;

use ApiGameBundle\Entity\Developer;
use ApiGameBundle\Entity\Fight;
use ApiGameBundle\Entity\Project;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class FightService
 */
class FightService implements FightInterface
{

    const FIGHT_TRIES_LIMIT = 3;

    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $fightRepository;

    /**
     * FightService constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        $this->fightRepository = $this->em->getRepository(Fight::class);
    }

    /**
     * @param Fight $fight
     *
     * @return array
     */
    public function fight(Fight $fight)
    {
        $tries = $this->fightRepository->isDeveloperCanFightWithProject(
            $fight->getDeveloper()->getId(),
            $fight->getProject()->getId()
        );

        if ($tries >= self::FIGHT_TRIES_LIMIT) {
            return 'Too many tries for one project :(';
        } elseif ($this->isDeveloperCanFinishProject($fight->getDeveloper(), $fight->getProject())) {

            $fight->getProject()->setStatus(Project::PROJECT_FINISHED);
            $this->em->persist($fight);
            $this->em->flush();

            return 'You battled heroically, asked great questions, worked pragmatically and finished on time. You\'re a hero!';
        } else {
            return 'You don\'t have the skills to even start this project. Read the documentation (i.e. power up) and try again!';
        }
    }

    /**
     * @param Developer $developer
     * @param Project   $project
     *
     * @return bool
     */
    private function isDeveloperCanFinishProject(Developer $developer, Project $project)
    {
        return $developer->getLevel() > ($project->getExperiencePoints() * $project->getLevel());
    }
}