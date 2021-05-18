<?php

namespace App\Controller;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement", name="paiement")
     */
    public function index(): Response
    {
        return $this->render('paiement/index.html.twig', [
            'controller_name' => 'PaiementController',
        ]);
    }
    /**
     * @Route("/success", name="success")
     */
    public function success(): Response
    {
        return $this->render('paiement/success.html.twig', [
            'controller_name' => 'PaiementController',
        ]);
    }
    /**
     * @Route("/error", name="error")
     */
    public function error(): Response
    {
        return $this->render('paiement/error.html.twig', [
            'controller_name' => 'PaiementController',
        ]);
    }
    /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout()
    {
        Stripe::setApiKey('sk_test_51Is9hUI5JMdcaI0ahFiSqc1xG8mRluEgNCQ3yXaNofqmuiFlKQfjt01NyRrzEgDeXTZqLruK6L1DYU0M5jqV1v6100WSKJVPvv');

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Mallette',
                ],
                'unit_amount' => 2000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success',[],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error',[],UrlGeneratorInterface::ABSOLUTE_URL)
            
          ]);
          return new JsonResponse (['id' => $session->id]);
    }
         
}
