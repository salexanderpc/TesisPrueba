<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPendienteRealizacion
 *
 * @ORM\Table(name="img_pendiente_realizacion", indexes={@ORM\Index(name="IDX_43198E5794328D4F", columns={"id_preinscripcion"}), @ORM\Index(name="IDX_43198E577DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity
 */
class ImgPendienteRealizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_pendiente_realizacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso_lista", type="datetime", nullable=true)
     */
    private $fechaIngresoLista = 'now()';

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
     * @return ImgPendienteRealizacion
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
     * Set idPreinscripcion
     *
     * @param \Minsal\PrototipoBundle\Entity\ImgPreinscripcion $idPreinscripcion
     * @return ImgPendienteRealizacion
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
     * Set idEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgPendienteRealizacion
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
