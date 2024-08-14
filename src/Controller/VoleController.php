<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoleController extends AbstractController
{
    /**
     * @Route("/vole", name="vole_index")
     */
    public function index(): Response
    {
        return $this->render('vole/index.html.twig', [
            'controller_name' => 'VoleController',
        ]);
    }
}
