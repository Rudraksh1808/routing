<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MyroutingController extends AbstractController
{
    #[Route('/myrouting', name: 'app_myrouting1')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MyroutingController.php',
        ]);
    }


    #[Route('/myrouting/about', name: 'app_myrouting')]
    public function about(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to about section',
            'path' => 'src/Controller/MyroutingController.php',
        ]);
    }

    


}
