<?php

namespace App\Controller;

use App\Entity\Mallette;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MallettesController extends AbstractController
{
    /**
     * @Route("/mallette", name="mallette")
     */
    public function index(): Response
    {
<<<<<<< HEAD
        return $this->render('mallette/index.html.twig', [
            'controller_name' => 'MallettesController',
        ]);
=======
        $mallette = $this->getDoctrine()->getRepository(Mallette::class)->findAll();

        return $this->render('mallettes/index.html.twig', [
            'mallettte' => $mallette
            
            ]);


>>>>>>> 82c1c9872171ad26e283e23d6d34220e55c03b40
    }

}
