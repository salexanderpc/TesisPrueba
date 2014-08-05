<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPreinscripcion
 *
 * @ORM\Table(name="img_preinscripcion", indexes={@ORM\Index(name="IDX_7FCEF03FC02E5491", columns={"id_modalidad_imagenologia"}), @ORM\Index(name="IDX_7FCEF03F7DFA12F6", columns={"id_establecimiento"}), @ORM\Index(name="IDX_7FCEF03F50AC6C0", columns={"id_establecimiento_referido"}), @ORM\Index(name="IDX_7FCEF03F9C29FA00", columns={"id_establecimiento_diagnosticante"}), @ORM\Index(name="IDX_7FCEF03F701624C4", columns={"id_expediente"}), @ORM\Index(name="IDX_7FCEF03F44A2C069", columns={"id_area_atencion"}), @ORM\Index(name="IDX_7FCEF03F695EA351", columns={"id_atencion"}), @ORM\Index(name="IDX_7FCEF03F890253C7", columns={"id_empleado"})})
 * @ORM\Entity
 */
class ImgPreinscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="img_preinscripcion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_clinicos", type="string", nullable=false)
     */
    private $datosClinicos;

    /**
     * @var string
     *
     * @ORM\Column(name="consulta_por", type="string", nullable=true)
     */
    private $consultaPor;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_clinico", type="string", nullable=true)
     */
    private $estadoClinico;

    /**
     * @var string
     *
     * @ORM\Column(name="hipotesis_diagnostica", type="string", nullable=false)
     */
    private $hipotesisDiagnostica;

    /**
     * @var string
     *
     * @ORM\Column(name="investigar", type="string", nullable=false)
     */
    private $investigar;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentes_clinicos_relevantes", type="string", nullable=true)
     */
    private $antecedentesClinicosRelevantes;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_medica_preinscripcion", type="string", nullable=false)
     */
    private $justificacionMedicaPreinscripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion_preinscripcion", type="datetime", nullable=true)
     */
    private $fechaCreacionPreinscripcion = 'now()';

    /**
     * @var boolean
     *
     * @ORM\Column(name="referir_paciente", type="boolean", nullable=true)
     */
    private $referirPaciente = false;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_referencia", type="string", length=100, nullable=true)
     */
    private $justificacionReferencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_proxima_consulta", type="date", nullable=true)
     */
    private $fechaProximaConsulta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="necesita_cita", type="boolean", nullable=true)
     */
    private $necesitaCita = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requiere_diagnostico", type="boolean", nullable=true)
     */
    private $requiereDiagnostico = false;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_diagnostico", type="string", length=100, nullable=true)
     */
    private $justificacionDiagnostico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paciente_ambulatorio", type="boolean", nullable=true)
     */
    private $pacienteAmbulatorio = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_sala", type="integer", nullable=true)
     */
    private $numeroSala;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_cama", type="integer", nullable=true)
     */
    private $numeroCama;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paciente_desconocido", type="boolean", nullable=true)
     */
    private $pacienteDesconocido = false;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_actual_lb", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pesoActualLb;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_actual_kg", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pesoActualKg;

    /**
     * @var string
     *
     * @ORM\Column(name="talla_paciente", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $tallaPaciente;

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id")
     * })
     */
    private $idEstablecimiento;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_referido", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoReferido;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_establecimiento_diagnosticante", referencedColumnName="id")
     * })
     */
    private $idEstablecimientoDiagnosticante;

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
     * @var \CtlAreaAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAreaAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_area_atencion", referencedColumnName="id")
     * })
     */
    private $idAreaAtencion;

    /**
     * @var \CtlAtencion
     *
     * @ORM\ManyToOne(targetEntity="CtlAtencion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_atencion", referencedColumnName="id")
     * })
     */
    private $idAtencion;

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
     * Set datosClinicos
     *
     * @param string $datosClinicos
     * @return ImgPreinscripcion
     */
    public function setDatosClinicos($datosClinicos)
    {
        $this->datosClinicos = $datosClinicos;

        return $this;
    }

    /**
     * Get datosClinicos
     *
     * @return string 
     */
    public function getDatosClinicos()
    {
        return $this->datosClinicos;
    }

    /**
     * Set consultaPor
     *
     * @param string $consultaPor
     * @return ImgPreinscripcion
     */
    public function setConsultaPor($consultaPor)
    {
        $this->consultaPor = $consultaPor;

        return $this;
    }

    /**
     * Get consultaPor
     *
     * @return string 
     */
    public function getConsultaPor()
    {
        return $this->consultaPor;
    }

    /**
     * Set estadoClinico
     *
     * @param string $estadoClinico
     * @return ImgPreinscripcion
     */
    public function setEstadoClinico($estadoClinico)
    {
        $this->estadoClinico = $estadoClinico;

        return $this;
    }

    /**
     * Get estadoClinico
     *
     * @return string 
     */
    public function getEstadoClinico()
    {
        return $this->estadoClinico;
    }

    /**
     * Set hipotesisDiagnostica
     *
     * @param string $hipotesisDiagnostica
     * @return ImgPreinscripcion
     */
    public function setHipotesisDiagnostica($hipotesisDiagnostica)
    {
        $this->hipotesisDiagnostica = $hipotesisDiagnostica;

        return $this;
    }

    /**
     * Get hipotesisDiagnostica
     *
     * @return string 
     */
    public function getHipotesisDiagnostica()
    {
        return $this->hipotesisDiagnostica;
    }

    /**
     * Set investigar
     *
     * @param string $investigar
     * @return ImgPreinscripcion
     */
    public function setInvestigar($investigar)
    {
        $this->investigar = $investigar;

        return $this;
    }

    /**
     * Get investigar
     *
     * @return string 
     */
    public function getInvestigar()
    {
        return $this->investigar;
    }

    /**
     * Set antecedentesClinicosRelevantes
     *
     * @param string $antecedentesClinicosRelevantes
     * @return ImgPreinscripcion
     */
    public function setAntecedentesClinicosRelevantes($antecedentesClinicosRelevantes)
    {
        $this->antecedentesClinicosRelevantes = $antecedentesClinicosRelevantes;

        return $this;
    }

    /**
     * Get antecedentesClinicosRelevantes
     *
     * @return string 
     */
    public function getAntecedentesClinicosRelevantes()
    {
        return $this->antecedentesClinicosRelevantes;
    }

    /**
     * Set justificacionMedicaPreinscripcion
     *
     * @param string $justificacionMedicaPreinscripcion
     * @return ImgPreinscripcion
     */
    public function setJustificacionMedicaPreinscripcion($justificacionMedicaPreinscripcion)
    {
        $this->justificacionMedicaPreinscripcion = $justificacionMedicaPreinscripcion;

        return $this;
    }

    /**
     * Get justificacionMedicaPreinscripcion
     *
     * @return string 
     */
    public function getJustificacionMedicaPreinscripcion()
    {
        return $this->justificacionMedicaPreinscripcion;
    }

    /**
     * Set fechaCreacionPreinscripcion
     *
     * @param \DateTime $fechaCreacionPreinscripcion
     * @return ImgPreinscripcion
     */
    public function setFechaCreacionPreinscripcion($fechaCreacionPreinscripcion)
    {
        $this->fechaCreacionPreinscripcion = $fechaCreacionPreinscripcion;

        return $this;
    }

    /**
     * Get fechaCreacionPreinscripcion
     *
     * @return \DateTime 
     */
    public function getFechaCreacionPreinscripcion()
    {
        return $this->fechaCreacionPreinscripcion;
    }

    /**
     * Set referirPaciente
     *
     * @param boolean $referirPaciente
     * @return ImgPreinscripcion
     */
    public function setReferirPaciente($referirPaciente)
    {
        $this->referirPaciente = $referirPaciente;

        return $this;
    }

    /**
     * Get referirPaciente
     *
     * @return boolean 
     */
    public function getReferirPaciente()
    {
        return $this->referirPaciente;
    }

    /**
     * Set justificacionReferencia
     *
     * @param string $justificacionReferencia
     * @return ImgPreinscripcion
     */
    public function setJustificacionReferencia($justificacionReferencia)
    {
        $this->justificacionReferencia = $justificacionReferencia;

        return $this;
    }

    /**
     * Get justificacionReferencia
     *
     * @return string 
     */
    public function getJustificacionReferencia()
    {
        return $this->justificacionReferencia;
    }

    /**
     * Set fechaProximaConsulta
     *
     * @param \DateTime $fechaProximaConsulta
     * @return ImgPreinscripcion
     */
    public function setFechaProximaConsulta($fechaProximaConsulta)
    {
        $this->fechaProximaConsulta = $fechaProximaConsulta;

        return $this;
    }

    /**
     * Get fechaProximaConsulta
     *
     * @return \DateTime 
     */
    public function getFechaProximaConsulta()
    {
        return $this->fechaProximaConsulta;
    }

    /**
     * Set necesitaCita
     *
     * @param boolean $necesitaCita
     * @return ImgPreinscripcion
     */
    public function setNecesitaCita($necesitaCita)
    {
        $this->necesitaCita = $necesitaCita;

        return $this;
    }

    /**
     * Get necesitaCita
     *
     * @return boolean 
     */
    public function getNecesitaCita()
    {
        return $this->necesitaCita;
    }

    /**
     * Set requiereDiagnostico
     *
     * @param boolean $requiereDiagnostico
     * @return ImgPreinscripcion
     */
    public function setRequiereDiagnostico($requiereDiagnostico)
    {
        $this->requiereDiagnostico = $requiereDiagnostico;

        return $this;
    }

    /**
     * Get requiereDiagnostico
     *
     * @return boolean 
     */
    public function getRequiereDiagnostico()
    {
        return $this->requiereDiagnostico;
    }

    /**
     * Set justificacionDiagnostico
     *
     * @param string $justificacionDiagnostico
     * @return ImgPreinscripcion
     */
    public function setJustificacionDiagnostico($justificacionDiagnostico)
    {
        $this->justificacionDiagnostico = $justificacionDiagnostico;

        return $this;
    }

    /**
     * Get justificacionDiagnostico
     *
     * @return string 
     */
    public function getJustificacionDiagnostico()
    {
        return $this->justificacionDiagnostico;
    }

    /**
     * Set pacienteAmbulatorio
     *
     * @param boolean $pacienteAmbulatorio
     * @return ImgPreinscripcion
     */
    public function setPacienteAmbulatorio($pacienteAmbulatorio)
    {
        $this->pacienteAmbulatorio = $pacienteAmbulatorio;

        return $this;
    }

    /**
     * Get pacienteAmbulatorio
     *
     * @return boolean 
     */
    public function getPacienteAmbulatorio()
    {
        return $this->pacienteAmbulatorio;
    }

    /**
     * Set numeroSala
     *
     * @param integer $numeroSala
     * @return ImgPreinscripcion
     */
    public function setNumeroSala($numeroSala)
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }

    /**
     * Get numeroSala
     *
     * @return integer 
     */
    public function getNumeroSala()
    {
        return $this->numeroSala;
    }

    /**
     * Set numeroCama
     *
     * @param integer $numeroCama
     * @return ImgPreinscripcion
     */
    public function setNumeroCama($numeroCama)
    {
        $this->numeroCama = $numeroCama;

        return $this;
    }

    /**
     * Get numeroCama
     *
     * @return integer 
     */
    public function getNumeroCama()
    {
        return $this->numeroCama;
    }

    /**
     * Set pacienteDesconocido
     *
     * @param boolean $pacienteDesconocido
     * @return ImgPreinscripcion
     */
    public function setPacienteDesconocido($pacienteDesconocido)
    {
        $this->pacienteDesconocido = $pacienteDesconocido;

        return $this;
    }

    /**
     * Get pacienteDesconocido
     *
     * @return boolean 
     */
    public function getPacienteDesconocido()
    {
        return $this->pacienteDesconocido;
    }

    /**
     * Set pesoActualLb
     *
     * @param string $pesoActualLb
     * @return ImgPreinscripcion
     */
    public function setPesoActualLb($pesoActualLb)
    {
        $this->pesoActualLb = $pesoActualLb;

        return $this;
    }

    /**
     * Get pesoActualLb
     *
     * @return string 
     */
    public function getPesoActualLb()
    {
        return $this->pesoActualLb;
    }

    /**
     * Set pesoActualKg
     *
     * @param string $pesoActualKg
     * @return ImgPreinscripcion
     */
    public function setPesoActualKg($pesoActualKg)
    {
        $this->pesoActualKg = $pesoActualKg;

        return $this;
    }

    /**
     * Get pesoActualKg
     *
     * @return string 
     */
    public function getPesoActualKg()
    {
        return $this->pesoActualKg;
    }

    /**
     * Set tallaPaciente
     *
     * @param string $tallaPaciente
     * @return ImgPreinscripcion
     */
    public function setTallaPaciente($tallaPaciente)
    {
        $this->tallaPaciente = $tallaPaciente;

        return $this;
    }

    /**
     * Get tallaPaciente
     *
     * @return string 
     */
    public function getTallaPaciente()
    {
        return $this->tallaPaciente;
    }

    /**
     * Set idModalidadImagenologia
     *
     * @param \Minsal\SimagdBundle\Entity\CtlModalidadImagenologia $idModalidadImagenologia
     * @return ImgPreinscripcion
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

    /**
     * Set idEstablecimiento
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimiento
     * @return ImgPreinscripcion
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
     * Set idEstablecimientoReferido
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoReferido
     * @return ImgPreinscripcion
     */
    public function setIdEstablecimientoReferido(\Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoReferido = null)
    {
        $this->idEstablecimientoReferido = $idEstablecimientoReferido;

        return $this;
    }

    /**
     * Get idEstablecimientoReferido
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoReferido()
    {
        return $this->idEstablecimientoReferido;
    }

    /**
     * Set idEstablecimientoDiagnosticante
     *
     * @param \Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoDiagnosticante
     * @return ImgPreinscripcion
     */
    public function setIdEstablecimientoDiagnosticante(\Minsal\SimagdBundle\Entity\CtlEstablecimiento $idEstablecimientoDiagnosticante = null)
    {
        $this->idEstablecimientoDiagnosticante = $idEstablecimientoDiagnosticante;

        return $this;
    }

    /**
     * Get idEstablecimientoDiagnosticante
     *
     * @return \Minsal\SimagdBundle\Entity\CtlEstablecimiento 
     */
    public function getIdEstablecimientoDiagnosticante()
    {
        return $this->idEstablecimientoDiagnosticante;
    }

    /**
     * Set idExpediente
     *
     * @param \Minsal\SimagdBundle\Entity\MntExpediente $idExpediente
     * @return ImgPreinscripcion
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

    /**
     * Set idAreaAtencion
     *
     * @param \Minsal\SimagdBundle\Entity\CtlAreaAtencion $idAreaAtencion
     * @return ImgPreinscripcion
     */
    public function setIdAreaAtencion(\Minsal\SimagdBundle\Entity\CtlAreaAtencion $idAreaAtencion = null)
    {
        $this->idAreaAtencion = $idAreaAtencion;

        return $this;
    }

    /**
     * Get idAreaAtencion
     *
     * @return \Minsal\SimagdBundle\Entity\CtlAreaAtencion 
     */
    public function getIdAreaAtencion()
    {
        return $this->idAreaAtencion;
    }

    /**
     * Set idAtencion
     *
     * @param \Minsal\SimagdBundle\Entity\CtlAtencion $idAtencion
     * @return ImgPreinscripcion
     */
    public function setIdAtencion(\Minsal\SimagdBundle\Entity\CtlAtencion $idAtencion = null)
    {
        $this->idAtencion = $idAtencion;

        return $this;
    }

    /**
     * Get idAtencion
     *
     * @return \Minsal\SimagdBundle\Entity\CtlAtencion 
     */
    public function getIdAtencion()
    {
        return $this->idAtencion;
    }

    /**
     * Set idEmpleado
     *
     * @param \Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado
     * @return ImgPreinscripcion
     */
    public function setIdEmpleado(\Minsal\SimagdBundle\Entity\MntEmpleado $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \Minsal\SimagdBundle\Entity\MntEmpleado 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }
}
