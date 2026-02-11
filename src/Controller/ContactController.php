<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Email;

final class ContactController extends AbstractController
{
    #[Route('/new', name: 'app_contact_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            
            $entityManager->persist($contact);
            $entityManager->flush();

            $email = (new TemplatedEmail())
                ->from('ode36093@gmail.com')
                ->to('code36093@gmail.com')
                ->replyTo($contact->getEmail())
                ->subject('Nouveau message de ' . $contact->getNom() . ' ' . $contact->getPrenom())
                ->htmlTemplate('emails/contact_admin.html.twig')
                ->context([
                    'contact' => $contact,
                ]);

            try {
                $mailer->send($email);
                $this->addFlash('success', 'Votre message a bien été envoyé !');
            } catch (\Exception $e) {                
                $this->addFlash('warning', 'Message enregistré mais l\'email n\'a pas pu être envoyé.');
            }

            return $this->redirectToRoute('app_home');
        }

        return $this->render('contact/new.html.twig', [
            'contact' => $contact,
            'contactForm' => $form,
        ]);
    }
}