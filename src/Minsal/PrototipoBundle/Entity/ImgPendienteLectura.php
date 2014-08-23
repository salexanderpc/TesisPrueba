<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPendienteLectura
 *
 * @ORM\Table(name="img_pendiente_lectura", indexes={@ORM\Index(name="IDX_5A209F076196B359", columns={"id_estudio"}), @ORM\Index(name="IDX_5A209F077DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ImgPendienteLectura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_pendiente_lectura_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="solicitud_post_examen", type="boolean", nullable=true)
     */
    private $solicitudPostExamen = false;

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
     * @return ImgPendienteLectura
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
     * Set solicitudPostExamen
     *
     * @param boolean $solicitudPostExamen
     * @return ImgPendienteLectura
     */
    public function setSolicitudPostExamen($solicitudPostExamen)
    {
        $this->solicitudPostExamen = $solicitudPostExamen;

        return $this;
    }

    /**
     * Get solicitudPostExamen
     *
     * @return boolean 
     */
    public function getSolicitudPostExamen()
    {
        return $this->solicitudPostExamen;
    }

    /**
     * Set idEstudio
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgEstudioPaciente $idEstudio
     * @return ImgPendienteLectura
     */
    public function setIdEstudio(\Minsal\PrototipoBundle\Entity\ImgEstudioPaciente $idEstudio = null)
    {
        $this->idEstudio = $idEstudio;

        return $this;
    }

    /**
     * Get idEstudio
     *
     * @return \Minsal\PrototipoBundle\Entity\ImgEstudioPaciente 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgPendienteLectura
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
