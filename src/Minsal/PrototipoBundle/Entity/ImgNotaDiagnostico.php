<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgNotaDiagnostico
 *
 * @ORM\Table(name="img_nota_diagnostico", indexes={@ORM\Index(name="IDX_9F90E301838319BF", columns={"id_diagnostico"}), @ORM\Index(name="IDX_9F90E3017DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_9F90E3019FA5140", columns={"id_tipo_nota_diagnostico"}), @ORM\Index(name="IDX_9F90E301890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgNotaDiagnostico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_nota_diagnostico_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nota_diagnostico", type="text", nullable=true)
     */
    private $notaDiagnostico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nota_diagnostico", type="datetime", nullable=true)
     */
    private $fechaNotaDiagnostico = 'now()';

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=100, nullable=true)
     */
    private $observaciones;

    /**
     * @var \ImgDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="ImgDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_diagnostico", referencedColumnName="id")
     * })
     */
    private $idDiagnostico;

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
     * @var \CtlTipoNotaDiagnostico
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoNotaDiagnostico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_nota_diagnostico", referencedColumnName="id")
     * })
     */
    private $idTipoNotaDiagnostico;

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
     * Set notaDiagnostico
     *
     * @param string $notaDiagnostico
     * @return ImgNotaDiagnostico
     */
    public function setNotaDiagnostico($notaDiagnostico)
    {
        $this->notaDiagnostico = $notaDiagnostico;

        return $this;
    }

    /**
     * Get notaDiagnostico
     *
     * @return string 
     */
    public function getNotaDiagnostico()
    {
        return $this->notaDiagnostico;
    }

    /**
     * Set fechaNotaDiagnostico
     *
     * @param \DateTime $fechaNotaDiagnostico
     * @return ImgNotaDiagnostico
     */
    public function setFechaNotaDiagnostico($fechaNotaDiagnostico)
    {
        $this->fechaNotaDiagnostico = $fechaNotaDiagnostico;

        return $this;
    }

    /**
     * Get fechaNotaDiagnostico
     *
     * @return \DateTime 
     */
    public function getFechaNotaDiagnostico()
    {
        return $this->fechaNotaDiagnostico;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return ImgNotaDiagnostico
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idDiagnostico
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgDiagnostico $idDiagnostico
     * @return ImgNotaDiagnostico
     */
    public function setIdDiagnostico(\Minsal\PrototipoBundle\Entity\ImgDiagnostico $idDiagnostico = null)
    {
        $this->idDiagnostico = $idDiagnostico;

        return $this;
    }

    /**
     * Get idDiagnostico
     *
     * @return \Minsal\PrototipoBundle\Entity\ImgDiagnostico 
     */
    public function getIdDiagnostico()
    {
        return $this->idDiagnostico;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgNotaDiagnostico
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
     * Set idTipoNotaDiagnostico
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlTipoNotaDiagnostico $idTipoNotaDiagnostico
     * @return ImgNotaDiagnostico
     */
    public function setIdTipoNotaDiagnostico(\Minsal\PrototipoBundle\Entity\CtlTipoNotaDiagnostico $idTipoNotaDiagnostico = null)
    {
        $this->idTipoNotaDiagnostico = $idTipoNotaDiagnostico;

        return $this;
    }

    /**
     * Get idTipoNotaDiagnostico
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlTipoNotaDiagnostico 
     */
    public function getIdTipoNotaDiagnostico()
    {
        return $this->idTipoNotaDiagnostico;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\PrototipoBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgNotaDiagnostico
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
