<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planeadores
 *
 * @ORM\Table(name="planeadores", indexes={@ORM\Index(name="fk_planeador_periodo", columns={"id_periodo"}), @ORM\Index(name="fk_planeador_asignacion", columns={"id_asignacion"})})
 * @ORM\Entity
 */
class Planeadores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_plan", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlan;

    /**
     * @var \Asignaciones
     *
     * @ORM\ManyToOne(targetEntity="Asignaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_asignacion", referencedColumnName="id_asignacion")
     * })
     */
    private $asignacion;

    /**
     * @var \Periodos
     *
     * @ORM\ManyToOne(targetEntity="Periodos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodo", referencedColumnName="id_periodo")
     * })
     */
    private $periodo;



    /**
     * Get idPlan
     *
     * @return integer 
     */
    public function getIdPlan()
    {
        return $this->idPlan;
    }

    /**
     * Set Asignacion
     *
     * @param \Adonai\UnicoBundle\Entity\Asignaciones $asignacion
     * @return Planeadores
     */
    public function setAsignacion(\Adonai\UnicoBundle\Entity\Asignaciones $asignacion = null)
    {
        $this->asignacion = $asignacion;

        return $this;
    }

    /**
     * Get Asignacion
     *
     * @return \Adonai\UnicoBundle\Entity\Asignaciones 
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }

    /**
     * Set periodo
     *
     * @param \Adonai\UnicoBundle\Entity\Periodos $periodo
     * @return Planeadores
     */
    public function setPeriodo(\Adonai\UnicoBundle\Entity\Periodos $periodo = null)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return \Adonai\UnicoBundle\Entity\Periodos 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }
}
