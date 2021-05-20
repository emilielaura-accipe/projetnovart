<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class User extends Fixture
{   
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user1 = new Users();
        $user1
            ->setEmail('ivana@test.com')
            ->setNom('Milovanovic')
            ->setPrenom('Ivana')
            ->setVoie('12 rue')
            ->setCodePostal(75013)
            ->setVille('Paris')
        ;
        $password = $this->encoder->encodePassword($user1, '1234');
        $user1->setPassword($password);

        $manager->persist($user1);

        $manager->flush();


        $user2 = new Users();
        $user2
            ->setEmail('test@test.com')
            ->setNom('test')
            ->setPrenom('test')
            ->setVoie('12 rue')
            ->setCodePostal(75013)
            ->setVille('Paris')
        ;
        $password = $this->encoder->encodePassword($user2, '1234');
        $user2->setPassword($password);

        $manager->persist($user2);

        $manager->flush();
    }
}
