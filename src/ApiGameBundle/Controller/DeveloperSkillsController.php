<?php

namespace ApiGameBundle\Controller;

use ApiGameBundle\Entity\DeveloperSkills;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class DeveloperSkillsController
 */
class DeveloperSkillsController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource="Developers",
     *     description="Get available programmer skills",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \LogicException
     */
    public function getDeveloperSkillsListAction()
    {
        $skills = $this->getDoctrine()->getRepository(DeveloperSkills::class)->getDeveloperSkills();

        return $this->json($skills);
    }
}