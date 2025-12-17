<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function load(ObjectManager $manager): void
    {
        // 1. Création d’un rôle en base
        $roleAdmin = new Role();
        $roleAdmin->setName('ROLE_ADMIN');
        $manager->persist($roleAdmin);

        $roleUser = new Role();
        $roleUser->setName('ROLE_USER');
        $manager->persist($roleUser);

        // 2. Utilisateur principal admin
        $adminUser = new User();
        $adminUser->setEmail('dominiquedamba@fake.io');
        $adminUser->setFirstname('Dominique');
        $adminUser->setLastname('Damba');
        $adminUser->setRoles(['ROLE_ADMIN']); // Symfony lit via tableau

        $adminUser->setPassword(
            $this->passwordHasher->hashPassword($adminUser, '@password')
        );

        $adminUser->setIsVerified(true);

        $manager->persist($adminUser);

        // Sauvegarde en base
        $manager->flush();

        echo "Fixtures chargées avec succès !\n";
        echo "- Rôles enregistrés\n";
        echo "- 1 utilisateur admin créé\n";
    }
}
