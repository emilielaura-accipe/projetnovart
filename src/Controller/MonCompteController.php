<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonCompteController extends AbstractController
{
    /**
     * @Route("/mon/compte", name="mon_compte")
     */
    public function index(): Response
    {
        return $this->render('mon_compte/index.html.twig', [
            'controller_name' => 'MonCompteController',
        ]);
    }
}
