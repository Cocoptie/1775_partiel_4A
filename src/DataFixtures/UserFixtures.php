<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $userPasswordHasher;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->userPasswordHasher = $userPasswordHasher;
    }

    public function load(ObjectManager $manager): void
    {
         $user = new User();
         $user->setEmail("admin@gmaiL.com");
         $password=$this->userPasswordHasher->hashPassword($user, 'test');
         $user->setPassword($password);
         $user->setRoles(["ROLE_ADMIN"]);
         $manager->persist($user);

         $user = new User();
         $user->setEmail("user@gmaiL.com");
         $password=$this->userPasswordHasher->hashPassword($user, 'test');
         $user->setPassword($password);
         $manager->persist($user);

        $manager->flush();
    }
}
