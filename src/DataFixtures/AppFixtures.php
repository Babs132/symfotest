<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 1; $i<=10; $i++){
            $prod = new Products();
            $date = new \DateTime();


            $prod ->setTitle("Produit".$i)
                ->setDate($date)
                ->setDescription("");
                $menager->persist($prod);
        }

        $manager->flush();
    }
}
