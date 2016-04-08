<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignaturas
 *
 * @ORM\Table(name="asignaturas")
 * @ORM\Entity
 */
class Asignaturas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_asig", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsig;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_asig", type="string", length=30, nullable=false)
     */
    private $nomAsig;



    /**
     * Get idAsig
     *
     * @return integer 
     */
    public function getIdAsig()
    {
        return $this->idAsig;
    }

    /**
     * Set nomAsig
     *
     * @param string $nomAsig
     * @return Asignaturas
     */
    public function setNomAsig($nomAsig)
    {
        $this->nomAsig = $nomAsig;

        return $this;
    }

    /**
     * Get nomAsig
     *
     * @return string 
     */
    public function getNomAsig()
    {
        return $this->nomAsig;
    }
}
