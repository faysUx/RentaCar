<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RentaCarController extends AbstractController
{
    #[Route('/renta/car', name: 'app_renta_car')]
    public function index(): Response
    {
        return $this->render('renta_car/index.html.twig', [
            'controller_name' => 'RentaCarController',
        ]);
    }


    #[Route("/", name:"home")]
    public function indexAction()
    {
 
        return $this->render('renta_car/index.html.twig');
    }

    #[Route("/liste", name:"liste")]
    public function listeAction()
    {
 
        return $this->render('renta_car/liste.html.twig');
    }
}
