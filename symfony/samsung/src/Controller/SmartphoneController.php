<?php

namespace App\Controller;

use App\Entity\Smartphone;
use App\Form\SmartphoneType;
use App\Repository\SmartphoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/smartphone")
 */
class SmartphoneController extends AbstractController
{
    /**
     * @Route("/", name="smartphone_index", methods={"GET"})
     * @param SmartphoneRepository $smartphoneRepository
     * @return Response
     */
    public function index(SmartphoneRepository $smartphoneRepository): Response
    {
        return $this->render('smartphone/index.html.twig', [
            'smartphones' => $smartphoneRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{name}", name="find_smartphone_by_name")
     * @param $name
     * @param SmartphoneRepository $smartphoneRepository
     * @return Response
     */
    public function findAllByName($name, SmartphoneRepository $smartphoneRepository): Response
    {
        return $this->render('smartphone/index.html.twig', [
            'smartphones' => $smartphoneRepository->findByName($name),
        ]);
    }

    /**
     * @Route("/new/create", name="smartphone_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $smartphone = new Smartphone();
        $form = $this->createForm(SmartphoneType::class, $smartphone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($smartphone);
            $entityManager->flush();

            return $this->redirectToRoute('smartphone_index');
        }

        return $this->render('smartphone/new.html.twig', [
            'smartphone' => $smartphone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/details/{id}", name="smartphone_show", methods={"GET"})
     * @param Smartphone $smartphone
     * @return Response
     */
    public function show(Smartphone $smartphone): Response
    {
        return $this->render('smartphone/show.html.twig', [
            'smartphone' => $smartphone,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="smartphone_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Smartphone $smartphone
     * @return Response
     */
    public function edit(Request $request, Smartphone $smartphone): Response
    {
        $form = $this->createForm(SmartphoneType::class, $smartphone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('smartphone_index');
        }

        return $this->render('smartphone/edit.html.twig', [
            'smartphone' => $smartphone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="smartphone_delete", methods={"DELETE"})
     * @param Request $request
     * @param Smartphone $smartphone
     * @return Response
     */
    public function delete(Request $request, Smartphone $smartphone): Response
    {
        if ($this->isCsrfTokenValid('delete'.$smartphone->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($smartphone);
            $entityManager->flush();
        }

        return $this->redirectToRoute('smartphone_index');
    }
}
