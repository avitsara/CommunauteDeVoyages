<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trip;
use Symfony\Component\HttpFoundation\Request;
use App\Form\TripCreationType;
use Doctrine\ORM\EntityManagerInterface;

/**===  CLASSE PERMETTANT DE GÉRER LES VOYAGES ==*/
class TripController extends AbstractController
{
    #[Route('/trip', name: 'trip')]
    /* public function index(): Response
    {
        return $this->render('trip/trip.html.twig', [
            'controller_name' => 'TripController',
        ]);
    } */
    /**== MÉTHODE PERMETTANT DE CRÉER LE FORMUALIRE DE VOYAGES == */
    public function create(Request $request,EntityManagerInterface $entityManager):Response {
        $trip = new Trip();
        $form = $this->createForm(TripCreationType::class, $trip);
        /** ON EFFECTUE LE TRAITEMENT DU FORMULAIRE */
        $form->handleRequest($request);
        /// Si on soumet le formulaire et qu'il est valide 
        // alors on crée notre voyage 
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($trip);
            $entityManager->flush();
        }
        /// tripCreationForm = Formulaire de création de 
        // voyages 
        return $this->render('trip/trip.html.twig', [
            'tripCreationForm' => $form->createView(),
        ]);
    }



}
