<?php

namespace App\Controller;

use App\Entity\Films;
use App\Repository\FilmsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeFilmsController extends AbstractController
{
    /**
     * @Route("/", name="home_films")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Films::class);
        $films = $repository->findAll();
        return $this->render('home_films/index.html.twig', [
            'controller_name' => 'HomeFilmsController',
            'films' => $films
        ]);
    }
}
