<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact/add", name="contact_add")
     */
    public function add(Request $request)
    {
        $contact = new Contact;
        $formContact = $this->createForm(ContactType::class,$contact);
        
        
        $formContact->handleRequest($request);
        if($formContact->isSubmitted() && $formContact->isValid())
        {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($contact);
        $entityManager->flush();

        return $this->redirectToRoute('index');
        }                   

        return $this->render('contact/contact.html.twig',[
            'formContact' =>$formContact->createView()
        ]);
    }
    

} 

