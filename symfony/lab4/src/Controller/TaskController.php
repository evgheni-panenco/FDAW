<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\Type\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route("/form")
     */
    public function form(): Response
    {
        $task = new Task();
        $task->setTitle('Shopping');
        $task->setContent('Go to the store');

        $form = $this->createForm(TaskType::class, $task);

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}