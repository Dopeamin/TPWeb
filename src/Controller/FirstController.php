<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController
{

    /**
     * @Route("/first")
     */
    public function first() {
        return new Response("<h1>Hello Gl2 2021</h1>");
    }

}