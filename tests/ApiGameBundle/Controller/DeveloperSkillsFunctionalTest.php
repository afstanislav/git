<?php

namespace ApiGameBundle\Tests\Controller;

use ApiGameBundle\Entity\DeveloperSkills;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DeveloperSkillsFunctionalTest
 */
class DeveloperSkillsFunctionalTest extends WebTestCase
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Client
     */
    private $client;

    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;

    /**
     * @var \Symfony\Component\Routing\Route
     */
    private $routerService;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * Setup data
     */
    public function setUp()
    {
        parent::setUp();
        $this->client = static::createClient();
        $this->container = static::$kernel->getContainer();
        $this->routerService = $this->container->get('router');
        $this->em = $this->container->get('doctrine.orm.entity_manager');
    }

    /**
     * Test developer skills
     */
    public function testGetDeveloperSkillsList()
    {
        $this->client->request('GET', $this->routerService->generate('api_game_developer_skills'));
        $this->assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertEquals(json_encode($this->buildSkillsJson()), $this->client->getResponse()->getContent());
    }

    /**
     * @return array
     */
    private function buildSkillsJson()
    {
        $result = [];

        $skills = $this->em->getRepository(DeveloperSkills::class)->findAll();

        foreach ($skills as $skill) {
            $item['id'] = $skill->getId();
            $item['name'] = $skill->getName();
            $item['ratio'] = $skill->getRatio();

            $result[] = $item;
        }

        return $result;
    }
}