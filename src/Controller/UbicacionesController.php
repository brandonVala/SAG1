<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UbicacionesRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class UbicacionesController extends AbstractController
{
   public function getUbicaciones(UbicacionesRepository $repo){
    $dato = $repo->findAll();
    return new JsonResponse(['Ubicaciones'=>$dato]);
   }
   
}
