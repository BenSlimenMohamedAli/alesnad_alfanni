<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FittingPipeSuppliesController extends AbstractController
{
    /**
     * @Route("/fitting-pipe-supplies", name="fitting_pipe_supplies")
     */
    public function index()
    {
        return $this->render('fitting_pipe_supplies/index.html.twig', [
            'controller_name' => 'FittingPipeSuppliesController',
        ]);
    }
}
