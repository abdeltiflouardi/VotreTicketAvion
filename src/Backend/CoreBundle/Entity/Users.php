<?php

namespace Backend\CoreBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface,
    Symfony\Component\Security\Core\Role\Role,
    Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users implements UserInterface, \Serializable {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        return array(new Role('ROLE_ADMIN'));
    }

    public function eraseCredentials() {
        return true;
    }

    /*
     * @return $salt
     */
    public function getSalt() {
        return mb_substr(md5($this->getUsername()), 3, 3);
    }

    /**
     * @return boolean
     */
    public function equals(UserInterface $user) {
        if ($this->getUsername() != $user->getUsername()) {
            return false;
        }

        return true;
    }

    /**
     * Serialize user
     * @return string
     */
    public function serialize() {
        return serialize(
                        array(
                            $this->getUsername()
                        )
        );
    }

    /**
     * Unserialize user
     */
    public function unserialize($serialized) {

        $arr = unserialize($serialized);
        $this->setUsername($arr[0]);
    }

}