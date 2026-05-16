<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $myShip = [
            'name' => 'USS LeafCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-luc Pickles',
            'status' => 'Under construction',
        ];

        return $this->render('main/homepage.html.twig',
            [
                'starshipCount' => $starshipCount,
                'myShip' => $myShip,
            ]);
    }
}
