<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgLectura
 *
 * @ORM\Table(name="img_lectura", indexes={@ORM\Index(name="IDX_8B65F9B96196B359", columns={"id_estudio"}), @ORM\Index(name="IDX_8B65F9B9D93DAF86", columns={"id_estado_lectura"}), @ORM\Index(name="IDX_8B65F9B9D426DB54", columns={"id_tipo_resultado"}), @ORM\Index(name="IDX_8B65F9B97DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_8B65F9B9890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgLectura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_lectura_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="correlativo_lectura", type="string", nullable=true)
     */
    private $correlativoLectura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_lectura", type="datetime", nullable=true)
     */
    private $fechaLectura = 'now()';

    /**
     * @var boolean
     *
     * @ORM\Column(name="lectura_remota", type="boolean", nullable=true)
     */
    private $lecturaRemota = false;

    /**
     * @var string
     *
     * @ORM\Column(name="indicaciones", type="string", length=100, nullable=true)
     */
    private $indicaciones;

    /**
     * @var \ImgEstudioPaciente
     *
     * @ORM\ManyToOne(targetEntity="ImgEstudioPaciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estudio", referencedColumnName="id")
     * })
     */
    private $idEstudio;

    /**
     * @var \CtlEstadoLectura
     *
     * @ORM\ManyToOne(targetEntity="CtlEstadoLectura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estado_lectura", referencedColumnName="id")
     * })
     */
    private $idEstadoLectura;

    /**
     * @var \CtlTipoResultado
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoResultado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_resultado", referencedColumnName="id")
     * })
     */
    private $idTipoResultado;

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
     * Set correlativoLectura
     *
     * @param string $correlativoLectura
     * @return ImgLectura
     */
    public function setCorrelativoLectura($correlativoLectura)
    {
        $this->correlativoLectura = $correlativoLectura;

        return $this;
    }

    /**
     * Get correlativoLectura
     *
     * @return string 
     */
    public function getCorrelativoLectura()
    {
        return $this->correlativoLectura;
    }

    /**
     * Set fechaLectura
     *
     * @param \DateTime $fechaLectura
     * @return ImgLectura
     */
    public function setFechaLectura($fechaLectura)
    {
        $this->fechaLectura = $fechaLectura;

        return $this;
    }

    /**
     * Get fechaLectura
     *
     * @return \DateTime 
     */
    public function getFechaLectura()
    {
        return $this->fechaLectura;
    }

    /**
     * Set lecturaRemota
     *
     * @param boolean $lecturaRemota
     * @return ImgLectura
     */
    public function setLecturaRemota($lecturaRemota)
    {
        $this->lecturaRemota = $lecturaRemota;

        return $this;
    }

    /**
     * Get lecturaRemota
     *
     * @return boolean 
     */
    public function getLecturaRemota()
    {
        return $this->lecturaRemota;
    }

    /**
     * Set indicaciones
     *
     * @param string $indicaciones
     * @return ImgLectura
     */
    public function setIndicaciones($indicaciones)
    {
        $this->indicaciones = $indicaciones;

        return $this;
    }

    /**
     * Get indicaciones
     *
     * @return string 
     */
    public function getIndicaciones()
    {
        return $this->indicaciones;
    }

    /**
     * Set idEstudio
     *
     * @param \Minsal\SimagdBundle\Entity\ImgEstudioPaciente $idEstudio
     * @return ImgLectura
     */
    public function setIdEstudio(\Minsal\SimagdBundle\Entity\ImgEstudioPaciente $idEstudio = null)
    {
        $this->idEstudio = $idEstudio;

        return $this;
    }

    /**
     * Get idEstudio
     *
     * @return \Minsal\SimagdBundle\Entity\ImgEstudioPaciente 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }

    /**
     * Set idEstadoLectura
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstadoLectura $idEstadoLectura
     * @return ImgLectura
     */
    public function setIdEstadoLectura(\Minsal\SimagdBundle\Entity\CtlEstadoLectura $idEstadoLectura = null)
    {
        $this->idEstadoLectura = $idEstadoLectura;

        return $this;
    }

    /**
     * Get idEstadoLectura
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstadoLectura 
     */
    public function getIdEstadoLectura()
    {
        return $this->idEstadoLectura;
    }

    /**
     * Set idTipoResultado
     *
     * @param \Minsal\SimagdBundle\Entity\CtlTipoResultado $idTipoResultado
     * @return ImgLectura
     */
    public function setIdTipoResultado(\Minsal\SimagdBundle\Entity\CtlTipoResultado $idTipoResultado = null)
    {
        $this->idTipoResultado = $idTipoResultado;

        return $this;
    }

    /**
     * Get idTipoResultado
     *
     * @return \Minsal\SimagdBundle\Entity\CtlTipoResultado 
     */
    public function getIdTipoResultado()
    {
        return $this->idTipoResultado;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgLectura
     */
    public function setIdEstablecimiento(\Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento = null)
    {
        $this->idEstablecimiento = $idEstablecimiento;

        return $this;
    }

    /**
     * Get idEstablecimiento
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimiento()
    {
        return $this->idEstablecimiento;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgLectura
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
