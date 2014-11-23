<?php

namespace Kwetal\Silex\Fixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Kwetal\Silex\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $em)
    {
        $users = [];

        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('xyzP@123');
        $user->setRoles('ROLE_ADMIN,ROLE_USER');
        $users[] = $user;

        foreach ($users as $user) {
            $em->persist($user);
        }

        $em->flush();
    }
} 
