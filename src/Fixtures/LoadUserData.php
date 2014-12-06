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
        $user->setEmail('admin@emptydocument.com');
        $user->setPassword('wqOlwzRAUF0cBE43flE0x/qlxLESCkFSw01fBXsSdTAmG35KpLtHbEWKXvRghFC8CbQ/30wLRM2qxkzTCEHOsA==');
        $user->setSalt('kmx2m130deokg84s4owg08wg0cckgoc');
        $user->setRoles('ROLE_USER,ROLE_ADMIN');
        $user->setName('admin');
        $user->setTimeCreated(1417202554);
        $user->setIsEnabled(1);
        $users[] = $user;

        $user = new User();
        $user->setEmail('edwin@emptydocument.com');
        $user->setPassword('wqOlwzRAUF0cBE43flE0x/qlxLESCkFSw01fBXsSdTAmG35KpLtHbEWKXvRghFC8CbQ/30wLRM2qxkzTCEHOsA==');
        $user->setSalt('kmx2m130deokg84s4owg08wg0cckgoc');
        $user->setRoles('ROLE_USER');
        $user->setName('edwin');
        $user->setTimeCreated(1417202554);
        $user->setIsEnabled(1);
        $users[] = $user;

        foreach ($users as $user) {
            $em->persist($user);
        }

        $em->flush();
    }
} 
