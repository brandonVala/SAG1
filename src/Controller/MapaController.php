<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapaController extends AbstractController
{
    /**
     * @Route("/mapa", name="app_mapa")
     */
    public function index()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
         return $this->render('mapa/index.html.twig', [          
        ]);
    }

}
