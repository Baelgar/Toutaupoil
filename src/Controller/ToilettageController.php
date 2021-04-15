<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToilettageController extends AbstractController
{
    /**
     * @Route("/toilettage", name="toilettage")
     */
    public function index(): Response
    {
        return $this->render('toilettage/index.html.twig', [
            'controller_name' => 'ToilettageController',
        ]);
    }
}
