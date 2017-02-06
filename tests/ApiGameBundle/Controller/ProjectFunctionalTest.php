<?php

namespace ApiGameBundle\Tests\Controller;

use ApiGameBundle\Entity\Developer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ProjectFunctionalTest
 */
class ProjectFunctionalTest extends WebTestCase
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
     * Create new project.
     */
    public function testCreateNewProject()
    {
        $data = [
            'name'             => 'Cool test project',
            'level'            => '1',
            'experiencePoints' => '30',
            'price'            => '3000',
            'days'             => '29',
        ];

        $this->client->request('POST', $this->container->get('router')->generate('api_game_project_new'), $data);

        $this->assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertEquals('["Project was created"]', $this->client->getResponse()->getContent());
    }

    /**
     * Test new project with validation error.
     */
    public function testCreateNewProjectValidationError()
    {
        $this->client->request('POST', $this->container->get('router')->generate('api_game_project_new'), []);
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test project list
     */
    public function testProjectList()
    {
        $developer = $this->em->getRepository(Developer::class)->findOneBy(['nickname' => 'test_developer']);

        $this->client->request('GET', $this->routerService->generate('api_game_developers_list'));
        $data = json_decode($this->client->getResponse()->getContent(), true);

        $this->assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertEquals($developer->getNickname(), $data[0]['nickname']);
        $this->assertEquals($developer->getTagLine(), $data[0]['tagLine']);
        $this->assertEquals($developer->getLevel(), $data[0]['level']);
        $this->assertArrayHasKey('skills', $data[0]);
    }
}