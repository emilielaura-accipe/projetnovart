<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $users = new Users();
        $formUser = $this->createForm(RegistrationFormType::class, $users);
        $formUser->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {
            // encode the plain password
            $users->setPassword(
                $passwordEncoder->encodePassword(
                    $users,
                    $formUser->get('password')->getData()
                )
            );
            $users->setRoles(['ROLE_USER']);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($users);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('mon_compte');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $formUser->createView()
        ]);
    }
}
