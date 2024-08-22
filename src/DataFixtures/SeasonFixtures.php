<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $season = new Season();
                $season->setNumber($j);
                $season->setYear($faker->year);
                $season->setDescription($faker->paragraphs(2, true));
                $season->setProgram($this->getReference('program_' . $i));

                $manager->persist($season);
                $this->addReference('program_' . $i . 'season_' . $j, $season);
            }
        }
        $manager->flush();
    }
    public function getDependencies() {
        return [
            ProgramFixtures::class,
        ];
    }
}