<?php

namespace Kwetal\Silex\Provider;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManager;

class UserProvider implements UserProviderInterface
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function loadUserByUsername($username)
    {
        $repository = $this->em->getRepository('Kwetal\Silex\Entity\User');
        $users = $repository->findBy(['username' => strtolower($username)]);

        if (sizeof($users) === 0) {
            throw new UsernameNotFoundException(sprintf('Username %s does not exist.', $username));
        }

        $u = new User(
            $users[0]->getUserName(),
            $users[0]->getPassword(),
            explode(',', $users[0]->getRoles())
        );

        return $u;
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
    }

    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
} 
