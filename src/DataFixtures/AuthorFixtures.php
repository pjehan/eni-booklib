<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jkRowling = new Author();
        $jkRowling->setFirstName('Joanne Kathleen');
        $jkRowling->setLastName('Rowling');
        $manager->persist($jkRowling);
        $this->addReference('author-rownling', $jkRowling);

        $goscinny = new Author();
        $goscinny->setFirstName('René');
        $goscinny->setLastName('Goscinny');
        $manager->persist($goscinny);
        $this->addReference('author-goscinny', $goscinny);

        $jVerne = new Author();
        $jVerne->setFirstName('Jules');
        $jVerne->setLastName('Verne');
        $manager->persist($jVerne);
        $this->addReference('author-verne', $jVerne);

        $gFlaubert = new Author();
        $gFlaubert->setFirstName('Gustave');
        $gFlaubert->setLastName('Flaubert');
        $manager->persist($gFlaubert);
        $this->addReference('author-flaubert', $gFlaubert);

        $manager->flush();
    }
}
