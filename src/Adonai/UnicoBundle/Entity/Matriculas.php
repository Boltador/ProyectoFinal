<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matriculas
 *
 * @ORM\Table(name="matriculas", indexes={@ORM\Index(name="fk_mat_est", columns={"id_est"}), @ORM\Index(name="fk_mat_grupo", columns={"id_grupo"}), @ORM\Index(name="fk_mat_alectivo", columns={"id_a_lectivo"})})
 * @ORM\Entity(repositoryClass="Adonai\UnicoBundle\Repository\MatriculasRepository")
 */
class Matriculas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_mat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMat;

    /**
     * @var \Estudiantes
     *
     * @ORM\ManyToOne(targetEntity="Estudiantes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_est", referencedColumnName="id_est")
     * })
     */
    private $estudiante;

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
     * Get idMat
     *
     * @return integer 
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * Set estudiante
     *
     * @param \Adonai\UnicoBundle\Entity\Estudiantes $estudiante
     * @return Matriculas
     */
    public function setEstudiante(\Adonai\UnicoBundle\Entity\Estudiantes $estudiante = null)
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    /**
     * Get estudiante
     *
     * @return \Adonai\UnicoBundle\Entity\Estudiantes 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /**
     * Set grupo
     *
     * @param \Adonai\UnicoBundle\Entity\Grupos $grupo
     * @return Matriculas
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
     * @return Matriculas
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

    public function getListaMatriculas($grupo){
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getEntityManager();
        $query = $em->createQuery("SELECT mt FROM AdonaiUnicoBundle:Matriculas mt WHERE mt.grupo = :grupo");
        $query->setParameter('grupo', $grupo);
        $lista_mats = $query->getResult();
        
        return $lista_mats;
    }

    public function getTotalMatriculasActual($lista_grupos){
        $em = $GLOBALS['kernel']->getContainer()->get('doctrine')->getEntityManager();
        $numero = 0;
        foreach($lista_grupos as $grupo){
            $lista_mats = $this->getListaMatriculas($grupo);
            $numero = $numero + count($lista_mats);
        }
        return $numero;
    }

    public function __toString()
    {
        return $this->getEstudiante()->getNomEst();
    }
}
