<?php

namespace Minsal\SimagdBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Minsal\SimagdBundle\Entity\ImgPreinscripcion;

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
            /*->with('Samuel')*/
            ->add('id')
            ->add('idExpediente', 'entity', array('label' => 'expediente',
                    'class' => 'SimagdBundle:MntExpediente',
                    'property' => 'numero',
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('ex')
                                ->where('ex.idExpediente = :expediente')
                                ->orderBy('ex.numero', 'ASC')
                                ->setParameter('idExpediente', 'false');
                    }
                ))    
                
                //->end()
            /*->with('Others')*/
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion','textarea')
          
                /*Añadir esta fecha de creacion mediante prepersist*/
            //->add('fechaCreacionPreinscripcion')  
            ->add('referirPaciente')
            ->add('justificacionReferencia',null  ,array('label'=>'Motivo de referencia', 'attr'=>array("title" => 'Motivo de referencia')))
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
             //->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                
            ->add('id')
            ->add('referirPaciente')
            ->add('datosClinicos')
            ->add('consultaPor')
            ->add('estadoClinico')
            ->add('hipotesisDiagnostica')
            ->add('investigar')
            ->add('antecedentesClinicosRelevantes')
            ->add('justificacionMedicaPreinscripcion')
            ->add('fechaCreacionPreinscripcion')
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
    
    
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('buscar');
    }
    
    
    public function getTemplate($name)
    {
        switch ($name) {
            case 'edit':
                return 'MinsalSimagdBundle:imgPreinscripcion:edit.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
