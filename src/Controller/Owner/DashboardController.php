<?php

namespace App\Controller\Owner;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardController extends AbstractController
{
    #[Route('/owner/dashboard', name: 'app_owner_dashboard')]
    public function index(): Response
    {
        return $this->render('owner/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
