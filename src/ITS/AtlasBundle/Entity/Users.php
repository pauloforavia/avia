<?php

namespace ITS\AtlasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class Users implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", name="last_name", length=100, nullable=true)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", name="first_name", length=100, nullable=false)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", name="patronymic", length=100, nullable=true)
     */
    protected $patronymic;

    /**
     * @ORM\Column(type="string", name="phone", length=100, nullable=true)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", name="email", length=100, nullable=false)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", name="address", length=500, nullable=true)
     */
    protected $address;

    /**
     * @ORM\Column(type="string", name="password", length=500, nullable=false)
     */
    protected $password;

    /**
     * @ORM\Column(type="integer", name="role_id", nullable=false)
     */
    protected $role_id;

    /**
     * @ORM\Column(type="integer", name="user_photo_id", nullable=true)
     */
    protected $user_photo_id;

    /**
     * @ORM\Column(type="integer", name="patient_medic_relation_id", nullable=true)
     */

    protected $patient_medic_relation_id;

    /**
     * @ORM\Column(type="string", name="recovery_hash", nullable=true)
     */
    protected $recovery_hash;

    public function __construct()
    {
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        if($this->role_id < 3)
        {
            return array('ROLE_USER');
        }
        else
        {
            if($this->role_id != 19)
            {
                return array('ROLE_ADMIN');
            }
            else
            {
                return array('ROLE_LAB');
            }
        }
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
//        return md5(time());
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}