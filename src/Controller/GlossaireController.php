<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GlossaireController extends AbstractController
{
    /**
     * @Route("/glossaire", name="glossaire")
     */
    public function index(): Response
    {
        return $this->render('glossaire/index.html.twig', [
            'controller_name' => 'GlossaireController',
        ]);
    }
}
