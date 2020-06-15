<?php

namespace App\DataFixtures;

use App\Entity\Genres;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GenreFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 5; $i++) {
            $genre = new Genres();
            $genre->setNom("Genre $i");

            $manager->persist($genre);

        }

        $manager->flush();
    }
}
