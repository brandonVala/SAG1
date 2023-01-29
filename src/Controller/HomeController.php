<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('mapa/index.html.twig', [
        ]);
    }

    public function test(){
        return $this->render('home/test.html.twig', [
        
        ]);
    }
}
