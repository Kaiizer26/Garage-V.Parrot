<?php

namespace App\Controller;

use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(ReviewRepository $reviewRepository): Response
    {
        // Récupérer tous les avis
        $reviews = $reviewRepository->findAll();

        return $this->render('home/index.html.twig', [
            'reviews' => $reviews,
            'controller_name' => 'HomeController',
        ]);
    }
}
