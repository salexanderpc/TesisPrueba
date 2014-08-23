<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPendienteValidacion
 *
 * @ORM\Table(name="img_pendiente_validacion", indexes={@ORM\Index(name="IDX_CF5AE920838319BF", columns={"id_diagnostico"}), @ORM\Index(name="IDX_CF5AE9207DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ImgPendienteValidacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_pendiente_validacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_lista", type="datetime", nullable=true)
     */
    private $fechaIngresoLista = 'now()';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fue_corregido", type="boolean", nullable=true)
     */
    private $fueCorregido = false;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaIngresoLista
     *
     * @param \DateTime $fechaIngresoLista
     * @return ImgPendienteValidacion
     */
    public function setFechaIngresoLista($fechaIngresoLista)
    {
        $this->fechaIngresoLista = $fechaIngresoLista;

        return $this;
    }

    /**
     * Get fechaIngresoLista
     *
     * @return \DateTime 
     */
    public function getFechaIngresoLista()
    {
        return $this->fechaIngresoLista;
    }

    /**
     * Set fueCorregido
     *
     * @param boolean $fueCorregido
     * @return ImgPendienteValidacion
     */
    public function setFueCorregido($fueCorregido)
    {
        $this->fueCorregido = $fueCorregido;

        return $this;
    }

    /**
     * Get fueCorregido
     *
     * @return boolean 
     */
    public function getFueCorregido()
    {
        return $this->fueCorregido;
    }

    /**
     * Set idDiagnostico
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgDiagnostico $idDiagnostico
     * @return ImgPendienteValidacion
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
     * @return ImgPendienteValidacion
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
