<?php

namespace App\DataFixtures;

use App\Factory\CategoryFactory;
use App\Factory\OfferFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const CATEGORIES_COUNT = 10;

    private const OFFERS_COUNT = 60;

    public function load(ObjectManager $manager): void
    {
        CategoryFactory::createMany(self::CATEGORIES_COUNT);

        OfferFactory::createMany(self::OFFERS_COUNT);

        $manager->flush();
    }
}
