<?php

namespace Minsal\PrototipoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlPacsEstablecimientoAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nombrePacs')
            ->add('urlPacs')
            ->add('usuarioPacs')
            ->add('passwordPacs')
            ->add('puertoPacs')
            ->add('hostPacs')
            ->add('duracionEstudioPacs')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nombrePacs')
            ->add('urlPacs')
            ->add('usuarioPacs')
            ->add('passwordPacs')
            ->add('puertoPacs')
            ->add('hostPacs')
            ->add('duracionEstudioPacs')
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
            //->add('id') # No se agrega porque este campo es autoincrement
            ->add('nombrePacs',null,array('label' => 'Nombre del Servidor PACS *' ))
            ->add('idEstablecimiento', 'entity', array('label' => 'Establecimiento',
                    'class' => 'MinsalPrototipoBundle:CtlEstablecimiento',
                    'query_builder' => function($repositorio) {
                return $repositorio->obtenerEstablecimiento();
            }))    
            ->add('urlPacs')
            ->add('usuarioPacs')
            ->add('passwordPacs')
            ->add('puertoPacs')
            ->add('hostPacs')
            ->add('duracionEstudioPacs')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombrePacs')
            ->add('urlPacs')
            ->add('usuarioPacs')
            ->add('passwordPacs')
            ->add('puertoPacs')
            ->add('hostPacs')
            ->add('duracionEstudioPacs')
        ;
    }
    
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo CtlPais
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($pais) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        //$pais->setIdUsuarioReg($user);
       // $pais->setFechaHoraReg(new \DateTime());
    }
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo CtlPais
     * con los valores del formulario.
     * 
     */
    public function preUpdate($pais) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        //$pais->setIdUsuarioMod($user);
        //$pais->setFechaHoraMod(new \DateTime());
    }
}
