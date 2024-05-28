<?php

namespace App\Controller\Client;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/manage-panel', name: 'app_client_', host: 'greenfit.test')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('client/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
