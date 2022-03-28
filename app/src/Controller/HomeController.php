<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trip;
use App\Repository\TripRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(TripRepository $repository ): Response
    {
        /// On récupère l'entité trip
        $trip = $repository->findLatest();
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'trips' => $trip
        ]);
    }
}
