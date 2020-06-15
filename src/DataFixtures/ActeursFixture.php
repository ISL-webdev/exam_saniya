<?php

namespace App\DataFixtures;

use App\Entity\Acteurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
Use Faker;

class ActeursFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $acteur = new Acteurs();
            $acteur->setNom($faker->lastName);
            $acteur->setPrenom($faker->firstName);
            $acteur->setDateDeNaissance($faker->date());
            $acteur->setDateDeDeces($faker->date());
            $acteur->setImageUrl($faker->imageUrl());

            $manager->persist($acteur);

        }
        $manager->flush();
    }
}
