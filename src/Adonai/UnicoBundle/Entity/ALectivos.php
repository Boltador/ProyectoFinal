<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ALectivos
 *
 * @ORM\Table(name="a_lectivos", uniqueConstraints={@ORM\UniqueConstraint(name="fecha_inicio", columns={"fecha_inicio"})})
 * @ORM\Entity
 */
class ALectivos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_a_lectivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idALectivo;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_inicio", type="string", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_final", type="string", nullable=false)
     */
    private $fechaFinal;



    /**
     * Get idALectivo
     *
     * @return integer 
     */
    public function getIdALectivo()
    {
        return $this->idALectivo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return ALectivos
     */
    public function setfechaInicio($fechaInicio) {
        if(gettype($fechaInicio) != 'string'){
            $this->fechaInicio = $fechaInicio;
            return $this;
        } else {
            $this->fechaInicio = new \DateTime($fechaInicio);
            return $this;
        }
    }


    /**
     * Get fechaInicio
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Get fechaInicioDate
     *
     * @return \DateTime
     */
    public function getFechaInicioDate()
    {
        return new \DateTime($this->fechaInicio);
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return ALectivos
     */
    public function setfechaFinal($fechaFinal) {
        if(gettype($fechaFinal) != 'string'){
            $this->fechaFinal = $fechaFinal;
            return $this;
        } else {
            $this->fechaFinal = new \DateTime($fechaFinal);
            return $this;
        }   
    }

    /**
     * Get fechaFinal
     *
     * @return string
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }


    /**
     * Get fechaFinalDate
     *
     * @return \DateTime
     */
    public function getFechaFinalDate()
    {
        return new \DateTime($this->fechaFinal);
    }


    /**
     * Get AñoLectivo
     *
     * @return \Adonai\UnicoBundle\Entity\ALectivos
     */
    public function getAñoLectivoActual()
    {
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getManager();
        $query = $em->createQuery("SELECT al FROM AdonaiUnicoBundle:ALectivos al WHERE :fecha >= al.fechaInicio AND :fecha <= al.fechaFinal");
        $query->setParameter('fecha', date_format(new \DateTime('now'), 'Y-m-d'));
        $año_lectivo = $query->getSingleResult();
        return $año_lectivo;
    }
}
