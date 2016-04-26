<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temas
 *
 * @ORM\Table(name="temas", indexes={@ORM\Index(name="fk_tema_periodo", columns={"id_periodo"}), @ORM\Index(name="fk_tema_asignacion", columns={"id_asignacion"})})
 * @ORM\Entity
 */
class Temas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tema", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTema;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tema", type="string", length=70, nullable=false)
     */
    private $nomTema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_in_tema", type="date", nullable=false)
     */
    private $fechaInTema;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin_tema", type="date", nullable=false)
     */
    private $fechaFinTema;


    /**
     * Get idTema
     *
     * @return integer 
     */
    public function getIdTema()
    {
        return $this->idTema;
    }

    /**
     * Set nomTema
     *
     * @param string $nomTema
     * @return Temas
     */
    public function setNomTema($nomTema)
    {
        $this->nomTema = $nomTema;

        return $this;
    }

    /**
     * Get nomTema
     *
     * @return string 
     */
    public function getNomTema()
    {
        return $this->nomTema;
    }

    /**
     * Set fechaInTema
     *
     * @param \DateTime $fechaInTema
     * @return Temas
     */
    public function setFechaInTema($fechaInTema)
    {
        $this->fechaInTema = $fechaInTema;

        return $this;
    }

    /**
     * Get fechaInTema
     *
     * @return \DateTime 
     */
    public function getFechaInTema()
    {
        return $this->fechaInTema;
    }

    /**
     * Set fechaFinTema
     *
     * @param \DateTime $fechaFinTema
     * @return Temas
     */
    public function setFechaFinTema($fechaFinTema)
    {
        $this->fechaFinTema = $fechaFinTema;

        return $this;
    }

    /**
     * Get fechaFinTema
     *
     * @return \DateTime 
     */
    public function getFechaFinTema()
    {
        return $this->fechaFinTema;
    }
}
