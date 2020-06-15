<?php

namespace App\Controller;

use App\Entity\Films;
use App\Repository\FilmsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    /**
     * @Route("/film", name="film")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Films::class);
        $film = $repository->findById(51);
        return $this->render('film/index.html.twig', [
            'controller_name' => 'FilmController',
            'film' => $film
        ]);
    }
}
