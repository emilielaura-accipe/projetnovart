<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

    public function add(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $users = new Users;
        $formUser = $this->createForm(UsersType::class, $users);


        $formUser->handleRequest($request);
        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $entityManger = $this->getDoctrine()->getManager();
            $users->setPassword(
                $passwordEncoder->encodePassword(
                    $users,
                    $formUser->get('password')->getData()
                )
            );

            $entityManger->persist($users);
            $entityManger->flush();

            return $this->redirectToRoute('mon_compte');
        }

        return $this->render('users/form-add.html.twig', [
            'formUser' => $formUser->createView()
        ]);
    }
    /**
     * @Route("/users/edit/{id} ", name="users_edit")
     */
    public function edit(Users $users, Request $request)
    {
        $formUsers = $this->createForm(UsersType::class, $users);

        $formUsers->handleRequest($request);

        if ($formUsers->isSubmitted() && $formUsers->isValid()) {
            $entityManger = $this->getDoctrine()->getManager();

            $entityManger->flush();

            return $this->redirectToRoute('mon_compte');
        }

        return $this->render('users/form-edit.html.twig', [
            'formUsers' => $formUsers->createView()
        ]);
    }


    /**
     * @Route("/users/pass/modifier", name="users_pass_modifier")
     */

    public function editPass(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager();

            $users = $this->getUser();

            // On v??rifie si les 2 motts de passe sont identiques
            if ($request->request->get('password') == $request->request->get('password2')) {
            } else {
                $this->addFlash('error', 'Les deux mots de passe ne sont pas indetiques');
            }
        }

        return $this->render('users/editpass.html.twig', []);
    }
}
