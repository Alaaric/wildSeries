<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    const SEASONS = [
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 1'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 2'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 3'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 4'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 5'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 6'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 7'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 8'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 9'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 10'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 11'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 12'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 13'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 14'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 15'
        ],
        [
            'number' => 1,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 16'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 1'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 2'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 3'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 4'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 5'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 6'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 7'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 8'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 9'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 10'
        ],
        [
            'number' => 2,
            'year' => 1995,
            'description' => "trop long. flemme.",
            'program' => 'Titre 11'
        ],
    ];

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASONS as $seasonDefinition) {
            $season = new Season();
            $season->setNumber($seasonDefinition['number']);
            $season->setYear($seasonDefinition['year']);
            $season->setDescription($seasonDefinition['description']);
            $season->setProgram($this->getReference($seasonDefinition['program']));
            $this->addReference($seasonDefinition['program'] . ' saison ' . $seasonDefinition['number'], $season);
            $manager->persist($season);
        }
        $manager->flush();
    }
    public function getDependencies() {
        return [
            ProgramFixtures::class,
        ];
    }
}