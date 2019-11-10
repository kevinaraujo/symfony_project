<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    public function helloWorld()
    {
        return new Response (
            'oi'
        );
    }

    public function showMessage()
    {
        return $this->render('hello/index.html.twig',[
            'message' => 'Hi School of net'
        ]);
    }

    public function createProduct()
    {
        $em = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Arroz');
        $product->setPrice(10.50);

        $em->persist($product);
        $em->flush();

        return new Response(
            sprintf(
                'Product %s created.',
                $product->getId()
            )
        );
    }

}