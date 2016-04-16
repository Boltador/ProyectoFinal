<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competencias
 *
 * @ORM\Table(name="competencias", indexes={@ORM\Index(name="fk_comp_asignatura", columns={"id_asig"}), @ORM\Index(name="fk_comp_grado", columns={"id_grado"})})
 * @ORM\Entity
 */
class Competencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComp;

    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="string", length=200, nullable=false)
     */
    private $contenido;

    /**
     * @var \Asignaturas
     *
     * @ORM\ManyToOne(targetEntity="Asignaturas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_asig", referencedColumnName="id_asig")
     * })
     */
    private $asignatura;

    /**
     * @var \Grados
     *
     * @ORM\ManyToOne(targetEntity="Grados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grado", referencedColumnName="id_grado")
     * })
     */
    private $grado;



    /**
     * Get idComp
     *
     * @return integer 
     */
    public function getIdComp()
    {
        return $this->idComp;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     * @return Competencias
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set asignatura
     *
     * @param \Adonai\UnicoBundle\Entity\Asignaturas $asignatura
     * @return Competencias
     */
    public function setAsignatura(\Adonai\UnicoBundle\Entity\Asignaturas $asignatura = null)
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    /**
     * Get asignatura
     *
     * @return \Adonai\UnicoBundle\Entity\Asignaturas 
     */
    public function getAsignatura()
    {
        return $this->asignatura;
    }

    /**
     * Set grado
     *
     * @param \Adonai\UnicoBundle\Entity\Grados $grado
     * @return Competencias
     */
    public function setGrado(\Adonai\UnicoBundle\Entity\Grados $grado = null)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return \Adonai\UnicoBundle\Entity\Grados 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    public function __toString()
    {
        return $this->getIdComp().' - '.$this->getContenido();
    }

    public function getCompetenciasGradoAsig($asignatura, $grado, $em){
        $query = $em->createQuery("SELECT comp FROM AdonaiUnicoBundle:Competencias comp WHERE comp.grado = :grado AND comp.asignatura = :asignatura");
        $query->setParameter('grado', $grado);
        $query->setParameter('asignatura', $asignatura);
        $lista_comp = $query->getResult();

        //$lista_comp = array();

        /*foreach($resultados as $competencia){
            $comp = array("id" => $competencia->getIdComp(), 
                "asignatura" => $competencia->getAsignatura()->getNomAsig(),
                "grado" => $competencia->getGrado()->getGrado(), 
                "contenido" => (string) $competencia->getContenido());
            $lista_comp[] = $comp;
        }*/
        return $lista_comp;
    }
}
