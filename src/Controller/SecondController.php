<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    /**
     * @Route("/second", name="second")
     */
    public function index(Request $request): Response
    {
        dump($request);
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function hello($name) {
        return $this->render('second/hello.index.html.twig', array(
            'name' => $name
        ));
    }
}
