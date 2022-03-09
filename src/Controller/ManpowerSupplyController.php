<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ManpowerSupplyController extends AbstractController
{
    /**
     * @Route("/manpower-supply", name="manpower_supply")
     */
    public function index()
    {
        return $this->render('manpower_supply/index.html.twig', [
            'controller_name' => 'ManpowerSupplyController',
        ]);
    }
}
