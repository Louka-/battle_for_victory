<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{

    /**
     * @Route("/regles", name="page_regles")
     */
    public function regles(): Response
    {
        return $this->render('page/regles.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
