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
            ->setTheme('Le Cubisme')
            ->setTitre('L\art de décomposer les sujets')
            ->setDescription('Le cubisme est un mouvement artistique du début du xxe siècle. Les artistes cubistes proposent de représenter les objets et les corps en les décomposant par formes géométriques simples, en multipliant les angles de vision du sujet représenté. Ils représentent peu de courbes. Il n\'y a pas d\'effet de perspective. C\'est le peintre Henri Matisse qui le premier a parlé de petits cubes à propos d\'un paysage de Braque exposé au salon d\'automne de 1908. Le critique d\'art Louis Vauxelles, qui était présent, utilise le mot cubisme dans un article.')
            ->setImageColoriages('/assets/images/LeremorqeurFL.jpg')
            ->setImageArtistes('/assets/images/GeorgesBraquePortrait.jpg')
            ->setDescriptionArtistes('Georges Braque, né à Argenteuil le 13 mai 1882 et est mort à Paris le 31 août 1963, a été l\'un des plus célèbres peintres et sculpteurs français. D\'abord influencé par l\'impressionnisme, il est aujourd\'hui considéré comme l\'un des initiateurs du cubisme avec Picasso.
            Georges Braque s\'attachait à représenter les objets ou les personnes sous différents points de vue, à travers des formes géométriques.
            Il a découvert le talent de Marie Laurencin quand elle faisait de la peinture sur porcelaine.')
            ->setImageOeuvres('/assets/images/LhommedanslavilleFL.jpg')
            ->setLegendeOeuvres('L\'homme dans la ville, 1959, Fernand Léger')
            
        ;
        $manager->persist($mallette1);
        $manager->flush();

    
        $mallette2 = new EntityMallette();
        $mallette2
           ->setTheme('L\'art abstrait')
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
