<?php

namespace ApiGameBundle\Tests\Controller;

use ApiGameBundle\Entity\Developer;
use ApiGameBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FightFunctionalTest
 */
class FightFunctionalTest extends WebTestCase
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
     * Test developer vs project
     */
    public function testCreateNewFight()
    {
        $developer = $this->em->getRepository(Developer::class)->findOneBy(['nickname' => 'test_developer']);
        $project = $this->em->getRepository(Project::class)->findOneBy(['name' => 'cool_test_project']);

        $data = [
            'developer'     => $developer->getId(),
            'project'       => $project->getId(),
            'proposedPrice' => '3000',
            'proposedDays'  => '30',
        ];

        $this->client->request('POST', $this->container->get('router')->generate('api_game_developer_fight'), $data);

        $this->assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertContains('finished on time', $this->client->getResponse()->getContent());
    }

    /**
     * Test new project with validation error.
     */
    public function testCreateNewFightNotFoundError()
    {
        $this->client->request('POST', $this->container->get('router')->generate('api_game_developer_fight'), []);
        $this->assertEquals(Response::HTTP_NOT_FOUND, $this->client->getResponse()->getStatusCode());
    }
}