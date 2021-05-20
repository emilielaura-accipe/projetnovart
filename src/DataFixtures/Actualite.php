<?php

namespace App\DataFixtures;

use App\Entity\Actualites;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Actualite extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $actu1 = new Actualites();
        $actu1
            ->setTitre('Une œuvre, un regard')
            ->setContenu('Une œuvre, un regard \r\n', 'L’atelier de Cézanne est basculé, la perspective inexistante et les fruits prennent des proportions étranges. On a longtemps pensé que les distorsions venaient de la volonté du peintre de tout montrer, les fruits et la sculpture sur la table comme ses tableaux entassés sur le mur du fond. Le peintre Gérard Traquandi, que l’œuvre de Cézanne passionne, avance une autre idée - une autre analyse -, plus intuitive, plus séduisante et surtout beaucoup plus convaincante')
            ->setDate(new \DateTime())
            ->setLegende('Nature morte avec amour en plâtre, vers 1894 (huile sur papier) par Paul Cézanne.  70,6x57,3 cm; The Courtauld, Londres.')
            ->setImage('https://www.telerama.fr/sites/tr_master/files/styles/simplecrop1000/public/28863-2_0.jpg?itok=hzIWvuiO')
            
        ;
        $manager->persist($actu1);
        $manager->flush();


        $actu2 = new Actualites();
        $actu2
            ->setTitre('LE LIEU ÉPHÉMÈRE DE STREET-ART À DÉCOUVRIR EN PLEIN AIR À PARIS')
            ->setContenu('Pour admirer le street-art à Paris, les inconditionnels d’art urbain savent parfaitement que le 13e arrondissement est l’endroit idéal pour en prendre plein les yeux. C’est justement ici, dans ce vaste quartier du sud-est parisien que Spot 13 a jeté son dévolu en 2017. Depuis, ce lieu éphémère en plein air dédié au street-art a vu défiler un grand nombre d’artistes et le bouche-à-oreille a fait le reste. Aujourd’hui, Spot 13 attire les férus de street-art, mais pas que… de nombreux curieux, jeunes et moins jeunes, font aussi le déplacement pour découvrir cette immense galerie à ciel ouvert où les fresques réalisées à la bombe, au pinceau ou encore au pochoir dynamisent le quartier.')
            ->setDate(new \DateTime())
            ->setLegende('Le street-art continue de tisser sa toile dans le 13e arrondissement de Paris')
            ->setImage('https://www.sortiraparis.com/images/80/93826/640358-spot-13-le-lieu-ephemere-de-street-art-en-plein-air-a-paris-nos-photos-2.jpg')
            
        ;
        $manager->persist($actu1);
        $manager->flush();

        $actu3 = new Actualites();
        $actu3
            ->setTitre('LE MUSÉE PICASSO À PARIS ROUVRE SES PORTES')
            ->setContenu('Le monde de la culture s\'est mis en pause : les musées ont fermé, les rendez-vous culturels ont été reportés ou annulés... Mais comme souvent après la pluie vient le beau temps et voilà que les portes s\'ouvrent de nouveau sur les belles collections et expos des musées. C\'est le par par exemple du Musée Picasso qui sort de son sommeil pour le plus grand bonheur des admirateurs du célèbre peintre espagnol dès le 19 mai 2021.')
            ->setDate(new \DateTime())
            ->setLegende('L\'occasion d\'y retrouver l\'exposition \"Picasso-Rodin\" qui se voit prolongée pour le plus grand bonheur des amateurs du peintre espagnol.')
            ->setImage('https://www.sortiraparis.com/images/80/80445/381471-les-chefs-d-oeuvre-de-picasso-au-musee-picasso-photos-5.jpg')
            
        ;
        $manager->persist($actu3);
        $manager->flush();


        $actu4 = new Actualites();
        $actu4
            ->setTitre('EXPOSITION AU PALAIS DE LA PORTE DORÉE, CE QUI S\'OUBLIE ET CE QUI RESTE')
            ->setContenu('Le thème de la transmission, une thématique chère à l\'art contemporain aujourd\'hui. Après The African Shed Laboratory au musée du Quai Branly, c\'est au tour du Palais de la Porte Dorée - Musée de l\'Immigration de proposer son exposition sur la question. Intitulée Ce qui s’oublie et ce qui reste, celle-ci est attendue du 19 mai au 29 août 2021. Une exposition créée en collaboration avec le Musée d’Art Contemporain Africain Al Maaden (MACAAL) et qui se tient dans le cadre de la Saison Africa 2020.')
            ->setDate(new \DateTime())
            ->setLegende('Dans le cadre de la Saison Africa 2021, le Palais de la Porte Dorée - Musée de l\'Immigration vous invite à découvrir l\'exposition \"Ce qui s\'oublie et ce qui reste\".')
            ->setImage('https://www.sortiraparis.com/images/80/66131/643034-exposition-au-palais-de-la-porte-doree-ce-qui-s-oublie-et-ce-qui-reste.jpg')
            
        ;
        $manager->persist($actu4);
        $manager->flush();


        $actu5 = new Actualites();
        $actu5
            ->setTitre('David Hockney – Ma Normandie')
            ->setContenu('Gloire aux pommiers de la Normandie. C’est pour eux que David Hockney, le plus célèbre des peintres britanniques, a quitté son cher Yorkshire, ayant acheté une maison dans la campagne, en pays d\'Auge, en 2019. Il y a passé le premier confinement sur sa tablette graphique et y a dessiné comme un moine ravi de l’occasion. Dans les trois espaces de la galerie Lelong, il offre la primeur de ses nouvelles œuvres aux bienheureux Parisiens. Hockney cultive à foison sa chère terre normande : voici des paysages et des villages coquets, des maisons à colombages, des perspectives ouvertes et dynamiques.')
            ->setDate(new \DateTime())
            ->setLegende('Gloire aux pommiers de la Normandie.')
            ->setImage('https://media.timeout.com/images/105735704/750/422/image.jpg')
            
        ;
        $manager->persist($actu5);
        $manager->flush();


        $actu6 = new Actualites();
        $actu6
            ->setTitre('TOTEMS À CIEL OUVERT, L\'EXPOSITION EN PLEIN AIR DE JULIEN MARINETTI À PARIS')
            ->setContenu('L\'art s\'expose en plein air dans les rues de Paris ! Du côté de la place de la concorde, les Galeries Bartoux dévoilent Totems à Ciel Ouvert, une exposition canon qui dévoile cinq oeuvres hautes en couleur de l\'artiste Julien Marinetti. Un bon plan balade à découvrir jusqu\'au 4 juin 2021 !Si vous vous baladez du côté du Faubourg Saint-Honoré, ouvrez l\'oeil et le bon ! Vous pourriez bien tomber nez à nez face à une sculpture haute en couleur. Félicitations, vous venez de découvrir l\'une des cinq oeuvres de Julien Marinetti qui se sont installées dans ce quartier chic de la capitale.')
            ->setDate(new \DateTime())
            ->setLegende('Exposition de Julien Maritteni')
            ->setImage('https://www.sortiraparis.com/images/80/93858/641302-exposition-de-julien-marinetti-en-plein-air-totems-a-ciel-ouvert-11.jpg')
            
        ;
        $manager->persist($actu6);
        $manager->flush();


        $actu7 = new Actualites();
        $actu7
            ->setTitre('Expo Dalí à l’Atelier des Lumières – Une expérience numérique avec des oeuvres XXL')
            ->setContenu('L’expo Dalí à l’Atelier des Lumières est la nouvelle création de ce lieu dédié à la découverte de l’art via des procédés numériques et immersifs\r\nÀ travers un parcours thématique, plongez dans des paysages surréalistes et métaphysiques et retrouvez-vous au coeur des oeuvres surprenantes de l’artiste à l’imagination débordante\r\nL’expo Dalí à l’Atelier des Lumières, présente des œuvres monumentales de Dalí sont projetées sur le sol et les murs de l’Atelier. Jusqu’à 10 mètres de haut, elles laissent apparaître les détails des coups de pinceau, des traits et des jeux de matières\r\nElles retracent 60 années de création\r\nL’univers de Dali se prête particulièrement bien à cette expérience numérique format XXL\r\nLa musique des Pink Floyd accompagne cette expérience sensorielle')
            ->setDate(new \DateTime())
            ->setLegende('ON AIME : une expérience sensorielle totale et bluffante\r\nÂGE:  pour tous, dès 6 ans')
            ->setImage('https://www.sortiraparis.com/images/80/93267/625175-exposition-dali-a-latelier-des-lumieres-18.jpg')
            
        ;
        $manager->persist($actu7);
        $manager->flush();


        $actu8 = new Actualites();
        $actu8
            ->setTitre('MUSÉE EN HERBE : DE L\'ART ET DES JEUX POUR LES ENFANTS')
            ->setContenu('Confinement ou pas, le Musée en Herbe ne laisse pas les tout petits dans un coin : il nous rouvre les portes de son univers avec des activités spéciales ! Tous ensemble, on (re)découvre l\'exposition Walk The Line with L\'Atlas à travers une visite virtuelle. Des vidéos et des ateliers nous proposent également d\'en apprendre plus sur le monde de l\'art, toujours de façon ludique et adaptée à tous les enfants. C\'est parti pour une après-midi fun !Vous l\'avez peut-être visité en famille : l\'exposition de l\'artiste L\'Atlas était visible au Musée en Herbe jusqu\'en mars 2020. On y a admiré de très belles œuvres de street art adaptées aux enfants. Grâce à la visite virtuelle, on peut revoir toutes ces œuvres et jouer avec ! Le Musée a préparé un petit jeu de piste et a caché de nombreux indices dans les tableaux de l\'exposition. Deux niveaux de difficulté sont disponibles : pour les trois à cinq ans et pour les cinq à 12 ans.')
            ->setDate(new \DateTime())
            ->setLegende('Le musée préféré des enfants est de retour, du moins sur la Toile : le Musée en Herbe nous a préparé différentes activités pour nous occuper pendant le confinement.')
            ->setImage('https://www.sortiraparis.com/images/80/88267/492604-walk-the-line-with-latlas-l-epo-au-musee-en-herbe-28.jpg')
            
        ;
        $manager->persist($actu8);
        $manager->flush();


        $actu9 = new Actualites();
        $actu9
            ->setTitre('LA GALERIE DES ENFANTS AU MUSÉUM D\'HISTOIRE NATURELLE')
            ->setContenu('Le Muséum d\'Histoire Naturelle est assez connu pour sa Galerie de l\'évolution et ses dinosaures, mammouths et autres espèces disparues. Néanmoins, un espace consacré aux enfants a ouvert en 2008 dans ce lieu merveilleux.\r\nLa Galerie des Enfants se veut être un espace dédié à l\'environnement et la biodiversité.\r\n\r\n4 espaces ont été spécialement conçus pour permettre aux visiteurs de réaliser quels impacts ont les différentes activités humaines sur l\'environnement. L\'espace fut aménagé dans ce sens : l\'urbanisation étant dense, un grand espace est consacré à la ville. Néanmoins, les océans ne pouvant être représentés, une rivière fait office d\'espace aquatique... La forêt tropicale nous alarme sur les dangers de la déforestation et sur l\'importance de la flore dans notre monde.\r\n\r\nLes enfants pourront améliorer leurs connaissances en jouant avec le livret qui permet une chasse au trésor à l\'intérieur de la Galerie.')
            ->setDate(new \DateTime())
            ->setLegende('La Galerie des Enfants est incontournable : située dans le Muséum national d\'Histoire Naturelle, le site a été crée pour sensibiliser le public et complète ainsi la Galerie de l\'évolution. Il est consacré aux 6 - 12ans')
            ->setImage('https://media.timeout.com/images/102364501/750/422/image.jpg')
            
        ;
        $manager->persist($actu9);
        $manager->flush();
    }
}
