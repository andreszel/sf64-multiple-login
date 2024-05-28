<?php

namespace App\Controller\Owner;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/owner', name: 'app_owner_', host: 'gymsystem.test')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(): Response
    {
        return $this->render('owner/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
