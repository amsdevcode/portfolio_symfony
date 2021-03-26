<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\About;
use App\Entity\Skill;
use App\Entity\Projet;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        /*
            $projet = new Projet();
            $projet->setName('Ce site : Symfony 5');
            $projet->setDescription('Site vitrine - portfolio avec back-office et outils entièrement créés par mes soins');
            $projet->setImg1('projet1.png');
            $manager->persist($projet);

            $faker = Faker\Factory::create();

            for ($i = 1; $i <= 10; $i++) {
                $projet = new Projet();
                $projet->setName('Projet de ' . $faker->name());
                $projet->setDescription($faker->text(255));
                $projet->setImg1('projet' . $i . '.png');
                $manager->persist($projet);
            }

            $skill = new Skill();
            $skill->setCategory('Technologies');
            $skill->setLogo('logo-html.png');
            $skill->setTitle('HTML');
            $manager->persist($skill);

            $about = new About();
            $about->setTitle('À propos');
            $about->setDescription('À propos de moi');
            $manager->persist($about);
        */

        $manager->flush();
    }
}
