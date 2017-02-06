<?php

namespace Tests\ApiGameBundle\Controller;

use ApiGameBundle\Entity\Developer;
use Symfony\Component\HttpFoundation\Response;
use Tests\Utils\UtilsTestCase;


/**
 * Class DeveloperFunctionalTest
 */
class DeveloperFunctionalTest extends UtilsTestCase
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
     * Test for new developer
     */
    public function testNewDeveloper()
    {
        $data = [
            'nickname' => 'test_developer_create',
            'tagLine' => 'I need new project',
        ];

        $this->client->request('POST', $this->container->get('router')->generate('api_game_developer_new'), $data);

        $this->assertEquals(Response::HTTP_OK, $this->client->getResponse()->getStatusCode());
        $this->assertEquals('["User was created"]', $this->client->getResponse()->getContent());
    }

    /**
     * Test for incorrect form data.
     */
    public function testNewDeveloperValidationError()
    {
        $this->client->request('POST', $this->container->get('router')->generate('api_game_developer_new'), []);
        $this->assertEquals(Response::HTTP_BAD_REQUEST, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test developer list
     */
    public function testGetDevelopersList()
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