<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public const ARTICLE = "article";

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
            $article = new Article();
            $article->setTitle($faker->sentence(5, true));
            $article->setSubtitle($faker->sentence(10, true));
            $article->setCreatedAt($faker->dateTime);
            $article->setAuthor($faker->name);
            $article->setBody($faker->text(200));
            $article->setImage($faker->imageUrl(320,240,null, true, null, null ));
            $manager->persist($article);


        $manager->flush();
        $this->addReference(self::ARTICLE, $article);
    }
}
