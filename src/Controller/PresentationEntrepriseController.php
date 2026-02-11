<?php

namespace App\Controller;

use App\Entity\PresentationEntreprise;
use App\Form\PresentationEntrepriseType;
use App\Repository\PresentationEntrepriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PresentationEntrepriseController extends AbstractController
{
    #[Route('/presentation/entreprise', name: 'app_presentation_entreprise_index')]
    public function index(PresentationEntrepriseRepository $presentationEntrepriseRepository): Response
    {
        return $this->render('presentation_entreprise/index.html.twig', [
            'presentation_entreprises' => $presentationEntrepriseRepository->findAll(),
        ]);
    }
}
