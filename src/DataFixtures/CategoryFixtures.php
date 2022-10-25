<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categoryNames = [
            'roman' => 'Roman',
            'sf' => 'Science-Fiction',
            'policier' => 'Policier',
            'bd' => 'Bande Dessinée',
            'fantastique' => 'Fantastique',
        ];

        foreach ($categoryNames as $key => $name) {
            $category = new Category();
            $category->setName($name);

            $manager->persist($category);
            $this->addReference('cat-' . $key, $category);
        }

        $manager->flush();
    }
}
