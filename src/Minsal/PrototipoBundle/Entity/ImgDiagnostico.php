<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgDiagnostico
 *
 * @ORM\Table(name="img_diagnostico", indexes={@ORM\Index(name="IDX_15C1D2C618971421", columns={"id_lectura"}), @ORM\Index(name="IDX_15C1D2C622BF8FB7", columns={"id_estado_diagnostico"}), @ORM\Index(name="IDX_15C1D2C6890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="transcripcion", type="text", nullable=true)
     */
    private $transcripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="hallazgos", type="string", length=300, nullable=true)
     */
    private $hallazgos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_diagnostico_transcrito", type="datetime", nullable=true)
     */
    private $fechaDiagnosticoTranscrito = 'now()';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_diagnostico_corregido", type="datetime", nullable=true)
     */
    private $fechaDiagnosticoCorregido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_diagnostico_aprobado", type="datetime", nullable=true)
     */
    private $fechaDiagnosticoAprobado;

    /**
     * @var string
     *
     * @ORM\Column(name="errores_transcripcion", type="string", length=300, nullable=true)
     */
    private $erroresTranscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="incidencias_diagnostico", type="string", length=100, nullable=true)
     */
    private $incidenciasDiagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_diagnostico", type="string", length=100, nullable=true)
     */
    private $observacionesDiagnostico;

    /**
     * @var \ImgLectura
     *
     * @ORM\ManyToOne(targetEntity="ImgLectura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lectura", referencedColumnName="id")
     * })
     */
    private $idLectura;

    /**
     * @var \CtlEstadoDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_diagnostico", referencedColumnName="id")
     * })
     */
    private $idEstadoDiagnostico;

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
     * Set transcripcion
     *
     * @param string $transcripcion
     * @return ImgDiagnostico
     */
    public function setTranscripcion($transcripcion)
    {
        $this->transcripcion = $transcripcion;

        return $this;
    }

    /**
     * Get transcripcion
     *
     * @return string 
     */
    public function getTranscripcion()
    {
        return $this->transcripcion;
    }

    /**
     * Set hallazgos
     *
     * @param string $hallazgos
     * @return ImgDiagnostico
     */
    public function setHallazgos($hallazgos)
    {
        $this->hallazgos = $hallazgos;

        return $this;
    }

    /**
     * Get hallazgos
     *
     * @return string 
     */
    public function getHallazgos()
    {
        return $this->hallazgos;
    }

    /**
     * Set fechaDiagnosticoTranscrito
     *
     * @param \DateTime $fechaDiagnosticoTranscrito
     * @return ImgDiagnostico
     */
    public function setFechaDiagnosticoTranscrito($fechaDiagnosticoTranscrito)
    {
        $this->fechaDiagnosticoTranscrito = $fechaDiagnosticoTranscrito;

        return $this;
    }

    /**
     * Get fechaDiagnosticoTranscrito
     *
     * @return \DateTime 
     */
    public function getFechaDiagnosticoTranscrito()
    {
        return $this->fechaDiagnosticoTranscrito;
    }

    /**
     * Set fechaDiagnosticoCorregido
     *
     * @param \DateTime $fechaDiagnosticoCorregido
     * @return ImgDiagnostico
     */
    public function setFechaDiagnosticoCorregido($fechaDiagnosticoCorregido)
    {
        $this->fechaDiagnosticoCorregido = $fechaDiagnosticoCorregido;

        return $this;
    }

    /**
     * Get fechaDiagnosticoCorregido
     *
     * @return \DateTime 
     */
    public function getFechaDiagnosticoCorregido()
    {
        return $this->fechaDiagnosticoCorregido;
    }

    /**
     * Set fechaDiagnosticoAprobado
     *
     * @param \DateTime $fechaDiagnosticoAprobado
     * @return ImgDiagnostico
     */
    public function setFechaDiagnosticoAprobado($fechaDiagnosticoAprobado)
    {
        $this->fechaDiagnosticoAprobado = $fechaDiagnosticoAprobado;

        return $this;
    }

    /**
     * Get fechaDiagnosticoAprobado
     *
     * @return \DateTime 
     */
    public function getFechaDiagnosticoAprobado()
    {
        return $this->fechaDiagnosticoAprobado;
    }

    /**
     * Set erroresTranscripcion
     *
     * @param string $erroresTranscripcion
     * @return ImgDiagnostico
     */
    public function setErroresTranscripcion($erroresTranscripcion)
    {
        $this->erroresTranscripcion = $erroresTranscripcion;

        return $this;
    }

    /**
     * Get erroresTranscripcion
     *
     * @return string 
     */
    public function getErroresTranscripcion()
    {
        return $this->erroresTranscripcion;
    }

    /**
     * Set incidenciasDiagnostico
     *
     * @param string $incidenciasDiagnostico
     * @return ImgDiagnostico
     */
    public function setIncidenciasDiagnostico($incidenciasDiagnostico)
    {
        $this->incidenciasDiagnostico = $incidenciasDiagnostico;

        return $this;
    }

    /**
     * Get incidenciasDiagnostico
     *
     * @return string 
     */
    public function getIncidenciasDiagnostico()
    {
        return $this->incidenciasDiagnostico;
    }

    /**
     * Set observacionesDiagnostico
     *
     * @param string $observacionesDiagnostico
     * @return ImgDiagnostico
     */
    public function setObservacionesDiagnostico($observacionesDiagnostico)
    {
        $this->observacionesDiagnostico = $observacionesDiagnostico;

        return $this;
    }

    /**
     * Get observacionesDiagnostico
     *
     * @return string 
     */
    public function getObservacionesDiagnostico()
    {
        return $this->observacionesDiagnostico;
    }

    /**
     * Set idLectura
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgLectura $idLectura
     * @return ImgDiagnostico
     */
    public function setIdLectura(\Minsal\PrototipoBundle\Entity\ImgLectura $idLectura = null)
    {
        $this->idLectura = $idLectura;

        return $this;
    }

    /**
     * Get idLectura
     *
     * @return \Minsal\PrototipoBundle\Entity\ImgLectura 
     */
    public function getIdLectura()
    {
        return $this->idLectura;
    }

    /**
     * Set idEstadoDiagnostico
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstadoDiagnostico $idEstadoDiagnostico
     * @return ImgDiagnostico
     */
    public function setIdEstadoDiagnostico(\Minsal\PrototipoBundle\Entity\CtlEstadoDiagnostico $idEstadoDiagnostico = null)
    {
        $this->idEstadoDiagnostico = $idEstadoDiagnostico;

        return $this;
    }

    /**
     * Get idEstadoDiagnostico
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlEstadoDiagnostico 
     */
    public function getIdEstadoDiagnostico()
    {
        return $this->idEstadoDiagnostico;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\PrototipoBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgDiagnostico
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
