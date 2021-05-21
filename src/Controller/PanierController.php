<?php

namespace App\Controller;

use App\Entity\Mallette;
use App\Entity\Panier;
use App\Repository\MalletteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
   /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $sesion,MalletteRepository $malletteRepository)
    {   

        $panier = $this->getDoctrine()->getRepository(Panier::class)->findAll();

        $panier = $sesion->get('panier',[]);
        $dataPanier = [];
        $total=0;
        
        //On 
        foreach($panier as $id =>$quantite){
            $mallette=$malletteRepository->find($id);
            $dataPanier[] = [
                'mallette'=> $malletteRepository->find($id),
                'quantity'=> $quantite,
                'panier'=>$panier
            ];
           
        }
        foreach($dataPanier as $panier ){
            $total = $panier['mallette'];
        }

        return $this->render('panier/index.html.twig', compact("dataPanier","mallette","panier")
        ) ;
    }
    
    
    /**
     * @Route("/panier/add/{id} ", name="panier_add")
     */
    public function add(Mallette $mallette, SessionInterface $session)
    {
     //On récupere le panier 
     $panier = $session->get('panier',[] );
     $id= $mallette->getId();

     if(!empty($panier[$id] )){
         $panier[$id]++;
     }else{
        $panier[$id] = 1;
     }

     $session->set('panier',$panier);

     return $this->redirectToRoute('panier');

    }
    /**
     * @Route("/panier/remove/{id}", name="panier_remove")
     */
    public function remove(Mallette $mallette, SessionInterface $sesion)
    {
        $panier = $sesion->get('panier',[] );
        $id = $mallette->getId();

        if(!empty($panier[$id] )){
            if($panier[$id]>1){
               $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }else{
            $panier[$id] = 1;
        }  

        $sesion->set('panier', $panier);
        
        return $this->redirect('panier/index.html.twig');

    }
}


