<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Roles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Adonai\UnicoBundle\Entity\RolesRepository")
 */
class Roles implements RoleInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Roles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Roles
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Usuarios", mappedBy="roles")
     */
     private $users;

     public function __construct()
     {
         $this->users = new ArrayCollection();
     }

    /**
     * Add users
     *
     * @param \Adonai\UnicoBundle\Entity\Usuarios $users
     * @return Roles
     */
    public function addUser(\Adonai\UnicoBundle\Entity\Usuarios $users)
    {
        $this->users[] = $users;
        return $this;
    }

    /**
     * Remove users
     *
     * @param \Adonai\UnicoBundle\Entity\Usuarios $users
     */
    public function removeUser(\Adonai\UnicoBundle\Entity\Usuarios $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
