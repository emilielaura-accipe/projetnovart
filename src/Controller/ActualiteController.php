<?php

namespace App\Controller;

use App\Entity\Actualites;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends AbstractController
{
    /**
     * @Route("/actualite", name="actualite")
     */
    public function index(): Response
    {
        $actualite = $this->getDoctrine()->getRepository(Actualites::class)->findAll();
        return $this->render('actualite/index.html.twig', [
            'actualite' => $actualite
        ]);
    }
    /**
      * @Route("/actualite/show/{id}", name="actualite_show")
      */ 
      public function show($id)
      {
          $actualite = $this->getDoctrine()->getRepository(Actualites::class)->find($id);
  
          return $this->render('actualite/show.html.twig',[
              'actualite' =>$actualite
          ]);
      }

}


    
