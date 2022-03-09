<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InstrumentSuppliesController extends AbstractController
{
    /**
     * @Route("/instrument-supplies", name="instrument_supplies")
     */
    public function index()
    {
        return $this->render('instrument_supplies/index.html.twig', [
            'controller_name' => 'InstrumentSuppliesController',
        ]);
    }
}
