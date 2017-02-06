<?php

namespace ApiGameBundle\Controller;

use ApiGameBundle\Entity\Developer;
use ApiGameBundle\Form\Type\DeveloperType;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class for developer manipulation.
 */
class DeveloperController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource="Developers",
     *     description="Get list of all developers"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \LogicException
     */
    public function getDevelopersListAction()
    {
        $developers = $this->getDoctrine()->getRepository(Developer::class)->findAll();

        return $this->json($developers);
    }

    /**
     * @ApiDoc(
     *     resource="Developers",
     *     description="Create new developer with skills",
     *     parameters={
     *     {"name"="nickname", "dataType"="string", "required"="true", "description"="Developer nickname"},
     *     {"name"="tagLine", "dataType"="string", "required"="true", "description"="Some personal information"},
     *     {"name"="skills", "dataType"="array", "required"="true", "description"="Id of skills which you can get from another method"},
     * }
     * )
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
     */
    public function newDeveloperAction(Request $request)
    { 
        $developer = new Developer();
        
        $form = $this->createForm(DeveloperType::class, $developer);
        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $level = $this->get('api_game.developer_level_strategy')->getStartLevel($developer);
                $developer->setLevel($level);

                $em = $this->getDoctrine()->getManager();
                $em->persist($developer);
                $em->flush();
            } catch (\Exception $e) {
                return $this->json([$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            return $this->json(['User was created']);
        }

        return $this->json($form, Response::HTTP_BAD_REQUEST);
    }
}
