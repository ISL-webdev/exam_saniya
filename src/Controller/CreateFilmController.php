<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CreateFilmController extends AbstractController
{
    /**
     * @Route("/create_film", name="create_film")
     */
    public function index()
    {
        return $this->render('create_film/index.html.twig', [
            'controller_name' => 'CreateFilmController',
        ]);
    }
}
