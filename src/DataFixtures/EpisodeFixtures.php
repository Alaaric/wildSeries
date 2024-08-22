<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager) : void
    {

        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                for ($k = 1; $k <= 10; $k++) {
                    $episode = new Episode();
                    $episode->setTitle($faker->words(3, true));
                    $episode->setNumber($k);
                    $episode->setSynopsis($faker->paragraphs(2, true));
                    $episode->setSeason($this->getReference('program_' . $i . 'season_' . $j));

                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }
    public function getDependencies() {
        return [
            SeasonFixtures::class,
        ];
    }
}