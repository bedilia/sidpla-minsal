<?php

namespace MinSal\SidPla\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use MinSal\SidPla\AdminBundle\EntityDao\NotificacionSistemaDao;
//use MinSal\SidPla\AdminBundle\Entity\InformacionGeneral2;

class AccionAdminInformacionGeneral2Controller extends Controller {

    public function ManteInformacionGeneral2Action() {

        //$opciones = $this->getRequest()->getSession()->get('opciones');
        
        //$notificacionDao = new NotificacionSistemaDao($this->getDoctrine());
        

       // return $this->render('MinSalSidPlaAdminBundle:NotificacionSistema:showNotificacionSistema.html.twig'
         //               , array('opciones' => $opciones));
         return new Response('hola'); 
    }

}

?>

