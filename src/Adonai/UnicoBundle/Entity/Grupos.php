<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos", indexes={@ORM\Index(name="fk_grupos_director_grupo", columns={"id_doc"}), @ORM\Index(name="fk_grupos_grado", columns={"id_grado"}), @ORM\Index(name="fk_grupos_alectivo", columns={"id_a_lectivo"})})
 * @ORM\Entity
 */
class Grupos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="nomenclatura", type="string", length=2, nullable=false)
     */
    private $nomenclatura;

    /**
     * @var \ALectivos
     *
     * @ORM\ManyToOne(targetEntity="ALectivos")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id_a_lectivo", referencedColumnName="id_a_lectivo")
     * })
     */
    private $a_lectivo;

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
     * @var \Grados
     *
     * @ORM\ManyToOne(targetEntity="Grados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grado", referencedColumnName="id_grado")
     * })
     */
    private $grado;



    /**
     * Get idGrupo
     *
     * @return integer 
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }

    /**
     * Set nomenclatura
     *
     * @param string $nomenclatura
     * @return Grupos
     */
    public function setNomenclatura($nomenclatura)
    {
        $this->nomenclatura = $nomenclatura;

        return $this;
    }

    /**
     * Get nomenclatura
     *
     * @return string 
     */
    public function getNomenclatura()
    {
        return $this->nomenclatura;
    }

    /**
     * Set a_lectivo
     *
     * @param \Adonai\UnicoBundle\Entity\ALectivos $aLectivo
     * @return Grupos
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

    /**
     * Set docente
     *
     * @param \Adonai\UnicoBundle\Entity\Docentes $docente
     * @return Grupos
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
     * Set grado
     *
     * @param \Adonai\UnicoBundle\Entity\Grados $grado
     * @return Grupos
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


    public function getListaGruposActual($em)
    {
        $al_actual = new ALectivos();                       
        $al_actual = $al_actual->getAñoLectivoActual($em); 
        $query = $em->createQuery("SELECT gr FROM AdonaiUnicoBundle:Grupos gr WHERE gr.a_lectivo = :al_actual");
        $query->setParameter('al_actual', $al_actual);
        $lista_grupos = $query->getResult();
        return $lista_grupos;
    }

    public function comprobarDirectorDocente($docente, $em){
        $al_actual = new ALectivos();                       
        $al_actual = $al_actual->getAñoLectivoActual($em); 
        $query = $em->createQuery("SELECT gr FROM AdonaiUnicoBundle:Grupos gr WHERE gr.docente = :docente AND gr.a_lectivo = :al_actual");
        $query->setParameter('docente', $docente);
        $query->setParameter('al_actual', $al_actual);
        $grupo = $query->getSingleResult();
        if($grupo != null){
            return $grupo;
        } else {
            return null;
        }
    }


    public function __toString() {
        return $this->getGrado()->getGrado()."-".$this->nomenclatura;
    }
}
