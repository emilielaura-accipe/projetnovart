<?php

namespace App\Controller\Admin;

use App\Entity\Actualites;
use App\Form\ActualitesType;
use App\Repository\ActualitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 * @Route("/admin/actualites")
 */
class ActualitesController extends AbstractController
{
    /**
     * @Route("/", name="admin_actualites_index", methods={"GET"})
     */
    public function index(ActualitesRepository $actualitesRepository): Response
    {
        return $this->render('admin/actualites/index.html.twig', [
            'actualites' => $actualitesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_actualites_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $actualite = new Actualites();
        $form = $this->createForm(ActualitesType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($actualite);
            $entityManager->flush();

            return $this->redirectToRoute('admin_actualites_index');
        }

        return $this->render('admin/actualites/new.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_actualites_show", methods={"GET"})
     */
    public function show(Actualites $actualite): Response
    {
        return $this->render('admin/actualites/show.html.twig', [
            'actualite' => $actualite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_actualites_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Actualites $actualite): Response
    {
        $form = $this->createForm(ActualitesType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_actualites_index');
        }

        return $this->render('admin/actualites/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_actualites_delete", methods={"POST"})
     */
    public function delete(Request $request, Actualites $actualite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_actualites_index');
    }
}
