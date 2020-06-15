<?php

namespace App\DataFixtures;

use App\Entity\Affiches;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AffichesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for($i = 0; $i < 20; $i++){
            $affiche = new Affiches();
            $affiche->setDescription($faker->sentence(1));
            $affiche->setImageUrl($faker->imageUrl());

            $manager->persist($affiche);

        }

        $manager->flush();
    }
}
