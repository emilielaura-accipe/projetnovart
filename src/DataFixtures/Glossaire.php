<?php

namespace App\DataFixtures;

use App\Entity\Glossaire as EntityGlo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Glossaire extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $glossaire1 = new EntityGlo();
        $glossaire1

            ->setMot('Art abstrait')
            ->setDefinition('Expression artistique, née au début du XXe siècle, qui ne met pas en jeu la représentation du réel. Kandinsky (1866-1944) est un artiste pionnier de cette nouvelle tendance en peinture. Plusieurs courants d’art abstrait se succèdent ou coexistent jusqu’à nos jours.')
            
            
        ;
        $manager->persist($glossaire1);
        $manager->flush();

        
        $glossaire2 = new EntityGlo();
        $glossaire2
            ->setMot('Allégorie')
            ->setDefinition('Représentation figurée d’une idée abstraite.')
            
            
        ;
        $manager->persist($glossaire2);
        $manager->flush();



        $glossaire3 = new EntityGlo();
        $glossaire3
            ->setMot('Art cinétique')
            ->setDefinition('Courant artistique qui se développe à partir du XXe siècle et qui introduit le mouvement dans les arts plastiques.')
            
            
        ;
        $manager->persist($glossaire3);
        $manager->flush();

        

        $glossaire4 = new EntityGlo();
        $glossaire4
            ->setMot('Art contemporain')
            ->setDefinition('Période qui commence après la Seconde Guerre mondiale et continue aujourd’hui.')
            
            
        ;
        $manager->persist($glossaire4);
        $manager->flush();
        

        $glossaire5 = new EntityGlo();
        $glossaire5
            ->setMot('Art nouveau')
            ->setDefinition('Style qui se développe dès la fin du XIXe siècle, d\'abord en Belgique et en France. Il s’épanouit dans l’architecture et dans les arts décoratifs. La recherche de fonctionnalité est une des préoccupations de ses architectes et designers. L’Art nouveau se caractérise par des formes inspirées de la nature, où la courbe domine.')
            
            
        ;
        $manager->persist($glossaire5);
        $manager->flush();



        $glossaire6 = new EntityGlo();
        $glossaire6
            ->setMot('All over')
            ->setDefinition('Pratique artistique qui consiste à couvrir toute la surface d’un tableau sans hiérarchie de plans, à la différence d’une composition classique.')
            
            
        ;
        $manager->persist($glossaire6);
        $manager->flush();

        
        $glossaire7 = new EntityGlo();
        $glossaire7
            ->setMot('Académie')
            ->setDefinition('Institution, fondée en 1648, qui rassemble les artistes distingués par une assemblée de pairs et travaillant le plus souvent pour la couronne. Elle définit les règles de l’art et du bon goût, forme les artistes, organise des expositions. Académie royale de peinture et de sculpture jusqu’à la Révolution, elle devient par la suite l’Académie des beaux-arts.')
            
            
        ;
        $manager->persist($glossaire7);
        $manager->flush();



        $glossaire8 = new EntityGlo();
        $glossaire8
            ->setMot('Barbotine')
            ->setDefinition('Pâte liquide composée le plus souvent d’argile utilisée pour coller des éléments de décor sur une sculpture en terre.')
            
            
        ;
        $manager->persist($glossaire8);
        $manager->flush();

        

        $glossaire9 = new EntityGlo();
        $glossaire9
            ->setMot('Bas-relief')
            ->setDefinition('Type de sculpture en deux dimensions. Le matériau est creusé afin que la forme souhaitée apparaisse en épaisseur par rapport au fond.')
            
            
        ;
        $manager->persist($glossaire9);
        $manager->flush();
        

        $glossaire10 = new EntityGlo();
        $glossaire10
            ->setMot('Bauhaus')
            ->setDefinition('École d’arts appliqués fondée par Walter Gropius à Weimar (Allemagne) en 1919 et fermée par le régime nazi en 1933. Son rayonnement perdure par l’exil de ses membres. Elle propose de faire la synthèse entre les arts, l’artisanat et l’industrie. Tout le design contemporain en découle.')
            
            
        ;
        $manager->persist($glossaire10);
        $manager->flush();


        $glossaire11 = new EntityGlo();
        $glossaire11
            ->setMot('Bleu de Prusse')
            ->setDefinition('Couleur chimique (ferrocyanure ferrique) d’un bleu profond découverte accidentellement par J. J. Diesbach à Berlin vers 1706 et qui fut employée en peinture dès 1709. Il est introduit par les Hollandais au Japon en 1829.')
            
            
        ;
        $manager->persist($glossaire11);
        $manager->flush();

        
        $glossaire12 = new EntityGlo();
        $glossaire12
            ->setMot('Cubisme')
            ->setDefinition('Courant artistique, né peu avant la guerre de 1914, dont les pionniers furent Pablo Picasso et Georges Braque. Il porte un nouveau regard sur l’objet, dont les volumes et les plans peuvent être représentés de manière stylisée et vus simultanément sous plusieurs angles. Il s’inspire à la fois des recherches formelles de Paul Cézanne et des arts premiers.')
            
            
        ;
        $manager->persist($glossaire12);
        $manager->flush();



        $glossaire13 = new EntityGlo();
        $glossaire13
            ->setMot('Classicisme')
            ->setDefinition('Au XVIIe siècle, courant de pensée qui fait de l’Antiquité le modèle de toute forme artistique (littérature, musique, architecture et arts plastiques). Il coexiste avec le baroque auquel il oppose une certaine forme de rigueur et de pondération. En France, il trouve sa meilleure expression sous le règne de Louis XIV, au travers des différentes académies.')
            
            
        ;
        $manager->persist($glossaire13);
        $manager->flush();

        

        $glossaire14 = new EntityGlo();
        $glossaire14
            ->setMot('Clair-obscur')
            ->setDefinition('Répartition des ombres et des lumières sur une peinture, de telle sorte que les couleurs les plus sombres se juxtaposent aux plus claires et produisent un fort effet de contraste.')
            
            
        ;
        $manager->persist($glossaire14);
        $manager->flush();
        

        $glossaire15 = new EntityGlo();
        $glossaire15
            ->setMot('Dada')
            ->setDefinition('Mouvement intellectuel né au cœur du cataclysme de la Première Guerre mondiale en Europe. Le mouvement ne tarde pas à gagner les États-Unis avec Man Ray, Duchamp et Picabia qui animent Dada New York. Dans un esprit subversif, les artistes Dada (ou dadaïstes) mettent en question la notion d’œuvre d’art. Leur travail est souvent caractérisé par le recyclage et le détournement des objets qu’ils collectent.')
            
            
        ;
        $manager->persist($glossaire15);
        $manager->flush();



        $glossaire16 = new EntityGlo();
        $glossaire16
            ->setMot('Estampe')
            ->setDefinition('Image obtenue sur un support papier par impression d’une planche de bois gravée (xylographie) ou d’une plaque de métal, voire d’une pierre dessinée (lithographie). La plaque de métal peut être travaillée selon différents procédés, mécanique (burin) ou chimique (eau-forte), qui définissent plusieurs types de gravure.')
            
            
        ;
        $manager->persist($glossaire16);
        $manager->flush();

        
        $glossaire17 = new EntityGlo();
        $glossaire17
            ->setMot('Expressionnisme')
            ->setDefinition('Tendance artistique qui naît en Europe centrale à la fin du XIXe siècle et qui met à l’honneur la libre expression des passions et des formes, en réaction à l’académisme et à l’impressionnisme.')
            
            
        ;
        $manager->persist($glossaire17);
        $manager->flush();



        $glossaire18 = new EntityGlo();
        $glossaire18
            ->setMot('Fauves')
            ->setDefinition('Les Fauves sont les artistes qui, à leurs débuts, dans les dix premières années du XXe siècle, explorent dans leur peinture le potentiel expressif des couleurs pures sans se soucier d’imiter la nature. L’expression « Fauves » est apparue en 1905 sous la plume d’un critique, exaspéré par la liberté que ces artistes prennent quant aux conventions : l’association sauvage des couleurs, leur tonalité criarde, évoquent pour lui le rugissement d’un fauve. Les représentants les plus célèbres de ce courant baptisé aussi le fauvisme sont Henri Matisse, André Derain et Maurice de Vlaminck.')
            
            
        ;
        $manager->persist($glossaire18);
        $manager->flush();

        

        $glossaire19 = new EntityGlo();
        $glossaire19
            ->setMot('Fête galante')
            ->setDefinition('Genre pictural, né au XVIIIe siècle, qui met en scène des couples d’amoureux dans un cadre champêtre.')
            
            
        ;
        $manager->persist($glossaire19);
        $manager->flush();
        

        $glossaire20 = new EntityGlo();
        $glossaire20
            ->setMot('Fresque')
            ->setDefinition('Technique de peinture murale qui consiste à appliquer des couleurs délayées à l’eau sur un enduit frais. Le mot est d’origine italienne, il vient de fresco qui signifie frais. Toute œuvre peinte d’après ce procédé est aussi désignée sous le nom de fresque.')
            
            
        ;
        $manager->persist($glossaire20);
        $manager->flush();

 
        $glossaire21 = new EntityGlo();
        $glossaire21
            ->setMot('Gobelins')
            ->setDefinition('Manufacture de meubles et de tapisseries créée à Paris sous Louis XIV, dont Charles Le Brun fut le premier directeur. Institution royale puis nationale, elle conserve et produit encore aujourd’hui des pièces destinées à l’ameublement des palais de la République.')
            
            
        ;
        $manager->persist($glossaire21);
        $manager->flush();

        
        $glossaire22 = new EntityGlo();
        $glossaire22
            ->setMot('Gothique')
            ->setDefinition('Style qui se développe à partir du milieu du XIIe siècle jusqu’au début du XVIe siècle dans l’Occident chrétien.')
            
            
        ;
        $manager->persist($glossaire22);
        $manager->flush();



        $glossaire23 = new EntityGlo();
        $glossaire23
            ->setMot('Haut-relief')
            ->setDefinition('Type de relief dans lequel les figures se détachent fortement du fond, à la différence du bas-relief.')
            
            
        ;
        $manager->persist($glossaire23);
        $manager->flush();

        

        $glossaire24 = new EntityGlo();
        $glossaire24
            ->setMot('Iconographie')
            ->setDefinition('Ensemble des images correspondant à un même sujet. On parle de programme iconographique lorsqu’un décor en plusieurs parties regroupe de manière cohérente différents sujets autour d’un même thème')
            
            
        ;
        $manager->persist($glossaire24);
        $manager->flush();
        

        $glossaire25 = new EntityGlo();
        $glossaire25
            ->setMot('Icône')
            ->setDefinition('Une icône est, au sens premier, une image. Le mot a fini par désigner plus particulièrement les images religieuses produites dans le monde orthodoxe (Byzance, Russie…)')
            
            
        ;
        $manager->persist($glossaire25);
        $manager->flush();



        $glossaire26 = new EntityGlo();
        $glossaire26
            ->setMot('Nature morte')
            ->setDefinition('Représentation d’objets, de végétaux, de nourriture ou d’animaux sans vie.')
            
            
        ;
        $manager->persist($glossaire26);
        $manager->flush();

        
        $glossaire27 = new EntityGlo();
        $glossaire27
            ->setMot('Minimalisme')
            ->setDefinition('Courant artistique qui prône une extrême simplicité des moyens et des formes. Né aux États-Unis au début des années 1960, en réaction à l’expressionisme abstrait, il rejoint certaines préoccupations d’artistes européens, notamment les Italiens de l’arte povera.')
            
            
        ;
        $manager->persist($glossaire27);
        $manager->flush();



        $glossaire28 = new EntityGlo();
        $glossaire28
            ->setMot('Nouveau réalisme')
            ->setDefinition('1960 - 1970) Mouvement anti-abstraction prônant une critique du monde contemporain .\r\n\r\nJean Tinguely, Arman, Yves Klein, Martial Raysse, Niki de Saint Phalle... en font partie.')
            
            
        ;
        $manager->persist($glossaire28);
        $manager->flush();




















    }








    }




