<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setCode('F1');
        $product->setName('Feijão');
        $product->setPrice(2.99);

        $manager->persist($product);

        $product = new Product();
        $product->setCode('ST1');
        $product->setName('Suco tang');
        $product->setPrice(0.56);

        $manager->persist($product);

        $manager->flush();
    }
}
