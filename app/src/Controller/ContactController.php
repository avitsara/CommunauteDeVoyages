<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Contact;
use App\Notification\ContactNotification;
use App\Entity\Trip;
use App\Entity\User;
/** CONTROLLEUR DE LA CLASSE CONTACT */
class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(Request $request,MailerInterface $mailer,ContactNotification $notification): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        // Création d'un contact 
        $contact = new Contact();
        $user = new User();

        if ($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();
            /// On notifie le contact 
            /// de l'envoi de l'email 
          ///  $notification->notify($contact,$mailer,$user);
            /// On construit le message que l'on veut envoyer
            $message = (new Email())
            ->from($contactFormData['email']) // expéditeur 
            ->to($user->getEmail()) // destinataire du mail = personne qui a publié l'annonce 
            ->subject('vous avez reçu un email')
            ->text('Sender : '.$contactFormData['email'].\PHP_EOL.
                    $contactFormData['Message'],
                    'text/plain');
            $mailer->send($message);
        /// On ajoute un message lorsque le mail a bien été envoyé 
        $this->addFlash('success', 'Vore message a été envoyé');
        }


        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}
