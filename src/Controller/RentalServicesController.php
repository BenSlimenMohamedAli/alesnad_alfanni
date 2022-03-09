<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RentalServicesController extends AbstractController
{
    /**
     * @Route("/rental-services", name="rental_services")
     */
    public function index()
    {
        return $this->render('rental_services/index.html.twig', [
            'controller_name' => 'RentalServicesController',
        ]);
    }
}
