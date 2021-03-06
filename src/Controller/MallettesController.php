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
        $mallette = $this->getDoctrine()->getRepository(Mallette::class)->findAll();

        return $this->render('mallette/index.html.twig', [
            'mallettte' => $mallette
            
            ]);


    }

}
