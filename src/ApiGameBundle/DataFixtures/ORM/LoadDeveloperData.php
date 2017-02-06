<?php

namespace ApiGameBundle\DataFixtures\ORM;

use ApiGameBundle\Entity\Developer;
use ApiGameBundle\Entity\DeveloperSkills;
use ApiGameBundle\Entity\Project;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class LoadDeveloperData
 */
class LoadDeveloperData implements FixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $developer = new Developer();
        $developer->setNickname('test_developer');
        $developer->setTagLine('test description for developer');
        $developer->setLevel(100);
        
        $skillsData = [
            'php'     => 20,
            'mysql'   => 20,
            'symfony' => 20,
            'phpunit' => 20,
            'redis'   => 10,
            'phpunit' => 10,
        ];

        foreach ($skillsData as $name => $ratio) {
            $skills = new DeveloperSkills();
            $skills->setName($name);
            $skills->setRatio($ratio);
            $developer->addSkills($skills);
        }

        $project = new Project();
        $project->setName('cool_test_project');
        $project->setDays(40);
        $project->setPrice(3500);
        $project->setExperiencePoints(30);
        $project->setLevel(1);

        $manager->persist($project);
        $manager->persist($developer);
        $manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}