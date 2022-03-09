<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SparePartsController extends AbstractController
{
    /**
     * @Route("/supplies-and-services", name="spare_parts")
     */
    public function index()
    {
        return $this->render('spare_parts/index.html.twig', [
            'controller_name' => 'SparePartsController',
        ]);
    }
}
