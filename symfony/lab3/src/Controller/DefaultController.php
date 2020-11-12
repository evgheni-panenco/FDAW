<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/5/2020
 * Time: 10:10 PM
 */

namespace App\Controller;

use App\Service\GreetingGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    private $greetingGenerator;

    public function __construct(GreetingGenerator $greetingGenerator)
    {
        $this->greetingGenerator = $greetingGenerator;
    }

    /**
     * @Route("/default")
     */
    public function defaultController()
    {
        $message = $this->greetingGenerator->getRandomGreeting();

        return $this->render('default.html.twig', [
            '$message' => $message,
        ]);
    }
}