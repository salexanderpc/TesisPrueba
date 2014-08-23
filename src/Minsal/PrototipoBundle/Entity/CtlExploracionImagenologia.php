<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlExploracionImagenologia
 *
 * @ORM\Table(name="ctl_exploracion_imagenologia", indexes={@ORM\Index(name="IDX_C615C4D6A5B9E381", columns={"id_examen_imagenologia"})})
 * @ORM\Entity
 */
class CtlExploracionImagenologia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_exploracion_imagenologia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_exploracion", type="string", nullable=false)
     */
    private $nombreExploracion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_exploracion", type="string", nullable=true)
     */
    private $codigoExploracion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exploracion_habilitada", type="boolean", nullable=true)
     */
    private $exploracionHabilitada = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempo_ocupacion_sala", type="smallint", nullable=true)
     */
    private $tiempoOcupacionSala = '5';

    /**
     * @var integer
     *
     * @ORM\Column(name="tiempo_medico", type="smallint", nullable=true)
     */
    private $tiempoMedico = '5';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_exploracion", type="string", length=100, nullable=true)
     */
    private $descripcionExploracion;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_exploracion", type="string", length=50, nullable=true)
     */
    private $observacionesExploracion;

    /**
     * @var \CtlExamenImagenologia
     *
     * @ORM\ManyToOne(targetEntity="CtlExamenImagenologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_examen_imagenologia", referencedColumnName="id")
     * })
     */
    private $idExamenImagenologia;



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
     * Set nombreExploracion
     *
     * @param string $nombreExploracion
     * @return CtlExploracionImagenologia
     */
    public function setNombreExploracion($nombreExploracion)
    {
        $this->nombreExploracion = $nombreExploracion;

        return $this;
    }

    /**
     * Get nombreExploracion
     *
     * @return string 
     */
    public function getNombreExploracion()
    {
        return $this->nombreExploracion;
    }

    /**
     * Set codigoExploracion
     *
     * @param string $codigoExploracion
     * @return CtlExploracionImagenologia
     */
    public function setCodigoExploracion($codigoExploracion)
    {
        $this->codigoExploracion = $codigoExploracion;

        return $this;
    }

    /**
     * Get codigoExploracion
     *
     * @return string 
     */
    public function getCodigoExploracion()
    {
        return $this->codigoExploracion;
    }

    /**
     * Set exploracionHabilitada
     *
     * @param boolean $exploracionHabilitada
     * @return CtlExploracionImagenologia
     */
    public function setExploracionHabilitada($exploracionHabilitada)
    {
        $this->exploracionHabilitada = $exploracionHabilitada;

        return $this;
    }

    /**
     * Get exploracionHabilitada
     *
     * @return boolean 
     */
    public function getExploracionHabilitada()
    {
        return $this->exploracionHabilitada;
    }

    /**
     * Set tiempoOcupacionSala
     *
     * @param integer $tiempoOcupacionSala
     * @return CtlExploracionImagenologia
     */
    public function setTiempoOcupacionSala($tiempoOcupacionSala)
    {
        $this->tiempoOcupacionSala = $tiempoOcupacionSala;

        return $this;
    }

    /**
     * Get tiempoOcupacionSala
     *
     * @return integer 
     */
    public function getTiempoOcupacionSala()
    {
        return $this->tiempoOcupacionSala;
    }

    /**
     * Set tiempoMedico
     *
     * @param integer $tiempoMedico
     * @return CtlExploracionImagenologia
     */
    public function setTiempoMedico($tiempoMedico)
    {
        $this->tiempoMedico = $tiempoMedico;

        return $this;
    }

    /**
     * Get tiempoMedico
     *
     * @return integer 
     */
    public function getTiempoMedico()
    {
        return $this->tiempoMedico;
    }

    /**
     * Set descripcionExploracion
     *
     * @param string $descripcionExploracion
     * @return CtlExploracionImagenologia
     */
    public function setDescripcionExploracion($descripcionExploracion)
    {
        $this->descripcionExploracion = $descripcionExploracion;

        return $this;
    }

    /**
     * Get descripcionExploracion
     *
     * @return string 
     */
    public function getDescripcionExploracion()
    {
        return $this->descripcionExploracion;
    }

    /**
     * Set observacionesExploracion
     *
     * @param string $observacionesExploracion
     * @return CtlExploracionImagenologia
     */
    public function setObservacionesExploracion($observacionesExploracion)
    {
        $this->observacionesExploracion = $observacionesExploracion;

        return $this;
    }

    /**
     * Get observacionesExploracion
     *
     * @return string 
     */
    public function getObservacionesExploracion()
    {
        return $this->observacionesExploracion;
    }

    /**
     * Set idExamenImagenologia
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlExamenImagenologia $idExamenImagenologia
     * @return CtlExploracionImagenologia
     */
    public function setIdExamenImagenologia(\Minsal\PrototipoBundle\Entity\CtlExamenImagenologia $idExamenImagenologia = null)
    {
        $this->idExamenImagenologia = $idExamenImagenologia;

        return $this;
    }

    /**
     * Get idExamenImagenologia
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlExamenImagenologia 
     */
    public function getIdExamenImagenologia()
    {
        return $this->idExamenImagenologia;
    }
}
