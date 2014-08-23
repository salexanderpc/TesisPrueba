<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlModalidadImagenologiaEstablecimiento
 *
 * @ORM\Table(name="ctl_modalidad_imagenologia_establecimiento", uniqueConstraints={@ORM\UniqueConstraint(name="idx_modalidad_establecimiento", columns={"id_establecimiento", "id_modalidad_imagenologia"})}, indexes={@ORM\Index(name="IDX_C90DC3D6C02E5491", columns={"id_modalidad_imagenologia"}), @ORM\Index(name="IDX_C90DC3D67DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class CtlModalidadImagenologiaEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_modalidad_imagenologia_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modalidad_realizable_habilitada", type="boolean", nullable=false)
     */
    private $modalidadRealizableHabilitada = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio_realizable", type="date", nullable=true)
     */
    private $fechaInicioRealizable = 'now';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_modalidad_realizable", type="string", length=50, nullable=true)
     */
    private $descripcionModalidadRealizable;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_modalidad_realizable", type="string", length=50, nullable=true)
     */
    private $observacionesModalidadRealizable;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion_clinica_estudio", type="smallint", nullable=true)
     */
    private $duracionClinicaEstudio = '6';

    /**
     * @var \CtlModalidadImagenologia
     *
     * @ORM\ManyToOne(targetEntity="CtlModalidadImagenologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_imagenologia", referencedColumnName="id")
     * })
     */
    private $idModalidadImagenologia;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;



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
     * Set modalidadRealizableHabilitada
     *
     * @param boolean $modalidadRealizableHabilitada
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setModalidadRealizableHabilitada($modalidadRealizableHabilitada)
    {
        $this->modalidadRealizableHabilitada = $modalidadRealizableHabilitada;

        return $this;
    }

    /**
     * Get modalidadRealizableHabilitada
     *
     * @return boolean 
     */
    public function getModalidadRealizableHabilitada()
    {
        return $this->modalidadRealizableHabilitada;
    }

    /**
     * Set fechaInicioRealizable
     *
     * @param \DateTime $fechaInicioRealizable
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setFechaInicioRealizable($fechaInicioRealizable)
    {
        $this->fechaInicioRealizable = $fechaInicioRealizable;

        return $this;
    }

    /**
     * Get fechaInicioRealizable
     *
     * @return \DateTime 
     */
    public function getFechaInicioRealizable()
    {
        return $this->fechaInicioRealizable;
    }

    /**
     * Set descripcionModalidadRealizable
     *
     * @param string $descripcionModalidadRealizable
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setDescripcionModalidadRealizable($descripcionModalidadRealizable)
    {
        $this->descripcionModalidadRealizable = $descripcionModalidadRealizable;

        return $this;
    }

    /**
     * Get descripcionModalidadRealizable
     *
     * @return string 
     */
    public function getDescripcionModalidadRealizable()
    {
        return $this->descripcionModalidadRealizable;
    }

    /**
     * Set observacionesModalidadRealizable
     *
     * @param string $observacionesModalidadRealizable
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setObservacionesModalidadRealizable($observacionesModalidadRealizable)
    {
        $this->observacionesModalidadRealizable = $observacionesModalidadRealizable;

        return $this;
    }

    /**
     * Get observacionesModalidadRealizable
     *
     * @return string 
     */
    public function getObservacionesModalidadRealizable()
    {
        return $this->observacionesModalidadRealizable;
    }

    /**
     * Set duracionClinicaEstudio
     *
     * @param integer $duracionClinicaEstudio
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setDuracionClinicaEstudio($duracionClinicaEstudio)
    {
        $this->duracionClinicaEstudio = $duracionClinicaEstudio;

        return $this;
    }

    /**
     * Get duracionClinicaEstudio
     *
     * @return integer 
     */
    public function getDuracionClinicaEstudio()
    {
        return $this->duracionClinicaEstudio;
    }

    /**
     * Set idModalidadImagenologia
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologia $idModalidadImagenologia
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setIdModalidadImagenologia(\Minsal\PrototipoBundle\Entity\CtlModalidadImagenologia $idModalidadImagenologia = null)
    {
        $this->idModalidadImagenologia = $idModalidadImagenologia;

        return $this;
    }

    /**
     * Get idModalidadImagenologia
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologia 
     */
    public function getIdModalidadImagenologia()
    {
        return $this->idModalidadImagenologia;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CtlModalidadImagenologiaEstablecimiento
     */
    public function setIdEstablecimiento(\Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }
}
