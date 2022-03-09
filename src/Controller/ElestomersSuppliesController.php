<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ElestomersSuppliesController extends AbstractController
{
    /**
     * @Route("/elestomers-supplies", name="elestomers_supplies")
     */
    public function index()
    {
        return $this->render('elestomers_supplies/index.html.twig', [
            'controller_name' => 'ElestomersSuppliesController',
        ]);
    }
}
