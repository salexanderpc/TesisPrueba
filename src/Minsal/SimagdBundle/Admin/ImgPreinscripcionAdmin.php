<?php

namespace Minsal\SimagdBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ImgPreinscripcionAdmin extends Admin
{
   
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion')
            ->add('fechaCreacionPreinscripcion')
            ->add('referirPaciente')
            ->add('justificacionReferencia')
            ->add('fechaProximaConsulta')
            ->add('necesitaCita')
            ->add('requiereDiagnostico')
            ->add('justificacionDiagnostico')
            ->add('pacienteAmbulatorio')
            ->add('numeroSala')
            ->add('numeroCama')
            ->add('pacienteDesconocido')
            ->add('pesoActualLb')
            ->add('pesoActualKg')
            ->add('tallaPaciente')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion')
            ->add('fechaCreacionPreinscripcion')
            ->add('referirPaciente')
            ->add('justificacionReferencia')
            ->add('fechaProximaConsulta')
            ->add('necesitaCita')
            ->add('requiereDiagnostico')
            ->add('justificacionDiagnostico')
            ->add('pacienteAmbulatorio')
            ->add('numeroSala')
            ->add('numeroCama')
            ->add('pacienteDesconocido')
            ->add('pesoActualLb')
            ->add('pesoActualKg')
            ->add('tallaPaciente')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          
            ->add('id')
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion')
          
                /*Añadir esta fecha de creacion mediante prepersist*/
           // ->add('fechaCreacionPreinscripcion')  
            ->add('referirPaciente')
            ->add('justificacionReferencia')
            ->add('fechaProximaConsulta')
            ->add('necesitaCita')
            ->add('requiereDiagnostico')
            ->add('justificacionDiagnostico')
            ->add('pacienteAmbulatorio')
            ->add('numeroSala')
            ->add('numeroCama')
            ->add('pacienteDesconocido')
            ->add('pesoActualLb')
            ->add('pesoActualKg')
            ->add('tallaPaciente')
             
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion')
            ->add('fechaCreacionPreinscripcion')
            ->add('referirPaciente')
            ->add('justificacionReferencia')
            ->add('fechaProximaConsulta')
            ->add('necesitaCita')
            ->add('requiereDiagnostico')
            ->add('justificacionDiagnostico')
            ->add('pacienteAmbulatorio')
            ->add('numeroSala')
            ->add('numeroCama')
            ->add('pacienteDesconocido')
            ->add('pesoActualLb')
            ->add('pesoActualKg')
            ->add('tallaPaciente')
        ;
    }
}
