<?php

namespace App\DataFixtures;
use App\Entity\Films;
use Faker;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++){
            $film = new Films();
            $film->setTitle($faker->name);
            $film->setAfficheId($i);
            $film->setDateSortie($faker->dateTime);
            $film->setResume($faker->text);
            $film->setGenreId($i);
            $film->setRealisateur($faker->name);
            $film->setProduction($faker->company);

            $manager->persist($film);

        }

        $manager->flush();
    }
}
