<?php

namespace App\DataFixtures;



use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Comment;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CommentFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $comment = new Comment();
            $comment->setName($faker->name);
            $comment->setCreatedAt($faker->dateTime);
            $comment->setComment($faker->sentence(10, true));
            $comment->setEmail($faker->email);
            $comment->setArticle($this->getReference(AppFixtures::ARTICLE));

            $manager->persist($comment);
        }

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        return array(
            AppFixtures::class,
        );
    }
}
