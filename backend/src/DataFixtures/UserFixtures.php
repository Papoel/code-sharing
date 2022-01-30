<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        $users[] = [];

        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        $hash = $this->passwordHasher->hashPassword($user, ('password'));
        $user->setPassword($hash);
        $user->setFirstname('Pascal');
        $user->setLastname('Briffard');
        $user->setPseudo('Papoel');
        $user->setAddress('12 résidence Kennedy rue des Roquelles');
        $user->setPostalCode('59460');
        $user->setCity('Jeumont');
        $user->setCountry('France');
        $user->setIsActive(true);

        $manager->persist($user);

        $users[] = $user;

        for ($i = 1; $i <= 20; ++$i) {
            $users = [];
            $user = new User();
            $user->setEmail($faker->freeEmail());
            $user->setRoles(['ROLE_USER']);
            $hash = $this->passwordHasher->hashPassword($user, ('password'));
            $user->setPassword($hash);
            $user->setFirstname($faker->firstName('male' || 'female') );
            $user->setLastname($faker->lastName());
            $user->setPseudo($faker->words(1, true));
            $user->setAddress($faker->streetAddress());
            $user->setPostalCode($faker->randomNumber(5, true));
            $user->setCity($faker->city());
            $user->setCountry($faker->country());
            $user->setIsActive($faker->boolean());

            $manager->persist($user);

            $users[] = $user;
        }

        $manager->flush();
    }
}
