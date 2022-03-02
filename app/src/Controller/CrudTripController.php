<?php

namespace App\Controller;

use App\Entity\Trip;
use App\Form\TripType;
use App\Repository\TripRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TripCreationType;

#[Route('/crud/trip')]
class CrudTripController extends AbstractController
{
    #[Route('/', name: 'app_crud_trip_index', methods: ['GET'])]
    public function index(TripRepository $tripRepository): Response
    {
        return $this->render('crud_trip/index.html.twig', [
            'trips' => $tripRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_crud_trip_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TripRepository $tripRepository): Response
    {
        $trip = new Trip();
        $form = $this->createForm(TripType::class, $trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tripRepository->add($trip);
            return $this->redirectToRoute('app_crud_trip_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('crud_trip/new.html.twig', [
            'trip' => $trip,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_crud_trip_show', methods: ['GET'])]
    public function show(Trip $trip): Response
    {
        return $this->render('crud_trip/show.html.twig', [
            'trip' => $trip,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_crud_trip_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trip $trip, TripRepository $tripRepository): Response
    {
        $form = $this->createForm(TripCreationType::class, $trip);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tripRepository->add($trip);
            return $this->redirectToRoute('app_crud_trip_index', [], Response::HTTP_SEE_OTHER);
        }

      /*  return $this->renderForm('crud_trip/edit.html.twig', [
            'trip' => $trip,
            'form' => $form,
        ]);*/

        return $this->render('crud_trip/edit.html.twig', [
            'trip' =>$trip,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_crud_trip_delete', methods: ['POST'])]
    public function delete(Request $request, Trip $trip, TripRepository $tripRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trip->getId(), $request->request->get('_token'))) {
            $tripRepository->remove($trip);
        }

        return $this->redirectToRoute('app_crud_trip_index', [], Response::HTTP_SEE_OTHER);
    }
}
