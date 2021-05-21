<?php

namespace App\Controller;

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
        return $this->render('mallette/index.html.twig', [
            'controller_name' => 'MallettesController',
        ]);
    }

}
