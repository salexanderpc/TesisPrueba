<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgEstudioPaciente
 *
 * @ORM\Table(name="img_estudio_paciente", indexes={@ORM\Index(name="IDX_20B8CA259E9497EB", columns={"id_procedimiento_realizado"}), @ORM\Index(name="IDX_20B8CA257DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_20B8CA25701624C4", columns={"id_expediente"})})
 * @ORM\Entity
 */
class ImgEstudioPaciente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_estudio_paciente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_estudio", type="datetime", nullable=true)
     */
    private $fechaEstudio = 'now()';

    /**
     * @var integer
     *
     * @ORM\Column(name="estudio_uid", type="integer", nullable=false)
     */
    private $estudioUid;

    /**
     * @var string
     *
     * @ORM\Column(name="series_uid", type="string", length=100, nullable=false)
     */
    private $seriesUid;

    /**
     * @var string
     *
     * @ORM\Column(name="servidor", type="string", nullable=true)
     */
    private $servidor;

    /**
     * @var \ImgProcedimientoRealizado
     *
     * @ORM\ManyToOne(targetEntity="ImgProcedimientoRealizado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_procedimiento_realizado", referencedColumnName="id")
     * })
     */
    private $idProcedimientoRealizado;

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
     * @var \MntExpediente
     *
     * @ORM\ManyToOne(targetEntity="MntExpediente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediente", referencedColumnName="id")
     * })
     */
    private $idExpediente;



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
     * Set fechaEstudio
     *
     * @param \DateTime $fechaEstudio
     * @return ImgEstudioPaciente
     */
    public function setFechaEstudio($fechaEstudio)
    {
        $this->fechaEstudio = $fechaEstudio;

        return $this;
    }

    /**
     * Get fechaEstudio
     *
     * @return \DateTime 
     */
    public function getFechaEstudio()
    {
        return $this->fechaEstudio;
    }

    /**
     * Set estudioUid
     *
     * @param integer $estudioUid
     * @return ImgEstudioPaciente
     */
    public function setEstudioUid($estudioUid)
    {
        $this->estudioUid = $estudioUid;

        return $this;
    }

    /**
     * Get estudioUid
     *
     * @return integer 
     */
    public function getEstudioUid()
    {
        return $this->estudioUid;
    }

    /**
     * Set seriesUid
     *
     * @param string $seriesUid
     * @return ImgEstudioPaciente
     */
    public function setSeriesUid($seriesUid)
    {
        $this->seriesUid = $seriesUid;

        return $this;
    }

    /**
     * Get seriesUid
     *
     * @return string 
     */
    public function getSeriesUid()
    {
        return $this->seriesUid;
    }

    /**
     * Set servidor
     *
     * @param string $servidor
     * @return ImgEstudioPaciente
     */
    public function setServidor($servidor)
    {
        $this->servidor = $servidor;

        return $this;
    }

    /**
     * Get servidor
     *
     * @return string 
     */
    public function getServidor()
    {
        return $this->servidor;
    }

    /**
     * Set idProcedimientoRealizado
     *
     * @param \Minsal\SimagdBundle\Entity\ImgProcedimientoRealizado $idProcedimientoRealizado
     * @return ImgEstudioPaciente
     */
    public function setIdProcedimientoRealizado(\Minsal\SimagdBundle\Entity\ImgProcedimientoRealizado $idProcedimientoRealizado = null)
    {
        $this->idProcedimientoRealizado = $idProcedimientoRealizado;

        return $this;
    }

    /**
     * Get idProcedimientoRealizado
     *
     * @return \Minsal\SimagdBundle\Entity\ImgProcedimientoRealizado 
     */
    public function getIdProcedimientoRealizado()
    {
        return $this->idProcedimientoRealizado;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgEstudioPaciente
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
     * Set idExpediente
     *
     * @param \Minsal\SimagdBundle\Entity\MntExpediente $idExpediente
     * @return ImgEstudioPaciente
     */
    public function setIdExpediente(\Minsal\SimagdBundle\Entity\MntExpediente $idExpediente = null)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return \Minsal\SimagdBundle\Entity\MntExpediente 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }
}
