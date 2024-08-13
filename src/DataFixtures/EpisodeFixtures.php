<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    const EPISODES = [
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 1 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 1 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '3',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 1 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 1 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 1 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '3',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '4',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 2 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 3 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 3 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 3 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 4 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 4 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 5 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 5 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 5 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 5 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 6 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 6 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 6 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 7 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 7 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 8 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 8 saison 2',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 9 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 10 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 11 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 12 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 13 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 14 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 15 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '1',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 16 saison 1',
        ],
        [
            'title' => 'la flemme',
            'number' => '2',
            'synopsis' => 'la flemme mais vraiment',
            'season' => 'Titre 16 saison 1',
        ],
    ];

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager) : void
    {
        foreach (self::EPISODES as $episodeDefinition) {
            $episode = new Episode();
            $episode->setTitle($episodeDefinition['title']);
            $episode->setNumber($episodeDefinition['number']);
            $episode->setSynopsis($episodeDefinition['synopsis']);
            $episode->setSeason($this->getReference($episodeDefinition['season']));
            $manager->persist($episode);
        }
        $manager->flush();
    }
    public function getDependencies() {
        return [
            SeasonFixtures::class,
        ];
    }
}