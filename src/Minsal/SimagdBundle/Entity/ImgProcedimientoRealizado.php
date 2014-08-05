<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgProcedimientoRealizado
 *
 * @ORM\Table(name="img_procedimiento_realizado", indexes={@ORM\Index(name="IDX_863F6B9394328D4F", columns={"id_preinscripcion"}), @ORM\Index(name="IDX_863F6B93282A2E1B", columns={"id_estado_procedimiento_realizado"}), @ORM\Index(name="IDX_863F6B93890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgProcedimientoRealizado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_procedimiento_realizado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_atendido", type="datetime", nullable=true)
     */
    private $fechaAtendido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_realizado", type="datetime", nullable=true)
     */
    private $fechaRealizado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_procesado", type="datetime", nullable=true)
     */
    private $fechaProcesado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_almacenado", type="datetime", nullable=true)
     */
    private $fechaAlmacenado;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnica_utilizada", type="string", nullable=true)
     */
    private $tecnicaUtilizada;

    /**
     * @var string
     *
     * @ORM\Column(name="hipotesis_diagnostica", type="string", nullable=true)
     */
    private $hipotesisDiagnostica;

    /**
     * @var string
     *
     * @ORM\Column(name="incidencias_procedimiento_realizado", type="string", length=100, nullable=true)
     */
    private $incidenciasProcedimientoRealizado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fecha_nacimiento_indeterminada", type="boolean", nullable=true)
     */
    private $fechaNacimientoIndeterminada = false;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_procedimiento_realizado", type="string", length=100, nullable=true)
     */
    private $observacionesProcedimientoRealizado;

    /**
     * @var string
     *
     * @ORM\Column(name="material_utilizado", type="string", length=100, nullable=true)
     */
    private $materialUtilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="equipo_utilizado", type="string", length=50, nullable=true)
     */
    private $equipoUtilizado;

    /**
     * @var string
     *
     * @ORM\Column(name="sala_realizado", type="string", nullable=true)
     */
    private $salaRealizado;

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
     * @var \CtlEstadoProcedimientoRealizado
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoProcedimientoRealizado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_procedimiento_realizado", referencedColumnName="id")
     * })
     */
    private $idEstadoProcedimientoRealizado;

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
     * Set fechaAtendido
     *
     * @param \DateTime $fechaAtendido
     * @return ImgProcedimientoRealizado
     */
    public function setFechaAtendido($fechaAtendido)
    {
        $this->fechaAtendido = $fechaAtendido;

        return $this;
    }

    /**
     * Get fechaAtendido
     *
     * @return \DateTime 
     */
    public function getFechaAtendido()
    {
        return $this->fechaAtendido;
    }

    /**
     * Set fechaRealizado
     *
     * @param \DateTime $fechaRealizado
     * @return ImgProcedimientoRealizado
     */
    public function setFechaRealizado($fechaRealizado)
    {
        $this->fechaRealizado = $fechaRealizado;

        return $this;
    }

    /**
     * Get fechaRealizado
     *
     * @return \DateTime 
     */
    public function getFechaRealizado()
    {
        return $this->fechaRealizado;
    }

    /**
     * Set fechaProcesado
     *
     * @param \DateTime $fechaProcesado
     * @return ImgProcedimientoRealizado
     */
    public function setFechaProcesado($fechaProcesado)
    {
        $this->fechaProcesado = $fechaProcesado;

        return $this;
    }

    /**
     * Get fechaProcesado
     *
     * @return \DateTime 
     */
    public function getFechaProcesado()
    {
        return $this->fechaProcesado;
    }

    /**
     * Set fechaAlmacenado
     *
     * @param \DateTime $fechaAlmacenado
     * @return ImgProcedimientoRealizado
     */
    public function setFechaAlmacenado($fechaAlmacenado)
    {
        $this->fechaAlmacenado = $fechaAlmacenado;

        return $this;
    }

    /**
     * Get fechaAlmacenado
     *
     * @return \DateTime 
     */
    public function getFechaAlmacenado()
    {
        return $this->fechaAlmacenado;
    }

    /**
     * Set tecnicaUtilizada
     *
     * @param string $tecnicaUtilizada
     * @return ImgProcedimientoRealizado
     */
    public function setTecnicaUtilizada($tecnicaUtilizada)
    {
        $this->tecnicaUtilizada = $tecnicaUtilizada;

        return $this;
    }

    /**
     * Get tecnicaUtilizada
     *
     * @return string 
     */
    public function getTecnicaUtilizada()
    {
        return $this->tecnicaUtilizada;
    }

    /**
     * Set hipotesisDiagnostica
     *
     * @param string $hipotesisDiagnostica
     * @return ImgProcedimientoRealizado
     */
    public function setHipotesisDiagnostica($hipotesisDiagnostica)
    {
        $this->hipotesisDiagnostica = $hipotesisDiagnostica;

        return $this;
    }

    /**
     * Get hipotesisDiagnostica
     *
     * @return string 
     */
    public function getHipotesisDiagnostica()
    {
        return $this->hipotesisDiagnostica;
    }

    /**
     * Set incidenciasProcedimientoRealizado
     *
     * @param string $incidenciasProcedimientoRealizado
     * @return ImgProcedimientoRealizado
     */
    public function setIncidenciasProcedimientoRealizado($incidenciasProcedimientoRealizado)
    {
        $this->incidenciasProcedimientoRealizado = $incidenciasProcedimientoRealizado;

        return $this;
    }

    /**
     * Get incidenciasProcedimientoRealizado
     *
     * @return string 
     */
    public function getIncidenciasProcedimientoRealizado()
    {
        return $this->incidenciasProcedimientoRealizado;
    }

    /**
     * Set fechaNacimientoIndeterminada
     *
     * @param boolean $fechaNacimientoIndeterminada
     * @return ImgProcedimientoRealizado
     */
    public function setFechaNacimientoIndeterminada($fechaNacimientoIndeterminada)
    {
        $this->fechaNacimientoIndeterminada = $fechaNacimientoIndeterminada;

        return $this;
    }

    /**
     * Get fechaNacimientoIndeterminada
     *
     * @return boolean 
     */
    public function getFechaNacimientoIndeterminada()
    {
        return $this->fechaNacimientoIndeterminada;
    }

    /**
     * Set observacionesProcedimientoRealizado
     *
     * @param string $observacionesProcedimientoRealizado
     * @return ImgProcedimientoRealizado
     */
    public function setObservacionesProcedimientoRealizado($observacionesProcedimientoRealizado)
    {
        $this->observacionesProcedimientoRealizado = $observacionesProcedimientoRealizado;

        return $this;
    }

    /**
     * Get observacionesProcedimientoRealizado
     *
     * @return string 
     */
    public function getObservacionesProcedimientoRealizado()
    {
        return $this->observacionesProcedimientoRealizado;
    }

    /**
     * Set materialUtilizado
     *
     * @param string $materialUtilizado
     * @return ImgProcedimientoRealizado
     */
    public function setMaterialUtilizado($materialUtilizado)
    {
        $this->materialUtilizado = $materialUtilizado;

        return $this;
    }

    /**
     * Get materialUtilizado
     *
     * @return string 
     */
    public function getMaterialUtilizado()
    {
        return $this->materialUtilizado;
    }

    /**
     * Set equipoUtilizado
     *
     * @param string $equipoUtilizado
     * @return ImgProcedimientoRealizado
     */
    public function setEquipoUtilizado($equipoUtilizado)
    {
        $this->equipoUtilizado = $equipoUtilizado;

        return $this;
    }

    /**
     * Get equipoUtilizado
     *
     * @return string 
     */
    public function getEquipoUtilizado()
    {
        return $this->equipoUtilizado;
    }

    /**
     * Set salaRealizado
     *
     * @param string $salaRealizado
     * @return ImgProcedimientoRealizado
     */
    public function setSalaRealizado($salaRealizado)
    {
        $this->salaRealizado = $salaRealizado;

        return $this;
    }

    /**
     * Get salaRealizado
     *
     * @return string 
     */
    public function getSalaRealizado()
    {
        return $this->salaRealizado;
    }

    /**
     * Set idPreinscripcion
     *
     * @param \Minsal\SimagdBundle\Entity\ImgPreinscripcion $idPreinscripcion
     * @return ImgProcedimientoRealizado
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
     * Set idEstadoProcedimientoRealizado
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstadoProcedimientoRealizado $idEstadoProcedimientoRealizado
     * @return ImgProcedimientoRealizado
     */
    public function setIdEstadoProcedimientoRealizado(\Minsal\SimagdBundle\Entity\CtlEstadoProcedimientoRealizado $idEstadoProcedimientoRealizado = null)
    {
        $this->idEstadoProcedimientoRealizado = $idEstadoProcedimientoRealizado;

        return $this;
    }

    /**
     * Get idEstadoProcedimientoRealizado
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstadoProcedimientoRealizado 
     */
    public function getIdEstadoProcedimientoRealizado()
    {
        return $this->idEstadoProcedimientoRealizado;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgProcedimientoRealizado
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
