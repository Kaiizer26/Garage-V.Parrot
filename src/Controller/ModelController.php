<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ModelController extends AbstractController
{
    #[Route('/model', name: 'model')]
    public function index(): Response
    {
        return $this->render('model/model.html.twig', [
            'controller_name' => 'ModelController',
        ]);
    }
}
