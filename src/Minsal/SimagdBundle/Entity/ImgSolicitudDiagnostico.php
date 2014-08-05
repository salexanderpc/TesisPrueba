<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgSolicitudDiagnostico
 *
 * @ORM\Table(name="img_solicitud_diagnostico", indexes={@ORM\Index(name="IDX_8502380394328D4F", columns={"id_preinscripcion"}), @ORM\Index(name="IDX_85023803213355AE", columns={"id_estudio_paciente"}), @ORM\Index(name="IDX_850238039A3949E3", columns={"id_establecimiento_solicitado"}), @ORM\Index(name="IDX_85023803890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgSolicitudDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_solicitud_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solicitud_diagnostico_remota", type="boolean", nullable=true)
     */
    private $solicitudDiagnosticoRemota = false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion_solicitud", type="datetime", nullable=true)
     */
    private $fechaCreacionSolicitud = 'now()';

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_solicitud", type="string", length=100, nullable=false)
     */
    private $justificacionSolicitud;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_proxima_consulta", type="date", nullable=true)
     */
    private $fechaProximaConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_solicitud", type="string", length=100, nullable=true)
     */
    private $observacionesSolicitud;

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
     * @var \ImgEstudioPaciente
     *
     * @ORM\ManyToOne(targetEntity="ImgEstudioPaciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estudio_paciente", referencedColumnName="id")
     * })
     */
    private $idEstudioPaciente;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_solicitado", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoSolicitado;

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
     * Set solicitudDiagnosticoRemota
     *
     * @param boolean $solicitudDiagnosticoRemota
     * @return ImgSolicitudDiagnostico
     */
    public function setSolicitudDiagnosticoRemota($solicitudDiagnosticoRemota)
    {
        $this->solicitudDiagnosticoRemota = $solicitudDiagnosticoRemota;

        return $this;
    }

    /**
     * Get solicitudDiagnosticoRemota
     *
     * @return boolean 
     */
    public function getSolicitudDiagnosticoRemota()
    {
        return $this->solicitudDiagnosticoRemota;
    }

    /**
     * Set fechaCreacionSolicitud
     *
     * @param \DateTime $fechaCreacionSolicitud
     * @return ImgSolicitudDiagnostico
     */
    public function setFechaCreacionSolicitud($fechaCreacionSolicitud)
    {
        $this->fechaCreacionSolicitud = $fechaCreacionSolicitud;

        return $this;
    }

    /**
     * Get fechaCreacionSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaCreacionSolicitud()
    {
        return $this->fechaCreacionSolicitud;
    }

    /**
     * Set justificacionSolicitud
     *
     * @param string $justificacionSolicitud
     * @return ImgSolicitudDiagnostico
     */
    public function setJustificacionSolicitud($justificacionSolicitud)
    {
        $this->justificacionSolicitud = $justificacionSolicitud;

        return $this;
    }

    /**
     * Get justificacionSolicitud
     *
     * @return string 
     */
    public function getJustificacionSolicitud()
    {
        return $this->justificacionSolicitud;
    }

    /**
     * Set fechaProximaConsulta
     *
     * @param \DateTime $fechaProximaConsulta
     * @return ImgSolicitudDiagnostico
     */
    public function setFechaProximaConsulta($fechaProximaConsulta)
    {
        $this->fechaProximaConsulta = $fechaProximaConsulta;

        return $this;
    }

    /**
     * Get fechaProximaConsulta
     *
     * @return \DateTime 
     */
    public function getFechaProximaConsulta()
    {
        return $this->fechaProximaConsulta;
    }

    /**
     * Set observacionesSolicitud
     *
     * @param string $observacionesSolicitud
     * @return ImgSolicitudDiagnostico
     */
    public function setObservacionesSolicitud($observacionesSolicitud)
    {
        $this->observacionesSolicitud = $observacionesSolicitud;

        return $this;
    }

    /**
     * Get observacionesSolicitud
     *
     * @return string 
     */
    public function getObservacionesSolicitud()
    {
        return $this->observacionesSolicitud;
    }

    /**
     * Set idPreinscripcion
     *
     * @param \Minsal\SimagdBundle\Entity\ImgPreinscripcion $idPreinscripcion
     * @return ImgSolicitudDiagnostico
     */
    public function setIdPreinscripcion(\Minsal\SimagdBundle\Entity\ImgPreinscripcion $idPreinscripcion = null)
    {
        $this->idPreinscripcion = $idPreinscripcion;

        return $this;
    }

    /**
     * Get idPreinscripcion
     *
     * @return \Minsal\SimagdBundle\Entity\ImgPreinscripcion 
     */
    public function getIdPreinscripcion()
    {
        return $this->idPreinscripcion;
    }

    /**
     * Set idEstudioPaciente
     *
     * @param \Minsal\SimagdBundle\Entity\ImgEstudioPaciente $idEstudioPaciente
     * @return ImgSolicitudDiagnostico
     */
    public function setIdEstudioPaciente(\Minsal\SimagdBundle\Entity\ImgEstudioPaciente $idEstudioPaciente = null)
    {
        $this->idEstudioPaciente = $idEstudioPaciente;

        return $this;
    }

    /**
     * Get idEstudioPaciente
     *
     * @return \Minsal\SimagdBundle\Entity\ImgEstudioPaciente 
     */
    public function getIdEstudioPaciente()
    {
        return $this->idEstudioPaciente;
    }

    /**
     * Set idEstablecimientoSolicitado
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoSolicitado
     * @return ImgSolicitudDiagnostico
     */
    public function setIdEstablecimientoSolicitado(\Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoSolicitado = null)
    {
        $this->idEstablecimientoSolicitado = $idEstablecimientoSolicitado;

        return $this;
    }

    /**
     * Get idEstablecimientoSolicitado
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoSolicitado()
    {
        return $this->idEstablecimientoSolicitado;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgSolicitudDiagnostico
     */
    public function setIdEmpleado(\Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\SimagdBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
