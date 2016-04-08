<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acudientes
 *
 * @ORM\Table(name="acudientes", uniqueConstraints={@ORM\UniqueConstraint(name="nuip", columns={"nuip"})})
 * @ORM\Entity
 */
class Acudientes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_acu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAcu;

    /**
     * @var integer
     *
     * @ORM\Column(name="nuip", type="integer", nullable=false)
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_acu", type="string", length=60, nullable=false)
     */
    private $nomAcu;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=70, nullable=false)
     */
    private $email;



    /**
     * Get idAcu
     *
     * @return integer 
     */
    public function getIdAcu()
    {
        return $this->idAcu;
    }

    /**
     * Set nuip
     *
     * @param integer $nuip
     * @return Acudientes
     */
    public function setNuip($nuip)
    {
        $this->nuip = $nuip;

        return $this;
    }

    /**
     * Get nuip
     *
     * @return integer 
     */
    public function getNuip()
    {
        return $this->nuip;
    }

    /**
     * Set nomAcu
     *
     * @param string $nomAcu
     * @return Acudientes
     */
    public function setNomAcu($nomAcu)
    {
        $this->nomAcu = $nomAcu;

        return $this;
    }

    /**
     * Get nomAcu
     *
     * @return string 
     */
    public function getNomAcu()
    {
        return $this->nomAcu;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Acudientes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
