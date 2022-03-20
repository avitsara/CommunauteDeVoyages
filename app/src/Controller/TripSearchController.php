<?php

namespace App\Controller;

use App\Entity\TripSearch;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\TripSearchType;
use App\Repository\TripRepository;
use App\Repository\TripSearchRepository;
use App\Entity\Trip;
/**=== FORMULAIRE permettant de rechercher des voyages 
 * en fonction de certains critères  ===== */
class TripSearchController extends AbstractController
{
 
    #[Route('/trip/search', name: 'search')]
    public function searchCar(Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator,TripRepository $repository ): Response
    {   $trips = new Trip();
        $form = $this->createForm(TripSearchType::class);
     //   $form->handleRequest($request);
        ///$trip = $repository->findSearch($tripSearch);

       if ($form->handleRequest($request)->isSubmitted() && $form->isValid()) {
           /// Critères de recherche du formulaire 
            $criteria = $form->getData();
          ///  dd($criteria);
           /// dd($criteria["departure"]);
            ///dd($criteria["destination"]);

            /// On fait la recherche en fonction
            // des critères de l'utilisateur 
            $trips = $repository->searchTrip($criteria);
         ///   dd($trips);
          //  dd($trips[0]->getDeparture());
            //dd($trips[0]->getDeparture());
          

        }
        return $this->render('trip_search/search.html.twig', [
            'tripSearchForm' => $form->createView(),
            'trips' => $trips
        ]);
    }
}
