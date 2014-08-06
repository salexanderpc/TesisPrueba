<?php

namespace Minsal\SimagdBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CtlPacsEstablecimientoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CtlPacsEstablecimientoRepository extends EntityRepository
{
    public function obtenerEstablecimientos() {

        return $this->getEntityManager()
                        ->createQuery('select nombre'
                                . 'from ctl_establecimiento'
                                . 'where id_tipo_establecimiento'
                                . '= 1')->getResult();
                /*
                        ->createQueryBuilder()
                        ->select('e')
                        ->from('MinsalSiapsBundle:CtlEstablecimiento', 'e')
                        ->where('e.configurado = true');*/
    }
}
