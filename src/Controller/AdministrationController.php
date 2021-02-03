<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdministrationController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function main(): Response
    {
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdministrationController',
        ]);
    }
    /**
     * @Route("/administration", name="administrationIndex")
     */
    public function administrationIndex(): Response
    {
        return $this->render('administration/login.html.twig', [
            'controller_name' => 'AdministrationController',
        ]);
    }
}
