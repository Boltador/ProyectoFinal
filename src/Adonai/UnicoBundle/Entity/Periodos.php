<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Adonai\UnicoBundle\Entity\ALectivos;

/**
 * Periodos
 *
 * @ORM\Table(name="periodos", uniqueConstraints={@ORM\UniqueConstraint(name="fecha_in_per", columns={"fecha_in_per"})}, indexes={@ORM\Index(name="fk_periodos_lec", columns={"id_a_lectivo"})})
 * @ORM\Entity
 */
class Periodos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_periodo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_in_per", type="string", nullable=false)
     */
    private $fechaInPer;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_fin_per", type="string", nullable=false)
     */
    private $fechaFinPer;


    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var \ALectivos
     *
     * @ORM\ManyToOne(targetEntity="ALectivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_a_lectivo", referencedColumnName="id_a_lectivo")
     * })
     */
    private $a_lectivo;



    /**
     * Get idPeriodo
     *
     * @return integer 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * Set fechaInPer
     *
     * @param \DateTime $fechaInPer
     * @return Periodos
     */
    public function setFechaInPer($fechaInPer)
    {
        if(gettype($fechaInPer) != 'string'){
            $this->fechaInPer = $fechaInPer;
            return $this;
        } else {
            $this->fechaInPer = new \DateTime($fechaInPer);
            return $this;
        }  
    }

    /**
     * Get fechaInPer
     *
     * @return string
     */
    public function getFechaInPer()
    {
        return $this->fechaInPer;
    }

    /**
     * Get fechaInPerDate
     *
     * @return \DateTime
     */
    public function getFechaInPerDate()
    {
        return new \DateTime($this->fechaInPer);
    }

    /**
     * Set fechaFinPer
     *
     * @param \DateTime $fechaFinPer
     * @return Periodos
     */
    public function setFechaFinPer($fechaFinPer)
    {
        if(gettype($fechaFinPer) != 'string'){
            $this->fechaFinPer = $fechaFinPer;
            return $this;
        } else {
            $this->fechaFinPer = new \DateTime($fechaFinPer);
            return $this;
        }  
    }

    /**
     * Get fechaFinPer
     *
     * @return string
     */
    public function getFechaFinPer()
    {
        return $this->fechaFinPer;
    }

    /**
     * Get fechaFinPerDate
     *
     * @return \DateTime
     */
    public function getFechaFinPerDate()
    {
        return new \DateTime($this->fechaFinPer);
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Periodos
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set a_lectivo
     *
     * @param \Adonai\UnicoBundle\Entity\ALectivos $a_lectivo
     * @return Periodos
     */
    public function setALectivo(\Adonai\UnicoBundle\Entity\ALectivos $a_lectivo = null)
    {
        $this->a_lectivo = $a_lectivo;

        return $this;
    }

    /**
     * Get a_lectivo
     *
     * @return \Adonai\UnicoBundle\Entity\ALectivos 
     */
    public function getALectivo()
    {
        return $this->a_lectivo;
    }


    /**
     * Get PeriodoActual
     *
     * @return \Adonai\UnicoBundle\Entity\Periodos
     */
    public function getPeriodoActual(){
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getManager();
        $query = $em->createQuery("SELECT p FROM AdonaiUnicoBundle:Periodos p WHERE :fecha >= p.fechaInPer AND :fecha <= p.fechaFinPer");
        $query->setParameter('fecha', date_format(new \DateTime('now'), 'Y-m-d'));
        $periodo = $query->getSingleResult();
        return $periodo;
    }


    public function getPeriodosAl($al_actual){
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getManager();
        $query = $em->createQuery("SELECT p FROM AdonaiUnicoBundle:Periodos p WHERE p.a_lectivo = :a_lectivo");
        $query->setParameter('a_lectivo', $al_actual);
        $periodos = $query->getResult();
        return $periodos;
    }

    public function __toString()
    {
        $numero = $this->getNumero();
        return (string)$numero;
    }
}
