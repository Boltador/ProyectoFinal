<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Incidentes
 *
 * @ORM\Table(name="incidentes", indexes={@ORM\Index(name="fk_incidente_mat", columns={"id_mat"}), @ORM\Index(name="fk_incidente_per", columns={"id_periodo"}), @ORM\Index(name="fk_incidente_asignacion", columns={"id_asignacion"})})
 * @ORM\Entity
 */
class Incidentes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_incidente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIncidente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_incidente", type="date", nullable=false)
     */
    private $fechaIncidente;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=140, nullable=false)
     */
    private $observacion;

    /**
     * @var \Asignaciones
     *
     * @ORM\ManyToOne(targetEntity="Asignaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_asignacion", referencedColumnName="id_asignacion")
     * })
     */
    private $idAsignacion;

    /**
     * @var \Matriculas
     *
     * @ORM\ManyToOne(targetEntity="Matriculas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mat", referencedColumnName="id_mat")
     * })
     */
    private $idMat;

    /**
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodo", referencedColumnName="id_periodo")
     * })
     */
    private $idPeriodo;



    /**
     * Get idIncidente
     *
     * @return integer 
     */
    public function getIdIncidente()
    {
        return $this->idIncidente;
    }

    /**
     * Set fechaIncidente
     *
     * @param \DateTime $fechaIncidente
     * @return Incidentes
     */
    public function setFechaIncidente($fechaIncidente)
    {
        $this->fechaIncidente = $fechaIncidente;

        return $this;
    }

    /**
     * Get fechaIncidente
     *
     * @return \DateTime 
     */
    public function getFechaIncidente()
    {
        return $this->fechaIncidente;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Incidentes
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set idAsignacion
     *
     * @param \Adonai\UnicoBundle\Entity\Asignaciones $idAsignacion
     * @return Incidentes
     */
    public function setIdAsignacion(\Adonai\UnicoBundle\Entity\Asignaciones $idAsignacion = null)
    {
        $this->idAsignacion = $idAsignacion;

        return $this;
    }

    /**
     * Get idAsignacion
     *
     * @return \Adonai\UnicoBundle\Entity\Asignaciones 
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }

    /**
     * Set idMat
     *
     * @param \Adonai\UnicoBundle\Entity\Matriculas $idMat
     * @return Incidentes
     */
    public function setIdMat(\Adonai\UnicoBundle\Entity\Matriculas $idMat = null)
    {
        $this->idMat = $idMat;

        return $this;
    }

    /**
     * Get idMat
     *
     * @return \Adonai\UnicoBundle\Entity\Matriculas 
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * Set idPeriodo
     *
     * @param \Adonai\UnicoBundle\Entity\Periodos $idPeriodo
     * @return Incidentes
     */
    public function setIdPeriodo(\Adonai\UnicoBundle\Entity\Periodos $idPeriodo = null)
    {
        $this->idPeriodo = $idPeriodo;

        return $this;
    }

    /**
     * Get idPeriodo
     *
     * @return \Adonai\UnicoBundle\Entity\Periodos 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }
}
