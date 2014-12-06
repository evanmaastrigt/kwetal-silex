<?php

namespace Kwetal\Silex\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="unique_email", columns={"email"}),
 *                                             @ORM\UniqueConstraint(name="username", columns={"username"})})
 * @ORM\Entity
 */
class User
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"default"=null})
     */
    private $password;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $salt;

    /**
     * @var string $roles
     *
     * @ORM\Column(name="roles", type="string", length=255, nullable=false, options={"default"=""})
     */
    private $roles;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"default"=""})
     */
    private $name;

    /**
     * @var integer $timeCreated
     *
     * @ORM\Column(name="time_created", type="integer", nullable=false, options={"default"=1, "unsigned"=true})
     */
    private $timeCreated;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", nullable=true, type="string", length=100)
     */
    private $username;

    /**
     * @var integer $isEnabled
     *
     * @ORM\Column(name="isEnabled", type="boolean", nullable=false, options={"default"=1})
     */
    private $isEnabled;

    /**
     * @var string $confirmationToken
     *
     * @ORM\Column(name="confirmationToken", nullable=true, type="string", length=100)
     */
    private $confirmationToken;

    /**
     * @var integer $timePasswordResetRequested
     *
     * @ORM\Column(name="timePasswordResetRequested", nullable=true, type="integer", options={"unsigned"=true})
     */
    private $timePasswordResetRequested;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param string $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTimeCreated()
    {
        return $this->timeCreated;
    }

    /**
     * @param int $timeCreated
     */
    public function setTimeCreated($timeCreated)
    {
        $this->timeCreated = $timeCreated;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return int
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param int $isEnabled
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    /**
     * @return string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @param string $confirmationToken
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * @return int
     */
    public function getTimePasswordResetRequested()
    {
        return $this->timePasswordResetRequested;
    }

    /**
     * @param int $timePasswordResetRequested
     */
    public function setTimePasswordResetRequested($timePasswordResetRequested)
    {
        $this->timePasswordResetRequested = $timePasswordResetRequested;
    }
}
