<?php

namespace Minsal\PrototipoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlModalidadImagenologiaEstablecimientoCitacion
 *
 * @ORM\Table(name="ctl_modalidad_imagenologia_establecimiento_citacion", indexes={@ORM\Index(name="IDX_DDB7E0E3E2306CDC", columns={"id_modalidad_imagenologia_establecimiento"})})
 * @ORM\Entity
 */
class CtlModalidadImagenologiaEstablecimientoCitacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_modalidad_imagenologia_establecimiento_citacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximo_citas_dia", type="smallint", nullable=true)
     */
    private $maximoCitasDia = '15';

    /**
     * @var integer
     *
     * @ORM\Column(name="maximo_citas_turno", type="smallint", nullable=true)
     */
    private $maximoCitasTurno;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximo_citas_hora", type="smallint", nullable=true)
     */
    private $maximoCitasHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximo_citas_medico", type="smallint", nullable=true)
     */
    private $maximoCitasMedico;

    /**
     * @var \CtlModalidadImagenologiaEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlModalidadImagenologiaEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modalidad_imagenologia_establecimiento", referencedColumnName="id")
     * })
     */
    private $idModalidadImagenologiaEstablecimiento;



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
     * Set maximoCitasDia
     *
     * @param integer $maximoCitasDia
     * @return CtlModalidadImagenologiaEstablecimientoCitacion
     */
    public function setMaximoCitasDia($maximoCitasDia)
    {
        $this->maximoCitasDia = $maximoCitasDia;

        return $this;
    }

    /**
     * Get maximoCitasDia
     *
     * @return integer 
     */
    public function getMaximoCitasDia()
    {
        return $this->maximoCitasDia;
    }

    /**
     * Set maximoCitasTurno
     *
     * @param integer $maximoCitasTurno
     * @return CtlModalidadImagenologiaEstablecimientoCitacion
     */
    public function setMaximoCitasTurno($maximoCitasTurno)
    {
        $this->maximoCitasTurno = $maximoCitasTurno;

        return $this;
    }

    /**
     * Get maximoCitasTurno
     *
     * @return integer 
     */
    public function getMaximoCitasTurno()
    {
        return $this->maximoCitasTurno;
    }

    /**
     * Set maximoCitasHora
     *
     * @param integer $maximoCitasHora
     * @return CtlModalidadImagenologiaEstablecimientoCitacion
     */
    public function setMaximoCitasHora($maximoCitasHora)
    {
        $this->maximoCitasHora = $maximoCitasHora;

        return $this;
    }

    /**
     * Get maximoCitasHora
     *
     * @return integer 
     */
    public function getMaximoCitasHora()
    {
        return $this->maximoCitasHora;
    }

    /**
     * Set maximoCitasMedico
     *
     * @param integer $maximoCitasMedico
     * @return CtlModalidadImagenologiaEstablecimientoCitacion
     */
    public function setMaximoCitasMedico($maximoCitasMedico)
    {
        $this->maximoCitasMedico = $maximoCitasMedico;

        return $this;
    }

    /**
     * Get maximoCitasMedico
     *
     * @return integer 
     */
    public function getMaximoCitasMedico()
    {
        return $this->maximoCitasMedico;
    }

    /**
     * Set idModalidadImagenologiaEstablecimiento
     *
     * @param \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimiento $idModalidadImagenologiaEstablecimiento
     * @return CtlModalidadImagenologiaEstablecimientoCitacion
     */
    public function setIdModalidadImagenologiaEstablecimiento(\Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimiento $idModalidadImagenologiaEstablecimiento = null)
    {
        $this->idModalidadImagenologiaEstablecimiento = $idModalidadImagenologiaEstablecimiento;

        return $this;
    }

    /**
     * Get idModalidadImagenologiaEstablecimiento
     *
     * @return \Minsal\PrototipoBundle\Entity\CtlModalidadImagenologiaEstablecimiento 
     */
    public function getIdModalidadImagenologiaEstablecimiento()
    {
        return $this->idModalidadImagenologiaEstablecimiento;
    }
}
