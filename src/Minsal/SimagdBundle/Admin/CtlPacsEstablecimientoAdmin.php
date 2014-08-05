<?php

namespace Minsal\SimagdBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlPacsEstablecimientoAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
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
    protected function configureListFields(ListMapper $listMapper) {
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
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('id')
                ->add('idEstablecimiento', 'entity', array('label' => 'establecimiento',
                    'class' => 'MinsalSimagdBundle:CtlPacsEstablecimiento',
                    'empty_value'=>'Seleccione la región',
                   /* 'query_builder' => function(EntityRepository $repositorio) {
                        $ruta_accion = explode('/', $this->getRequest()->getUri());
                        $accion = array_pop($ruta_accion);
                        $valor = array_pop($ruta_accion);
                        return $repositorio->obtenerEstablecimientosCoexion($accion, $valor);
                    }*/))
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
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
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

}
