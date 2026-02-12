<?php

namespace App\Controller;

use App\Entity\SignalerCommentaire;
use App\Form\SignalerCommentaireType;
use App\Repository\SignalerCommentaireRepository;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/signaler/commentaire')]
final class SignalerCommentaireController extends AbstractController
{

    #[Route('/new', name: 'app_signaler_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, CommentaireRepository $commentaireRepository): Response
    {
        $commentaireId = $request->query->get('id');
        
        if (!$commentaireId) {
            throw $this->createNotFoundException('Commentaire non spécifié');
        }
        
        $commentaire = $commentaireRepository->find($commentaireId);
        
        if (!$commentaire) {
            throw $this->createNotFoundException('Commentaire introuvable');
        }
        
        $actualite = $commentaire->getActualite();
        
        if (!$actualite) {
            throw $this->createNotFoundException('Ce commentaire n\'est pas associé à une actualité');
        }
        
        $signalerCommentaire = new SignalerCommentaire();
        $signalerCommentaire->setCommentaire($commentaire); 
        
        $form = $this->createForm(SignalerCommentaireType::class, $signalerCommentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($signalerCommentaire);
            $entityManager->flush();

            $this->addFlash('success', 'Commentaire signalé avec succès !');
            
            return $this->redirectToRoute('app_actualite_show', [
                'id' => $actualite->getId()
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('signaler_commentaire/new.html.twig', [
            'signaler_commentaire' => $signalerCommentaire,
            'form' => $form,
            'commentaire' => $commentaire,
            'actualite' => $actualite, // 🔥 À passer aussi au template
        ]);
    }
}