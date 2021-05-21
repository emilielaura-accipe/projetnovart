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
            $contact=$formContact->getData();

           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($contact);
           $entityManager->flush();

        return $this->redirectToRoute('accueil');
        }                   

        return $this->render('contact/contact.html.twig',[
            'formContact' =>$formContact->createView()
        ]);
    }
        /** 
         * @Route("/contact", name="contact")
         */
        public function index(Request $request, \Swift_Mailer $mailer )
        {
            $contact = new Contact;
            $formContact = $this->createForm(ContactType::class);
            
            
            $formContact->handleRequest($request);
            if($formContact->isSubmitted() && $formContact->isValid())
            {
                $contact=$formContact->getData();
    
                //Ici nous enverrons le mail
                $message = (new \Swift_Message('Nouveau Contact'))
                  //On attribue l'expéditeur
                  ->setFrom($contact['email'])
    
                  //On attribue le destinataire
                  ->setTo('ivana@test.com')
    
                  //On crée le message vu Twig
                  ->setBody(
                      $this->renderView(
                          'email/index.html.twig',compact('contact')
                      ),
                      'text/html'
                    )
                ;
                    //On envoie le message
                    $mailer->send($message);
    
                    $this->addFlash('message', 'Le message a bien été envoyé');
                    return $this->redirectToRoute('accueil');
    
            
            }                   
    
            return $this->render('contact/contact.html.twig',[
                'formContact' =>$formContact->createView()
            ]);
        }
    

} 

