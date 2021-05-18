<?php

namespace App\Controller;

use App\Entity\Glossaire;
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
        $glossaire = $this->getDoctrine()->getRepository(Glossaire::class)->findAll();

        return $this->render('glossaire/index.html.twig', [
            'glossaires' => $glossaire]);
    }
}
