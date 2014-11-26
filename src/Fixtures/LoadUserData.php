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
        $user->setPassword('5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg==');
        $user->setRoles('ROLE_ADMIN');
        $users[] = $user;

        $user = new User();
        $user->setUsername('edwin');
        $user->setPassword('5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg==');
        $user->setRoles('ROLE_USER');
        $users[] = $user;

        foreach ($users as $user) {
            $em->persist($user);
        }

        $em->flush();
    }
} 
