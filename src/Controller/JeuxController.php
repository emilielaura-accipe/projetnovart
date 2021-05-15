<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index(): Response
    {
        return $this->render('jeux/index.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

    /**
     * @Route("/puzzle", name="puzzle")
     */
    public function puzzle(): Response
    {
        return $this->render('jeux/puzzle/puzzle.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

}
