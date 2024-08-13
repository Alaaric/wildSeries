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
//        $episode1 = new Episode();
//        $episode1->setTitle('Episode 1');
//        $episode1->setNumber(1);
//        $episode1->setSynopsis('trop long la flemme');
//        $episode1->setSeason($this->getReference('season_1_titre1'));
//        $manager->persist($episode1);
//        $episode2 = new Episode();
//        $episode2->setTitle('Episode 2');
//        $episode2->setNumber(2);
//        $episode2->setSynopsis('trop long la flemme');
//        $episode2->setSeason($this->getReference('season_1_titre1'));
//        $manager->persist($episode2);
//        $episode3 = new Episode();
//        $episode3->setTitle('Episode 3');
//        $episode3->setNumber(3);
//        $episode3->setSynopsis('trop long la flemme');
//        $episode3->setSeason($this->getReference('season_1_titre1'));
//        $manager->persist($episode3);
        $manager->flush();
    }
    public function getDependencies() {
        return [
            SeasonFixtures::class,
        ];
    }
}