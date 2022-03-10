<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trip;
use Symfony\Component\HttpFoundation\Request;
use App\Form\TripCreationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Service\FileUploader;

/**===  CLASSE PERMETTANT DE CRÉER LES VOYAGES ==*/
class TripController extends AbstractController
{
    #[Route('/trip', name: 'trip')]
    /* public function index(): Response
    {
        return $this->render('trip/trip.html.twig', [
            'controller_name' => 'TripController',
        ]);
    } */
    /**== MÉTHODE PERMETTANT DE CRÉER LES VOYAGES == */
    public function create(Request $request,EntityManagerInterface $entityManager,FileUploader $fileUploader):Response {
        $trip = new Trip();
       // $upload = new Upload(); /// On instancie l'entité Upload
        $form = $this->createForm(TripCreationType::class, $trip);
        /** ON EFFECTUE LE TRAITEMENT DU FORMULAIRE */
        $form->handleRequest($request);
        /// Si on soumet le formulaire et qu'il est valide 
        // alors on crée notre voyage 
        if ($form->isSubmitted() && $form->isValid()) {
            /// On récupère l'image 
            $image = $form->get('image')->getData();
            if ($image){
                $imageFileName = $fileUploader->upload($image);
                $image->setImageFileName($imageFileName);
              ///  $trip->getImage()->setFile($imageFileName);
                /*$originalFileName = pathinfo($image->getName(),PATHINFO_FILENAME);
                /// On inclut le fichier comme faisant partie de l'URL
                $safeFileName = $slugger->slug($originalFileName);
                $newFileName = $safeFileName.'.'.$image->guessExtension();
                try {
                    $image->move($this->getParameter('images_directory'),$newFileName);

                } catch(FileException $e){

                }*/
            ///$image->setFileName($newFileName);
            }
            $entityManager->persist($trip);
            $entityManager->flush();
            /// On redirige l'utilisateur vers 
            // la page d'acceuil 
            return $this->redirectToRoute('home');
        }
        /// tripCreationForm = Formulaire de création de 
        // voyages 
        return $this->render('trip/trip.html.twig', [
            'tripCreationForm' => $form->createView(),
        ]);
    }



}
