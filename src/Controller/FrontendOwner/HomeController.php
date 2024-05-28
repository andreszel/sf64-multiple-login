<?php

namespace App\Controller\FrontendOwner;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_homepage', host: 'gymsystem.test')]
    public function index(): Response
    {
        return $this->render('frontend_owner/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
