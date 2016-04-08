<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Adonai\UnicoBundle\Entity\ALectivos;
use Adonai\UnicoBundle\Entity\Grupos;
use Symfony\Component\Intl\Data\Util\ArrayAccessibleResourceBundle;

/**
 * Asignaciones
 *
 * @ORM\Table(name="asignaciones", indexes={@ORM\Index(name="fk_asig_doc", columns={"id_doc"}), @ORM\Index(name="fk_asig_asignacion", columns={"id_asig"}), @ORM\Index(name="fk_asig_grupo", columns={"id_grupo"}), @ORM\Index(name="fk_asig_alectivo", columns={"id_a_lectivo"})})
 * @ORM\Entity(repositoryClass="Adonai\UnicoBundle\Repository\AsignacionesRepository")
 */
class Asignaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asignacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsignacion;

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
     * @var \Docentes
     *
     * @ORM\ManyToOne(targetEntity="Docentes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_doc", referencedColumnName="id_doc")
     * })
     */
    private $docente;

    /**
     * @var \Grupos
     *
     * @ORM\ManyToOne(targetEntity="Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id_grupo")
     * })
     */
    private $grupo;

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
     * Get idAsignacion
     *
     * @return integer
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }


    /**
     * Set asignatura
     *
     * @param \Adonai\UnicoBundle\Entity\Asignaturas $asignatura
     * @return Asignaciones
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
     * Set docente
     *
     * @param \Adonai\UnicoBundle\Entity\Docentes $docente
     * @return Asignaciones
     */
    public function setDocente(\Adonai\UnicoBundle\Entity\Docentes $docente = null)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return \Adonai\UnicoBundle\Entity\Docentes
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Set grupo
     *
     * @param \Adonai\UnicoBundle\Entity\Grupos $grupo
     * @return Asignaciones
     */
    public function setGrupo(\Adonai\UnicoBundle\Entity\Grupos $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Adonai\UnicoBundle\Entity\Grupos
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set a_lectivo
     *
     * @param \Adonai\UnicoBundle\Entity\ALectivos $aLectivo
     * @return Asignaciones
     */
    public function setALectivo(\Adonai\UnicoBundle\Entity\ALectivos $aLectivo = null)
    {
        $this->a_lectivo = $aLectivo;

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


    public function getListaAsignacionesActual($docente, $em)
    {
        $al_actual = new ALectivos();                       
        $al_actual = $al_actual->getAñoLectivoActual($em);
        $query = $em->createQuery("SELECT asig FROM AdonaiUnicoBundle:Asignaciones asig WHERE asig.docente = :docente AND asig.a_lectivo = :al_actual");
        $query->setParameter('docente', $docente);
        $query->setParameter('al_actual', $al_actual);
        $lista_asignaciones = $query->getResult();
        return $lista_asignaciones;
    }



// En estudio..
    public function getListaAsignacionesPrueba($docente, $em)
    {
        $grupo = new Grupos();
        $lista_grupos = $grupo->getListaGruposActual($em);
        $lista_asignaciones = array();

        for ($i = 0; $i < count($lista_grupos); $i++) {
            $gr = $lista_grupos[$i];
            $query = $em->createQuery("SELECT asig FROM AdonaiUnicoBundle:Asignaciones asig WHERE asig.docente = :docente AND asig.grupo = :gr");
            $query->setParameter('docente', $docente);
            $query->setParameter('gr', $gr);
            $asignacion = $query->getResult();

            if ($asignacion != null) {
                $lista_asignaciones[] = $asignacion;
            }
        }
        return $lista_asignaciones;
    }
}
