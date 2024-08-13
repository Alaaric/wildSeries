<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture
{
    const PROGRAMS = [
        [
            'title' => 'Titre 1',
            'synopsis' => 'palu menfou',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 2',
            'synopsis' => 'some texte',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'Titre 3',
            'synopsis' => 'palu menfou',
            'category' => 'category_Aventure',
        ],
        [
            'title' => 'Titre 4',
            'synopsis' => 'some texte',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'Titre 5',
            'synopsis' => 'palu menfou',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 6',
            'synopsis' => 'some texte',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'Titre 7',
            'synopsis' => 'palu menfou',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 8',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 9',
            'synopsis' => 'palu menfou',
            'category' => 'category_Aventure',
        ],
        [
            'title' => 'Titre 10',
            'synopsis' => 'some texte',
            'category' => 'category_Fantastique',
        ],
        [
            'title' => 'Titre 11',
            'synopsis' => 'palu menfou',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 12',
            'synopsis' => 'some texte',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'Titre 13',
            'synopsis' => 'palu menfou.',
            'category' => 'category_Aventure',
        ],
        [
            'title' => 'Titre 14',
            'synopsis' => 'some texte',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Titre 15',
            'synopsis' => 'palu menfou',
            'category' => 'category_Fantastique',
        ],
        [
            'title' => 'Titre 16',
            'synopsis' => 'some texte',
            'category' => 'category_Animation',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PROGRAMS as $programDefinition) {
            $program = new Program();
            $program->setTitle($programDefinition['title']);
            $program->setSynopsis($programDefinition['synopsis']);
            $program->setCategory($this->getReference($programDefinition['category']));
            $this->addReference($programDefinition['title'], $program);
            $manager->persist($program);
        }

        $manager->flush();
    }
    public function getDependencies() {
        return [
            CategoryFixtures::class,
        ];
    }
}
