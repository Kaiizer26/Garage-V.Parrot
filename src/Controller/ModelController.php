<?php

namespace App\Controller;

use App\Repository\ModelsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
// use Symfony\Component\Routing\Annotation\Route;

class ModelController extends AbstractController
{
    #[Route('/model', name: 'model')]
    public function index(ModelsRepository $modelsRepository): Response
    {
        $models = $modelsRepository->findAll();
        return $this->render('model/model.html.twig', [
            'models' => $models,
            'controller_name' => 'ModelController',
        ]);
    }
}
