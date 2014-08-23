<?php

namespace Minsal\SimagdBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ImgPreinscripcionAdminController extends CRUDController
{
  
    public function buscarAction()
    {  
        return $this->render('MinsalSimagdBundle:imgPreinscripcion:prueba.html.twig', array());
    }
    
    
}
