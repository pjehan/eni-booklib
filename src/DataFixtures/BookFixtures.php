<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $book1 = new Book();
        $book1->setTitle('Astérix et Cleopatre');
        $book1->setImage('aec.jpg');
        $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle('Harry Potter à l\'école des sorciers');
        $book2->setImage('hpalds.jpg');
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle('Harry Potter et la coupe de feu');
        $book3->setImage('hpelcdf.jpg');
        $manager->persist($book3);

        $book4 = new Book();
        $book4->setTitle('Le tour du monde ne 80 jours');
        $book4->setImage('ltdmeqj.jpg');
        $manager->persist($book4);

        $book5 = new Book();
        $book5->setTitle('Madame Bovary');
        $book5->setImage('mb.jpg');
        $manager->persist($book5);

        $book6 = new Book();
        $book6->setTitle('Vingt mille lieux sous les mers');
        $book6->setImage('vmlslm.jpg');
        $manager->persist($book6);

        $manager->flush();
    }
}
