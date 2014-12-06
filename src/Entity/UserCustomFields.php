<?php

namespace Kwetal\Silex\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserCustomFields
 *
 * @ORM\Table(name="user_custom_fields", uniqueConstraints={@ORM\UniqueConstraint(name="unique_user_attrb", columns={"user_id", "attribute"})})
 * @ORM\Entity
 */
class UserCustomFields
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
     * @var integer $userID
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userID;

    /**
     * @var string $attribute
     *
     * @ORM\Column(name="attribute", type="string", length=50, nullable=false, options={"default"=""})
     */
    private $attribute;

    /**
     * @var string $value
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true, options={"default"=null})
     */
    private $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param int $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
} 
