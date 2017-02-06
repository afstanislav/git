<?php

namespace ApiGameBundle\Controller;

use ApiGameBundle\Entity\Developer;
use ApiGameBundle\Entity\Fight;
use ApiGameBundle\Entity\Project;
use ApiGameBundle\Form\Type\FightType;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class FightController
 */
class FightController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource="Fight",
     *     description="Create new fight with project",
     *     parameters={
     *     {"name"="developer", "dataType"="integer", "required"="true", "description"="Developer id"},
     *     {"name"="project", "dataType"="integer", "required"="true", "description"="Project id"},
     *     {"name"="proposedPrice", "dataType"="integer", "required"="true", "description"="Project price"},
     *     {"name"="proposedDays", "dataType"="integer", "required"="true", "description"="Project deadline"},
     *     }
     * )
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @throws \LogicException
     */
    public function newFightAction(Request $request)
    {
        $developer = $this->getDoctrine()->getRepository(Developer::class)->findOneBy(
            [
                'id' => $request->get('developer'),
            ]
        );

        if (!$developer) {
            throw new NotFoundHttpException('This developer wasn\'t found');
        }

        $project = $this->getDoctrine()->getRepository(Project::class)->getActiveProjectById($request->get('project'));

        if (!$project) {
            throw new NotFoundHttpException('This project wasn\'t found or not active');
        }

        $fight = new Fight();

        $form = $this->createForm(FightType::class, $fight);
        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $fightService = $this->get('api_game.developer_fight')->fight($fight);

                return $this->json([$fightService]);

            } catch (\Exception $e) {
                return $this->json([$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        return $this->json($form, Response::HTTP_BAD_REQUEST);
    }
}