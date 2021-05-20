<?php

namespace App\DataFixtures;

use App\Entity\Mallette as EntityMallette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Mallette extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $mallette1 = new EntityMallette();
        $mallette1
            ->setTheme('')
            ->setTitre('')
            ->setDescription('')
            ->setImageColoriages('')
            ->setImageArtistes('')
            ->setDescriptionArtistes('')
            ->setImageOeuvres('')
            ->setLegendeOeuvres('')
            
        ;
        $manager->persist($mallette1);
        $manager->flush();

    
        $mallette2 = new EntityMallette();
        $mallette2
           ->setTheme('')
           ->setTitre('')
           ->setDescription('')
           ->setImageColoriages('')
           ->setImageArtistes('')
           ->setDescriptionArtistes('')
           ->setImageOeuvres('')
           ->setLegendeOeuvres('')
        
        ;
      $manager->persist($mallette2);

      $manager->flush();
    }
}
