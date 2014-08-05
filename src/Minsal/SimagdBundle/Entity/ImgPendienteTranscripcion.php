<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPendienteTranscripcion
 *
 * @ORM\Table(name="img_pendiente_transcripcion", indexes={@ORM\Index(name="IDX_A5021FE218971421", columns={"id_lectura"}), @ORM\Index(name="IDX_A5021FE27DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ImgPendienteTranscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_pendiente_transcripcion_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="fue_impugnado", type="boolean", nullable=true)
     */
    private $fueImpugnado = false;

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
     * @return ImgPendienteTranscripcion
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
     * Set fueImpugnado
     *
     * @param boolean $fueImpugnado
     * @return ImgPendienteTranscripcion
     */
    public function setFueImpugnado($fueImpugnado)
    {
        $this->fueImpugnado = $fueImpugnado;

        return $this;
    }

    /**
     * Get fueImpugnado
     *
     * @return boolean 
     */
    public function getFueImpugnado()
    {
        return $this->fueImpugnado;
    }

    /**
     * Set idLectura
     *
     * @param \Minsal\SimagdBundle\Entity\ImgLectura $idLectura
     * @return ImgPendienteTranscripcion
     */
    public function setIdLectura(\Minsal\SimagdBundle\Entity\ImgLectura $idLectura = null)
    {
        $this->idLectura = $idLectura;

        return $this;
    }

    /**
     * Get idLectura
     *
     * @return \Minsal\SimagdBundle\Entity\ImgLectura 
     */
    public function getIdLectura()
    {
        return $this->idLectura;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgPendienteTranscripcion
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
}
