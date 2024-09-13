<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product')]

    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/productPrueba', name: 'productPrueba')]

    public function Prueba(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'var_prueba' => '---->Mostrando la prueba<---------',
        ]);
    }
}
