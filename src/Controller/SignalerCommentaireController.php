<?php

namespace App\Controller;

use App\Entity\SignalerCommentaire;
use App\Form\SignalerCommentaireType;
use App\Repository\SignalerCommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/signaler/commentaire')]
final class SignalerCommentaireController extends AbstractController
{

    #[Route('/new', name: 'app_signaler_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $signalerCommentaire = new SignalerCommentaire();
        $form = $this->createForm(SignalerCommentaireType::class, $signalerCommentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($signalerCommentaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('signaler_commentaire/new.html.twig', [
            'signaler_commentaire' => $signalerCommentaire,
            'form' => $form,
        ]);
    }
}