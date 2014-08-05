<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPreinscripcionExploracion
 *
 * @ORM\Table(name="img_preinscripcion_exploracion", uniqueConstraints={@ORM\UniqueConstraint(name="idx_preinscripcion_exploracion", columns={"id_preinscripcion", "id_exploracion_imagenologia"})}, indexes={@ORM\Index(name="IDX_996E2B6494328D4F", columns={"id_preinscripcion"}), @ORM\Index(name="IDX_996E2B64C313222C", columns={"id_exploracion_imagenologia"})})
 * @ORM\Entity
 */
class ImgPreinscripcionExploracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_preinscripcion_exploracion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vistas_requeridas", type="smallint", nullable=true)
     */
    private $vistasRequeridas = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="posicion_examinar", type="string", length=25, nullable=true)
     */
    private $posicionExaminar;

    /**
     * @var string
     *
     * @ORM\Column(name="dimensiones", type="string", length=15, nullable=true)
     */
    private $dimensiones;

    /**
     * @var string
     *
     * @ORM\Column(name="otras_especificaciones", type="string", length=50, nullable=true)
     */
    private $otrasEspecificaciones;

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
     * @var \CtlExploracionImagenologia
     *
     * @ORM\ManyToOne(targetEntity="CtlExploracionImagenologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_exploracion_imagenologia", referencedColumnName="id")
     * })
     */
    private $idExploracionImagenologia;



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
     * Set vistasRequeridas
     *
     * @param integer $vistasRequeridas
     * @return ImgPreinscripcionExploracion
     */
    public function setVistasRequeridas($vistasRequeridas)
    {
        $this->vistasRequeridas = $vistasRequeridas;

        return $this;
    }

    /**
     * Get vistasRequeridas
     *
     * @return integer 
     */
    public function getVistasRequeridas()
    {
        return $this->vistasRequeridas;
    }

    /**
     * Set posicionExaminar
     *
     * @param string $posicionExaminar
     * @return ImgPreinscripcionExploracion
     */
    public function setPosicionExaminar($posicionExaminar)
    {
        $this->posicionExaminar = $posicionExaminar;

        return $this;
    }

    /**
     * Get posicionExaminar
     *
     * @return string 
     */
    public function getPosicionExaminar()
    {
        return $this->posicionExaminar;
    }

    /**
     * Set dimensiones
     *
     * @param string $dimensiones
     * @return ImgPreinscripcionExploracion
     */
    public function setDimensiones($dimensiones)
    {
        $this->dimensiones = $dimensiones;

        return $this;
    }

    /**
     * Get dimensiones
     *
     * @return string 
     */
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    /**
     * Set otrasEspecificaciones
     *
     * @param string $otrasEspecificaciones
     * @return ImgPreinscripcionExploracion
     */
    public function setOtrasEspecificaciones($otrasEspecificaciones)
    {
        $this->otrasEspecificaciones = $otrasEspecificaciones;

        return $this;
    }

    /**
     * Get otrasEspecificaciones
     *
     * @return string 
     */
    public function getOtrasEspecificaciones()
    {
        return $this->otrasEspecificaciones;
    }

    /**
     * Set idPreinscripcion
     *
     * @param \Minsal\SimagdBundle\Entity\ImgPreinscripcion $idPreinscripcion
     * @return ImgPreinscripcionExploracion
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
     * Set idExploracionImagenologia
     *
     * @param \Minsal\SimagdBundle\Entity\CtlExploracionImagenologia $idExploracionImagenologia
     * @return ImgPreinscripcionExploracion
     */
    public function setIdExploracionImagenologia(\Minsal\SimagdBundle\Entity\CtlExploracionImagenologia $idExploracionImagenologia = null)
    {
        $this->idExploracionImagenologia = $idExploracionImagenologia;

        return $this;
    }

    /**
     * Get idExploracionImagenologia
     *
     * @return \Minsal\SimagdBundle\Entity\CtlExploracionImagenologia 
     */
    public function getIdExploracionImagenologia()
    {
        return $this->idExploracionImagenologia;
    }
}
