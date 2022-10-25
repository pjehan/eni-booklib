<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('Astérix et Cleopatre');
        $book1->setImage('aec.jpg');
        $book1->setAuthor($this->getReference('author-goscinny'));
        $book1->addCategory($this->getReference('cat-bd'));
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('Harry Potter à l\'école des sorciers');
        $book2->setImage('hpalds.jpg');
        $book2->setAuthor($this->getReference('author-rownling'));
        $book2->addCategory($this->getReference('cat-fantastique'));
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Harry Potter et la coupe de feu');
        $book3->setImage('hpelcdf.jpg');
        $book3->setAuthor($this->getReference('author-rownling'));
        $book2->addCategory($this->getReference('cat-fantastique'));
        $manager->persist($book3);

        $book4 = new Book();
        $book4->setTitle('Le tour du monde en 80 jours');
        $book4->setImage('ltdmeqj.jpg');
        $book4->setAuthor($this->getReference('author-verne'));
        $book4->addCategory($this->getReference('cat-roman'));
        $book4->addCategory($this->getReference('cat-fantastique'));
        $manager->persist($book4);

        $book5 = new Book();
        $book5->setTitle('Madame Bovary');
        $book5->setImage('mb.jpg');
        $book5->setAuthor($this->getReference('author-flaubert'));
        $book5->addCategory($this->getReference('cat-roman'));
        $manager->persist($book5);

        $book6 = new Book();
        $book6->setTitle('Vingt mille lieux sous les mers');
        $book6->setImage('vmlslm.jpg');
        $book6->setAuthor($this->getReference('author-verne'));
        $book6->addCategory($this->getReference('cat-roman'));
        $book6->addCategory($this->getReference('cat-fantastique'));
        $manager->persist($book6);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class, AuthorFixtures::class];
    }
}
