<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoNotaDiagnostico
 *
 * @ORM\Table(name="ctl_tipo_nota_diagnostico")
 * @ORM\Entity
 */
class CtlTipoNotaDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_nota_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo", type="string", nullable=false)
     */
    private $nombreTipo;



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
     * @return CtlTipoNotaDiagnostico
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
}
