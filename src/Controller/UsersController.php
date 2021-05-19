<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index(): Response
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }
    /**
     * @Route("/users/add", name="users_add")
     */
    public function add(Request $request)
    {
        $users = new Users;
        $formUser = $this->createForm(UsersType::class,$users);
        
        
        $formUser->handleRequest($request);
        if($formUser->isSubmitted() && $formUser->isValid())
        {
         $entityManger = $this->getDoctrine()->getManager();
         $entityManger->persist($users);
         $entityManger->flush();

         return $this->redirectToRoute('users/form-add.html.twig');
        }                   

        return $this->render('users/form-add.html.twig',[
             'formUser' =>$formUser->createView()
        ]);
    }   
    /**
     * @Route("/users/pass/modifier", name="users_pass_modifier")
     */

    public function editPass(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();

            $users = $this->getUser();
        }
        
        return $this->render('users/editpass.html.twig',[
             
        ]);
    }
}
