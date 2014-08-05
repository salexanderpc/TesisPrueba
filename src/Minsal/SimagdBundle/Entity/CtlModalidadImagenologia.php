<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlModalidadImagenologia
 *
 * @ORM\Table(name="ctl_modalidad_imagenologia")
 * @ORM\Entity
 */
class CtlModalidadImagenologia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_modalidad_imagenologia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_modalidad", type="string", nullable=false)
     */
    private $nombreModalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_modalidad", type="string", nullable=true)
     */
    private $codigoModalidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modalidad_habilitada", type="boolean", nullable=true)
     */
    private $modalidadHabilitada = true;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_modalidad", type="string", length=100, nullable=true)
     */
    private $descripcionModalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_modalidad", type="string", length=50, nullable=true)
     */
    private $observacionesModalidad;



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
     * Set nombreModalidad
     *
     * @param string $nombreModalidad
     * @return CtlModalidadImagenologia
     */
    public function setNombreModalidad($nombreModalidad)
    {
        $this->nombreModalidad = $nombreModalidad;

        return $this;
    }

    /**
     * Get nombreModalidad
     *
     * @return string 
     */
    public function getNombreModalidad()
    {
        return $this->nombreModalidad;
    }

    /**
     * Set codigoModalidad
     *
     * @param string $codigoModalidad
     * @return CtlModalidadImagenologia
     */
    public function setCodigoModalidad($codigoModalidad)
    {
        $this->codigoModalidad = $codigoModalidad;

        return $this;
    }

    /**
     * Get codigoModalidad
     *
     * @return string 
     */
    public function getCodigoModalidad()
    {
        return $this->codigoModalidad;
    }

    /**
     * Set modalidadHabilitada
     *
     * @param boolean $modalidadHabilitada
     * @return CtlModalidadImagenologia
     */
    public function setModalidadHabilitada($modalidadHabilitada)
    {
        $this->modalidadHabilitada = $modalidadHabilitada;

        return $this;
    }

    /**
     * Get modalidadHabilitada
     *
     * @return boolean 
     */
    public function getModalidadHabilitada()
    {
        return $this->modalidadHabilitada;
    }

    /**
     * Set descripcionModalidad
     *
     * @param string $descripcionModalidad
     * @return CtlModalidadImagenologia
     */
    public function setDescripcionModalidad($descripcionModalidad)
    {
        $this->descripcionModalidad = $descripcionModalidad;

        return $this;
    }

    /**
     * Get descripcionModalidad
     *
     * @return string 
     */
    public function getDescripcionModalidad()
    {
        return $this->descripcionModalidad;
    }

    /**
     * Set observacionesModalidad
     *
     * @param string $observacionesModalidad
     * @return CtlModalidadImagenologia
     */
    public function setObservacionesModalidad($observacionesModalidad)
    {
        $this->observacionesModalidad = $observacionesModalidad;

        return $this;
    }

    /**
     * Get observacionesModalidad
     *
     * @return string 
     */
    public function getObservacionesModalidad()
    {
        return $this->observacionesModalidad;
    }
}
