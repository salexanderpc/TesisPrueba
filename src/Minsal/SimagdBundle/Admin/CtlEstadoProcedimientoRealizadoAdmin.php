<?php

namespace Minsal\SimagdBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlEstadoProcedimientoRealizadoAdmin extends Admin
{
     //public $supportsPreviewMode = true;
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           // ->add('id')
           
            ->add('nombreEstado')
          
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('nombreEstado')
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
            //->add('id')
            /*->with(
               'My Entity Name'
            ) */
           
            ->add('nombreEstado')
                ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nombreEstado')
        ;
    }
    
     public function getTemplate($name)
    {
        switch ($name) {
            case 'edit':
                return 'MinsalSimagdBundle:Default:edit.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }
    
    
    /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo CtlPais
     * con los valores del formulario.
     * 
     */
 
   /* public function prePersist($procedimiento) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $pais->setIdUsuarioReg($user);
        $pais->setFechaHoraReg(new \DateTime());
    }*/
 
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo CtlPais
     * con los valores del formulario.
     * 
     */
    /*public function preUpdate($procedimiento) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $pais->setIdUsuarioMod($user);
        $pais->setFechaHoraMod(new \DateTime());
    }*/
    
    
}
