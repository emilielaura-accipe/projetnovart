<?php

namespace App\Controller;

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
        $panier = $sesion->get('panier',[]);
        $panier = [];
        
        foreach($panier as $id =>$quantity){
            $panierWithData[] = [
                'mallette'=> $malletteRepository->find($id),
                'quantity'=> $quantity
            ];
        }
        $total = 0;

        foreach($panierWithData as $panier ){
            $totalPanier = $panier['mallette']->getPrice() * $panier['quantity'];
            $total += $totalPanier;


        }

        return $this->render('panier/index.html.twig', [
            'panier' => $panierWithData,
            'total'=>$total
        ]);
    }

    
    /**
     * @Route("/panier/add/{$id} ", name="panier_add")
     */
    public function add($id, SessionInterface $sesion)
    {
     $panier = $sesion->get('panier',[] );

     if(!empty($panier[$id] )){
         $panier[$id]++;
     }else{
        $panier[$id] = 1;
     }

     $sesion->set('panier',$panier);

     return $this->redirectToRoute('panier/index.html.twig');

    }
    /**
     * @Route("/panier/remove/{$id} ", name="panier_remove")
     */
    public function remove($id, SessionInterface $sesion)
    {
        $panier = $sesion->get('panier',[] );

        if(!empty($panier[$id] )){
            unset($panier[$id]);
        }

        $sesion->set('panier', $panier);
        
        return $this->redirect('panier/index.html.twig');

    }
}


