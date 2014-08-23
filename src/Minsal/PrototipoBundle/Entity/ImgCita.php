<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgCita
 *
 * @ORM\Table(name="img_cita", indexes={@ORM\Index(name="IDX_F0266B5A9F2BAE3A", columns={"id_modalidad_imagenologia_establecimiento_citacion"}), @ORM\Index(name="IDX_F0266B5A94328D4F", columns={"id_preinscripcion"}), @ORM\Index(name="IDX_F0266B5A3B94B0C1", columns={"id_parentesco"}), @ORM\Index(name="IDX_F0266B5ADD0D821B", columns={"id_estado_cita"}), @ORM\Index(name="IDX_F0266B5A7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_F0266B5A890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgCita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_cita_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_programada", type="datetime", nullable=false)
     */
    private $fechaProgramada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reprogramada", type="boolean", nullable=true)
     */
    private $reprogramada = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_programada_anterior", type="datetime", nullable=true)
     */
    private $fechaProgramadaAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="incidencias_cita", type="string", length=100, nullable=true)
     */
    private $incidenciasCita;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_cita", type="string", length=100, nullable=true)
     */
    private $observacionesCita;

    /**
     * @var string
     *
     * @ORM\Column(name="razon_anulada", type="string", length=50, nullable=true)
     */
    private $razonAnulada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion_cita", type="datetime", nullable=true)
     */
    private $fechaCreacionCita = 'now()';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_confirmacion_cita", type="datetime", nullable=true)
     */
    private $fechaConfirmacionCita;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reprogramacion_cita", type="datetime", nullable=true)
     */
    private $fechaReprogramacionCita;

    /**
     * @var boolean
     *
     * @ORM\Column(name="necesita_autorizacion", type="boolean", nullable=true)
     */
    private $necesitaAutorizacion = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cita_autorizada", type="boolean", nullable=true)
     */
    private $citaAutorizada = false;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_responsable_autoriza", type="string", nullable=true)
     */
    private $nombreResponsableAutoriza;

    /**
     * @var \CtlModalidadImagenologiaEstablecimientoCitacion
     *
     * @ORM\ManyToOne(targetEntity="CtlModalidadImagenologiaEstablecimientoCitacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_imagenologia_establecimiento_citacion", referencedColumnName="id")
     * })
     */
    private $idModalidadImagenologiaEstablecimientoCitacion;

    /**
     * @var \ImgPreinscripcion
     *
     * @ORM\ManyToOne(targetEntity="ImgPreinscripcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_preinscripcion", referencedColumnName="id")
     * })
     */
    private $idPreinscripcion;

    /**
     * @var \CtlParentesco
     *
     * @ORM\ManyToOne(targetEntity="CtlParentesco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_parentesco", referencedColumnName="id")
     * })
     */
    private $idParentesco;

    /**
     * @var \CtlEstadoCita
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoCita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_cita", referencedColumnName="id")
     * })
     */
    private $idEstadoCita;

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
     * @var \MntEmpleado
     *
     * @ORM\ManyToOne(targetEntity="MntEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * })
     */
    private $idEmpleado;



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
     * Set fechaProgramada
     *
     * @param \DateTime $fechaProgramada
     * @return ImgCita
     */
    public function setFechaProgramada($fechaProgramada)
    {
        $this->fechaProgramada = $fechaProgramada;

        return $this;
    }

    /**
     * Get fechaProgramada
     *
     * @return \DateTime 
     */
    public function getFechaProgramada()
    {
        return $this->fechaProgramada;
    }

    /**
     * Set reprogramada
     *
     * @param boolean $reprogramada
     * @return ImgCita
     */
    public function setReprogramada($reprogramada)
    {
        $this->reprogramada = $reprogramada;

        return $this;
    }

    /**
     * Get reprogramada
     *
     * @return boolean 
     */
    public function getReprogramada()
    {
        return $this->reprogramada;
    }

    /**
     * Set fechaProgramadaAnterior
     *
     * @param \DateTime $fechaProgramadaAnterior
     * @return ImgCita
     */
    public function setFechaProgramadaAnterior($fechaProgramadaAnterior)
    {
        $this->fechaProgramadaAnterior = $fechaProgramadaAnterior;

        return $this;
    }

    /**
     * Get fechaProgramadaAnterior
     *
     * @return \DateTime 
     */
    public function getFechaProgramadaAnterior()
    {
        return $this->fechaProgramadaAnterior;
    }

    /**
     * Set incidenciasCita
     *
     * @param string $incidenciasCita
     * @return ImgCita
     */
    public function setIncidenciasCita($incidenciasCita)
    {
        $this->incidenciasCita = $incidenciasCita;

        return $this;
    }

    /**
     * Get incidenciasCita
     *
     * @return string 
     */
    public function getIncidenciasCita()
    {
        return $this->incidenciasCita;
    }

    /**
     * Set observacionesCita
     *
     * @param string $observacionesCita
     * @return ImgCita
     */
    public function setObservacionesCita($observacionesCita)
    {
        $this->observacionesCita = $observacionesCita;

        return $this;
    }

    /**
     * Get observacionesCita
     *
     * @return string 
     */
    public function getObservacionesCita()
    {
        return $this->observacionesCita;
    }

    /**
     * Set razonAnulada
     *
     * @param string $razonAnulada
     * @return ImgCita
     */
    public function setRazonAnulada($razonAnulada)
    {
        $this->razonAnulada = $razonAnulada;

        return $this;
    }

    /**
     * Get razonAnulada
     *
     * @return string 
     */
    public function getRazonAnulada()
    {
        return $this->razonAnulada;
    }

    /**
     * Set fechaCreacionCita
     *
     * @param \DateTime $fechaCreacionCita
     * @return ImgCita
     */
    public function setFechaCreacionCita($fechaCreacionCita)
    {
        $this->fechaCreacionCita = $fechaCreacionCita;

        return $this;
    }

    /**
     * Get fechaCreacionCita
     *
     * @return \DateTime 
     */
    public function getFechaCreacionCita()
    {
        return $this->fechaCreacionCita;
    }

    /**
     * Set fechaConfirmacionCita
     *
     * @param \DateTime $fechaConfirmacionCita
     * @return ImgCita
     */
    public function setFechaConfirmacionCita($fechaConfirmacionCita)
    {
        $this->fechaConfirmacionCita = $fechaConfirmacionCita;

        return $this;
    }

    /**
     * Get fechaConfirmacionCita
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacionCita()
    {
        return $this->fechaConfirmacionCita;
    }

    /**
     * Set fechaReprogramacionCita
     *
     * @param \DateTime $fechaReprogramacionCita
     * @return ImgCita
     */
    public function setFechaReprogramacionCita($fechaReprogramacionCita)
    {
        $this->fechaReprogramacionCita = $fechaReprogramacionCita;

        return $this;
    }

    /**
     * Get fechaReprogramacionCita
     *
     * @return \DateTime 
     */
    public function getFechaReprogramacionCita()
    {
        return $this->fechaReprogramacionCita;
    }

    /**
     * Set necesitaAutorizacion
     *
     * @param boolean $necesitaAutorizacion
     * @return ImgCita
     */
    public function setNecesitaAutorizacion($necesitaAutorizacion)
    {
        $this->necesitaAutorizacion = $necesitaAutorizacion;

        return $this;
    }

    /**
     * Get necesitaAutorizacion
     *
     * @return boolean 
     */
    public function getNecesitaAutorizacion()
    {
        return $this->necesitaAutorizacion;
    }

    /**
     * Set citaAutorizada
     *
     * @param boolean $citaAutorizada
     * @return ImgCita
     */
    public function setCitaAutorizada($citaAutorizada)
    {
        $this->citaAutorizada = $citaAutorizada;

        return $this;
    }

    /**
     * Get citaAutorizada
     *
     * @return boolean 
     */
    public function getCitaAutorizada()
    {
        return $this->citaAutorizada;
    }

    /**
     * Set nombreResponsableAutoriza
     *
     * @param string $nombreResponsableAutoriza
     * @return ImgCita
     */
    public function setNombreResponsableAutoriza($nombreResponsableAutoriza)
    {
        $this->nombreResponsableAutoriza = $nombreResponsableAutoriza;

        return $this;
    }

    /**
     * Get nombreResponsableAutoriza
     *
     * @return string 
     */
    public function getNombreResponsableAutoriza()
    {
        return $this->nombreResponsableAutoriza;
    }

    /**
     * Set idModalidadImagenologiaEstablecimientoCitacion
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimientoCitacion $idModalidadImagenologiaEstablecimientoCitacion
     * @return ImgCita
     */
    public function setIdModalidadImagenologiaEstablecimientoCitacion(\Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimientoCitacion $idModalidadImagenologiaEstablecimientoCitacion = null)
    {
        $this->idModalidadImagenologiaEstablecimientoCitacion = $idModalidadImagenologiaEstablecimientoCitacion;

        return $this;
    }

    /**
     * Get idModalidadImagenologiaEstablecimientoCitacion
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimientoCitacion 
     */
    public function getIdModalidadImagenologiaEstablecimientoCitacion()
    {
        return $this->idModalidadImagenologiaEstablecimientoCitacion;
    }

    /**
     * Set idPreinscripcion
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgPreinscripcion $idPreinscripcion
     * @return ImgCita
     */
    public function setIdPreinscripcion(\Minsal\PrototipoBundle\Entity\ImgPreinscripcion $idPreinscripcion = null)
    {
        $this->idPreinscripcion = $idPreinscripcion;

        return $this;
    }

    /**
     * Get idPreinscripcion
     *
     * @return \Minsal\PrototipoBundle\Entity\ImgPreinscripcion 
     */
    public function getIdPreinscripcion()
    {
        return $this->idPreinscripcion;
    }

    /**
     * Set idParentesco
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlParentesco $idParentesco
     * @return ImgCita
     */
    public function setIdParentesco(\Minsal\PrototipoBundle\Entity\CtlParentesco $idParentesco = null)
    {
        $this->idParentesco = $idParentesco;

        return $this;
    }

    /**
     * Get idParentesco
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlParentesco 
     */
    public function getIdParentesco()
    {
        return $this->idParentesco;
    }

    /**
     * Set idEstadoCita
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstadoCita $idEstadoCita
     * @return ImgCita
     */
    public function setIdEstadoCita(\Minsal\PrototipoBundle\Entity\CtlEstadoCita $idEstadoCita = null)
    {
        $this->idEstadoCita = $idEstadoCita;

        return $this;
    }

    /**
     * Get idEstadoCita
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlEstadoCita 
     */
    public function getIdEstadoCita()
    {
        return $this->idEstadoCita;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgCita
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

    /**
     * Set idEmpleado
     *
     * @param \Minsal\PrototipoBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgCita
     */
    public function setIdEmpleado(\Minsal\PrototipoBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\PrototipoBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
