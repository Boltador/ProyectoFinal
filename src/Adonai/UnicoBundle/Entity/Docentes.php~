<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docentes
 *
 * @ORM\Table(name="docentes", uniqueConstraints={@ORM\UniqueConstraint(name="nuip", columns={"nuip"}), @ORM\UniqueConstraint(name="usuario", columns={"id_usuario"})}, indexes={@ORM\Index(name="fk_docente_usuario", columns={"id_usuario"})})
 * @ORM\Entity(repositoryClass="Adonai\UnicoBundle\Repository\DocentesRepository")
 */
class Docentes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="nuip", type="integer", nullable=false)
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_doc", type="string", length=60, nullable=false)
     */
    private $nomDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="dir", type="string", length=20, nullable=false)
     */
    private $dir;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="movil", type="string", length=20, nullable=false)
     */
    private $movil;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="Adonai\UnicoBundle\Entity\Usuarios")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
    */
    private $usuario;

    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set nuip
     *
     * @param integer $nuip
     * @return Docentes
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
     * Set nomDoc
     *
     * @param string $nomDoc
     * @return Docentes
     */
    public function setNomDoc($nomDoc)
    {
        $this->nomDoc = $nomDoc;

        return $this;
    }

    /**
     * Get nomDoc
     *
     * @return string 
     */
    public function getNomDoc()
    {
        return $this->nomDoc;
    }

    /**
     * Set dir
     *
     * @param string $dir
     * @return Docentes
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
     * Set tel
     *
     * @param string $tel
     * @return Docentes
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
     * Set movil
     *
     * @param string $movil
     * @return Docentes
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Docentes
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

    /**
     * Set usuario
     *
     * @param \Adonai\UnicoBundle\Entity\Usuarios $usuario
     * @return Docentes
     */
    public function setUsuario(\Adonai\UnicoBundle\Entity\Usuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Adonai\UnicoBundle\Entity\Usuarios 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
