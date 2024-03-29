<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
        #[Route('/adminbtn', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/adminbtn.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
