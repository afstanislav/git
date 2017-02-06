<?php

namespace ApiGameBundle\Controller;

use ApiGameBundle\Entity\Project;
use ApiGameBundle\Form\Type\ProjectType;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ProjectController
 */
class ProjectController extends FOSRestController
{
    /**
     * @ApiDoc(
     *     resource="Project",
     *     description="Create new project with parameters",
     *     parameters={
     *     {"name"="name", "dataType"="string", "required"="true", "description"="Project name"},
     *     {"name"="level", "dataType"="integer", "required"="true", "description"="1-easy, 2-medium, 3-hard"},
     *     {"name"="experiencePoints", "dataType"="integer", "required"="true", "description"="Experience points for project"},
     *     {"name"="price", "dataType"="integer", "required"="true", "description"="Price"},
     *     {"name"="days", "dataType"="integer", "required"="true", "description"=""},
     * }
     * )
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
     */
    public function newProjectAction(Request $request)
    {
        $project = new Project();

        $form = $this->createForm(ProjectType::class, $project);
        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($project);
                $em->flush();
            } catch (\Exception $e) {
                return $this->json([$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            return $this->json(['Project was created']);
        }

        return $this->json($form, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @ApiDoc(
     *     resource="Project",
     *     description="Get available projects",
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     *
     * @throws \LogicException
     */
    public function getProjectListAction()
    {
        $activeProjects = $this->getDoctrine()->getRepository(Project::class)->getActiveProjects();

        return $this->json($activeProjects);
    }
}