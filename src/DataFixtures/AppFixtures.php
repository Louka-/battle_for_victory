<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new User;
        $pwdcrypted = $this->passwordEncoder->encodePassword($admin, '1234');
        $admin
            ->setEmail('admin@carte.fr')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($pwdcrypted);
        
        $manager->persist($admin);

        $user = new User;
        $pwdcrypted = $this->passwordEncoder->encodePassword($user, '1234');
        $user
            ->setEmail('user@carte.fr')
            ->setRoles(['ROLE_USER'])
            ->setPassword($pwdcrypted);
        
        $manager->persist($user);

        $manager->flush();
    }
}
