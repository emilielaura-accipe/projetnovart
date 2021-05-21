<?php

namespace App\DataFixtures;

use App\Controller\PanierController;
use App\Entity\Panier as EntityPanier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Panier extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
    }
}
