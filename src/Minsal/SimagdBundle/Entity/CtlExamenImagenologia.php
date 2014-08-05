<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlExamenImagenologia
 *
 * @ORM\Table(name="ctl_examen_imagenologia", indexes={@ORM\Index(name="IDX_7035C847C02E5491", columns={"id_modalidad_imagenologia"})})
 * @ORM\Entity
 */
class CtlExamenImagenologia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_examen_imagenologia_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_examen", type="string", nullable=false)
     */
    private $nombreExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_examen", type="string", nullable=true)
     */
    private $codigoExamen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="examen_habilitado", type="boolean", nullable=true)
     */
    private $examenHabilitado = true;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_examen", type="string", length=100, nullable=true)
     */
    private $descripcionExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones_examen", type="string", length=50, nullable=true)
     */
    private $observacionesExamen;

    /**
     * @var \CtlModalidadImagenologia
     *
     * @ORM\ManyToOne(targetEntity="CtlModalidadImagenologia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_imagenologia", referencedColumnName="id")
     * })
     */
    private $idModalidadImagenologia;



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
     * Set nombreExamen
     *
     * @param string $nombreExamen
     * @return CtlExamenImagenologia
     */
    public function setNombreExamen($nombreExamen)
    {
        $this->nombreExamen = $nombreExamen;

        return $this;
    }

    /**
     * Get nombreExamen
     *
     * @return string 
     */
    public function getNombreExamen()
    {
        return $this->nombreExamen;
    }

    /**
     * Set codigoExamen
     *
     * @param string $codigoExamen
     * @return CtlExamenImagenologia
     */
    public function setCodigoExamen($codigoExamen)
    {
        $this->codigoExamen = $codigoExamen;

        return $this;
    }

    /**
     * Get codigoExamen
     *
     * @return string 
     */
    public function getCodigoExamen()
    {
        return $this->codigoExamen;
    }

    /**
     * Set examenHabilitado
     *
     * @param boolean $examenHabilitado
     * @return CtlExamenImagenologia
     */
    public function setExamenHabilitado($examenHabilitado)
    {
        $this->examenHabilitado = $examenHabilitado;

        return $this;
    }

    /**
     * Get examenHabilitado
     *
     * @return boolean 
     */
    public function getExamenHabilitado()
    {
        return $this->examenHabilitado;
    }

    /**
     * Set descripcionExamen
     *
     * @param string $descripcionExamen
     * @return CtlExamenImagenologia
     */
    public function setDescripcionExamen($descripcionExamen)
    {
        $this->descripcionExamen = $descripcionExamen;

        return $this;
    }

    /**
     * Get descripcionExamen
     *
     * @return string 
     */
    public function getDescripcionExamen()
    {
        return $this->descripcionExamen;
    }

    /**
     * Set observacionesExamen
     *
     * @param string $observacionesExamen
     * @return CtlExamenImagenologia
     */
    public function setObservacionesExamen($observacionesExamen)
    {
        $this->observacionesExamen = $observacionesExamen;

        return $this;
    }

    /**
     * Get observacionesExamen
     *
     * @return string 
     */
    public function getObservacionesExamen()
    {
        return $this->observacionesExamen;
    }

    /**
     * Set idModalidadImagenologia
     *
     * @param \Minsal\SimagdBundle\Entity\CtlModalidadImagenologia $idModalidadImagenologia
     * @return CtlExamenImagenologia
     */
    public function setIdModalidadImagenologia(\Minsal\SimagdBundle\Entity\CtlModalidadImagenologia $idModalidadImagenologia = null)
    {
        $this->idModalidadImagenologia = $idModalidadImagenologia;

        return $this;
    }

    /**
     * Get idModalidadImagenologia
     *
     * @return \Minsal\SimagdBundle\Entity\CtlModalidadImagenologia 
     */
    public function getIdModalidadImagenologia()
    {
        return $this->idModalidadImagenologia;
    }
}
