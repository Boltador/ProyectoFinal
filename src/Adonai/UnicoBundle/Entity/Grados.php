<?php

namespace Adonai\UnicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grados
 *
 * @ORM\Table(name="grados", uniqueConstraints={@ORM\UniqueConstraint(name="grado", columns={"grado"})})
 * @ORM\Entity
 */
class Grados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_grado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrado;

    /**
     * @var string
     *
     * @ORM\Column(name="grado", type="string", length=2, nullable=false)
     */
    private $grado;



    /**
     * Get idGrado
     *
     * @return integer 
     */
    public function getIdGrado()
    {
        return $this->idGrado;
    }

    /**
     * Set grado
     *
     * @param string $grado
     * @return Grados
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    public function __toString() {
        return $this->grado;
    }

}
