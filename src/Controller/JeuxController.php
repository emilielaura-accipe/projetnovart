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
     * @Route("/jeux/puzzle", name="puzzle")
     */
    public function puzzle(): Response
    {
        return $this->render('jeux/puzzle/puzzle.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/jeux/memory", name="memory")
     */
    public function memory(): Response
    {
        return $this->render('jeux/memory/memory.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/jeux/coloriage", name="coloriage")
     */
    public function coloriage(): Response
    {
        return $this->render('jeux/coloriage/coloriage.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/jeux/points", name="end_game")
     */
    public function points(): Response
    {
        return $this->render('jeux/points.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    

}
