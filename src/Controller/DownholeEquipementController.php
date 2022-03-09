<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DownholeEquipementController extends AbstractController
{
    /**
     * @Route("/downhole-equipement", name="downhole_equipement")
     */
    public function index()
    {
        return $this->render('downhole_equipement/index.html.twig', [
            'controller_name' => 'DownholeEquipementController',
        ]);
    }
}
