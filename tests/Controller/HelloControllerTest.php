<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HelloControllerTest extends WebTestCase
{
    public function testWorldEndPoint()
    {
        $client = $this->createClient();
        $client->request('GET', '/hello-world');

        $this->assertEquals(Response::HTTP_OK, $client->getResponse()->getStatusCode());
        $this->assertEquals('oi', $client->getResponse()->getContent());
    }
}