<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPacsEstablecimiento
 *
 * @ORM\Table(name="ctl_pacs_establecimiento", indexes={@ORM\Index(name="IDX_3DFC3DD97DFA12F6", columns={"id_establecimiento"})})
 * @ORM\Entity(repositoryClass="Minsal\SimagdBundle\Entity\CtlPacsEstablecimientoRepository")
 */
class CtlPacsEstablecimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_pacs_establecimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pacs", type="string", nullable=true)
     */
    private $nombrePacs;

    /**
     * @var string
     *
     * @ORM\Column(name="url_pacs", type="string", nullable=false)
     */
    private $urlPacs;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_pacs", type="string", nullable=false)
     */
    private $usuarioPacs;

    /**
     * @var string
     *
     * @ORM\Column(name="password_pacs", type="string", nullable=false)
     */
    private $passwordPacs;

    /**
     * @var integer
     *
     * @ORM\Column(name="puerto_pacs", type="integer", nullable=false)
     */
    private $puertoPacs = '5432';

    /**
     * @var string
     *
     * @ORM\Column(name="host_pacs", type="string", nullable=false)
     */
    private $hostPacs;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion_estudio_pacs", type="smallint", nullable=true)
     */
    private $duracionEstudioPacs = '48';

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
     * Set nombrePacs
     *
     * @param string $nombrePacs
     * @return CtlPacsEstablecimiento
     */
    public function setNombrePacs($nombrePacs)
    {
        $this->nombrePacs = $nombrePacs;

        return $this;
    }

    /**
     * Get nombrePacs
     *
     * @return string 
     */
    public function getNombrePacs()
    {
        return $this->nombrePacs;
    }

    /**
     * Set urlPacs
     *
     * @param string $urlPacs
     * @return CtlPacsEstablecimiento
     */
    public function setUrlPacs($urlPacs)
    {
        $this->urlPacs = $urlPacs;

        return $this;
    }

    /**
     * Get urlPacs
     *
     * @return string 
     */
    public function getUrlPacs()
    {
        return $this->urlPacs;
    }

    /**
     * Set usuarioPacs
     *
     * @param string $usuarioPacs
     * @return CtlPacsEstablecimiento
     */
    public function setUsuarioPacs($usuarioPacs)
    {
        $this->usuarioPacs = $usuarioPacs;

        return $this;
    }

    /**
     * Get usuarioPacs
     *
     * @return string 
     */
    public function getUsuarioPacs()
    {
        return $this->usuarioPacs;
    }

    /**
     * Set passwordPacs
     *
     * @param string $passwordPacs
     * @return CtlPacsEstablecimiento
     */
    public function setPasswordPacs($passwordPacs)
    {
        $this->passwordPacs = $passwordPacs;

        return $this;
    }

    /**
     * Get passwordPacs
     *
     * @return string 
     */
    public function getPasswordPacs()
    {
        return $this->passwordPacs;
    }

    /**
     * Set puertoPacs
     *
     * @param integer $puertoPacs
     * @return CtlPacsEstablecimiento
     */
    public function setPuertoPacs($puertoPacs)
    {
        $this->puertoPacs = $puertoPacs;

        return $this;
    }

    /**
     * Get puertoPacs
     *
     * @return integer 
     */
    public function getPuertoPacs()
    {
        return $this->puertoPacs;
    }

    /**
     * Set hostPacs
     *
     * @param string $hostPacs
     * @return CtlPacsEstablecimiento
     */
    public function setHostPacs($hostPacs)
    {
        $this->hostPacs = $hostPacs;

        return $this;
    }

    /**
     * Get hostPacs
     *
     * @return string 
     */
    public function getHostPacs()
    {
        return $this->hostPacs;
    }

    /**
     * Set duracionEstudioPacs
     *
     * @param integer $duracionEstudioPacs
     * @return CtlPacsEstablecimiento
     */
    public function setDuracionEstudioPacs($duracionEstudioPacs)
    {
        $this->duracionEstudioPacs = $duracionEstudioPacs;

        return $this;
    }

    /**
     * Get duracionEstudioPacs
     *
     * @return integer 
     */
    public function getDuracionEstudioPacs()
    {
        return $this->duracionEstudioPacs;
    }

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return CtlPacsEstablecimiento
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
