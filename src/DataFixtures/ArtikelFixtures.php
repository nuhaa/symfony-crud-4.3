<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Artikel;

class ArtikelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=0; $i < 50; $i++) {
          $artikel = new Artikel();
          $artikel->setName(sprintf('Lorem%d',$i));
          $manager->persist($artikel);
        }
        $manager->flush();
    }
}
