<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    /**
     * @return Response
     *
     * @Route("/hello-world")
     */
    public function helloWorld()
    {
        return new Response (
            'oi'
        );
    }

    /**
     * @return string
     * @Route("/mostrar-mensagem");
     */
    public function mensagem()
    {
        return $this->render('hello/index.html.twig',[
            'mensagem' => 'Olá School of net'
        ]);
    }

}