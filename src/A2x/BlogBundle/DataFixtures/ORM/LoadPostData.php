<?php

namespace A2x\BlogBundle\DataFixtures\ORM;

use A2x\BlogBundle\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPostData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post = new Post();
        $post->setTitle('Книга по JS');
        $post->setDescription('Учебник по JS');
        $post->setDescription('Lorem');

        $manager->persist($post);
        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}