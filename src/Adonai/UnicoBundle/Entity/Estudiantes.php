<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table(name="estudiantes", uniqueConstraints={@ORM\UniqueConstraint(name="nuip", columns={"nuip"})}, indexes={@ORM\Index(name="fk_acudiente", columns={"id_acu"})})
 * @ORM\Entity
 */
class Estudiantes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_est", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEst;

    /**
     * @var integer
     *
     * @ORM\Column(name="nuip", type="integer", nullable=false)
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_est", type="string", length=60, nullable=false)
     */
    private $nomEst;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=false)
     */
    private $fechaNac;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="string", length=20, nullable=false)
     */
    private $dir;

    /**
     * @var \Acudientes
     *
     * @ORM\ManyToOne(targetEntity="Acudientes")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_acu", referencedColumnName="id_acu")
     * })
     */
    private $acudiente;



    /**
     * Get idEst
     *
     * @return integer 
     */
    public function getIdEst()
    {
        return $this->idEst;
    }

    /**
     * Set nuip
     *
     * @param integer $nuip
     * @return Estudiantes
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
     * Set nomEst
     *
     * @param string $nomEst
     * @return Estudiantes
     */
    public function setNomEst($nomEst)
    {
        $this->nomEst = $nomEst;

        return $this;
    }

    /**
     * Get nomEst
     *
     * @return string 
     */
    public function getNomEst()
    {
        return $this->nomEst;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     * @return Estudiantes
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Estudiantes
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dir
     *
     * @param string $dir
     * @return Estudiantes
     */
    public function setDir($dir)
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * Get dir
     *
     * @return string 
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Set acudiente
     *
     * @param \Adonai\UnicoBundle\Entity\Acudientes $acudiente
     * @return Estudiantes
     */
    public function setAcudiente(\Adonai\UnicoBundle\Entity\Acudientes $acudiente = null)
    {
        $this->acudiente = $acudiente;

        return $this;
    }

    /**
     * Get acudiente
     *
     * @return \Adonai\UnicoBundle\Entity\Acudientes 
     */
    public function getAcudiente()
    {
        return $this->acudiente;
    }
}
