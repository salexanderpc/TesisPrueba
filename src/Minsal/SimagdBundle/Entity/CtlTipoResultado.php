<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoResultado
 *
 * @ORM\Table(name="ctl_tipo_resultado")
 * @ORM\Entity
 */
class CtlTipoResultado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_resultado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo", type="string", length=35, nullable=false)
     */
    private $nombreTipo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="indeterminado", type="boolean", nullable=true)
     */
    private $indeterminado = false;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreTipo
     *
     * @param string $nombreTipo
     * @return CtlTipoResultado
     */
    public function setNombreTipo($nombreTipo)
    {
        $this->nombreTipo = $nombreTipo;

        return $this;
    }

    /**
     * Get nombreTipo
     *
     * @return string 
     */
    public function getNombreTipo()
    {
        return $this->nombreTipo;
    }

    /**
     * Set indeterminado
     *
     * @param boolean $indeterminado
     * @return CtlTipoResultado
     */
    public function setIndeterminado($indeterminado)
    {
        $this->indeterminado = $indeterminado;

        return $this;
    }

    /**
     * Get indeterminado
     *
     * @return boolean 
     */
    public function getIndeterminado()
    {
        return $this->indeterminado;
    }
}
