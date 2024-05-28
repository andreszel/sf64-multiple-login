<?php

namespace App\Controller\FrontendClient;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_client_homepage', host: 'greenfit.test')]
    public function index(): Response
    {
        return $this->render('frontend_client/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
