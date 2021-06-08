<?php

namespace App\Controller;

use App\Entity\PlateauDeJoueur;
use App\Form\PlateauDeJoueurType;
use App\Repository\PlateauDeJoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/plateaudejoueur")
 */
class PlateauDeJoueurController extends AbstractController
{
    /**
     * @Route("/", name="plateau_de_joueur_index", methods={"GET"})
     */
    public function index(PlateauDeJoueurRepository $plateauDeJoueurRepository): Response
    {
        return $this->render('plateau_de_joueur/index.html.twig', [
            'plateau_de_joueurs' => $plateauDeJoueurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="plateau_de_joueur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $plateauDeJoueur = new PlateauDeJoueur();
        $form = $this->createForm(PlateauDeJoueurType::class, $plateauDeJoueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plateauDeJoueur);
            $entityManager->flush();

            return $this->redirectToRoute('plateau_de_joueur_index');
        }

        return $this->render('plateau_de_joueur/new.html.twig', [
            'plateau_de_joueur' => $plateauDeJoueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="plateau_de_joueur_show", methods={"GET"})
     */
    public function show(PlateauDeJoueur $plateauDeJoueur): Response
    {
        return $this->render('plateau_de_joueur/show.html.twig', [
            'plateau_de_joueur' => $plateauDeJoueur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="plateau_de_joueur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PlateauDeJoueur $plateauDeJoueur): Response
    {
        $form = $this->createForm(PlateauDeJoueurType::class, $plateauDeJoueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plateau_de_joueur_index');
        }

        return $this->render('plateau_de_joueur/edit.html.twig', [
            'plateau_de_joueur' => $plateauDeJoueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="plateau_de_joueur_delete", methods={"POST"})
     */
    public function delete(Request $request, PlateauDeJoueur $plateauDeJoueur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$plateauDeJoueur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($plateauDeJoueur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('plateau_de_joueur_index');
    }
}
