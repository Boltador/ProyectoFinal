<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas", indexes={@ORM\Index(name="fk_nota_mat", columns={"id_mat"}), @ORM\Index(name="fk_nota_per", columns={"id_periodo"}), @ORM\Index(name="fk_nota_asignacion", columns={"id_asignacion"}), @ORM\Index(name="fk_nota_competencia", columns={"id_comp"})})
 * @ORM\Entity
 */
class Notas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_nota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNota;

    /**
     * @var float
     *
     * @ORM\Column(name="nota", type="float", precision=10, scale=0, nullable=false)
     */
    private $nota;

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
     * @var \Competencias
     *
     * @ORM\ManyToOne(targetEntity="Competencias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comp", referencedColumnName="id_comp")
     * })
     */
    private $competencia;

    /**
     * @var \Matriculas
     *
     * @ORM\ManyToOne(targetEntity="Matriculas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_mat", referencedColumnName="id_mat")
     * })
     */
    private $matricula;

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
     * Get idNota
     *
     * @return integer 
     */
    public function getIdNota()
    {
        return $this->idNota;
    }

    /**
     * Set nota
     *
     * @param float $nota
     * @return Notas
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set asignacion
     *
     * @param \Adonai\UnicoBundle\Entity\Asignaciones $asignacion
     * @return Notas
     */
    public function setAsignacion(\Adonai\UnicoBundle\Entity\Asignaciones $asignacion = null)
    {
        $this->asignacion = $asignacion;

        return $this;
    }

    /**
     * Get asignacion
     *
     * @return \Adonai\UnicoBundle\Entity\Asignaciones 
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }

    /**
     * Set competencia
     *
     * @param \Adonai\UnicoBundle\Entity\Competencias $competencia
     * @return Notas
     */
    public function setCompetencia(\Adonai\UnicoBundle\Entity\Competencias $competencia = null)
    {
        $this->competencia = $competencia;

        return $this;
    }

    /**
     * Get competencia
     *
     * @return \Adonai\UnicoBundle\Entity\Competencias 
     */
    public function getCompetencia()
    {
        return $this->competencia;
    }

    /**
     * Set matricula
     *
     * @param \Adonai\UnicoBundle\Entity\Matriculas $matricula
     * @return Notas
     */
    public function setMatricula(\Adonai\UnicoBundle\Entity\Matriculas $matricula = null)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return \Adonai\UnicoBundle\Entity\Matriculas 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set periodo
     *
     * @param \Adonai\UnicoBundle\Entity\Periodos $periodo
     * @return Notas
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
