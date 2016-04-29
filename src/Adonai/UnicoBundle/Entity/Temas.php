<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temas
 *
 * @ORM\Table(name="temas", indexes={@ORM\Index(name="fk_tema_planeador", columns={"id_plan"})})
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
     * @var string
     *
     * @ORM\Column(name="fecha_in_tema", type="string", nullable=false)
     */
    private $fechaInTema;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_fin_tema", type="string", nullable=false)
     */
    private $fechaFinTema;

    /**
     * @var \Planeadores
     *
     * @ORM\ManyToOne(targetEntity="Planeadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plan", referencedColumnName="id_plan")
     * })
     */
    private $planeador;

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
     * @param string $fechaInTema
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
     * @return string 
     */
    public function getFechaInTema()
    {
        return $this->fechaInTema;
    }

    /**
     * Set fechaFinTema
     *
     * @param string $fechaFinTema
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
     * @return string 
     */
    public function getFechaFinTema()
    {
        return $this->fechaFinTema;
    }

    /**
     * Set planeador
     *
     * @param \Adonai\UnicoBundle\Entity\Planeadores $planeador
     * @return Temas
     */
    public function setPlaneador(\Adonai\UnicoBundle\Entity\Planeadores $planeador = null)
    {
        $this->planeador = $planeador;

        return $this;
    }

    /**
     * Get planeador
     *
     * @return \Adonai\UnicoBundle\Entity\Planeadores 
     */
    public function getPlaneador()
    {
        return $this->planeador;
    }
}
