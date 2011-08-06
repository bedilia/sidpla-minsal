<?php

/*
  SIDPLA - MINSAL
  Copyright (C) 2011  Bruno González   e-mail: bagonzalez.sv EN gmail.com
  Copyright (C) 2011  Universidad de El Salvador

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.  
  
 */

/**
 * Description of AccionAdminOpcionesController
 *
 * @author Bruno González
 */

namespace MinSal\SidPla\AdminBundle\Controller;

use MinSal\SidPla\AdminBundle\EntityDao\OpcionSistemaDao;
use MinSal\SidPla\AdminBundle\Form\Type\OpcionSistemaType;
use MinSal\SidPla\AdminBundle\Entity\OpcionSistema;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class AccionAdminOpcionesController extends Controller
{    
   
    /**
     *  Esta es la opcion del Action que permitira obtener los valores de 
     *  un formulario, luego instancia una clase OpcionSistemaDao para
     *  manejar la persistencia de la entidad OpcionSistemaDao, y retornara los
     *  mensajes de exito/fracaso del sistema.
     */
	
	public function addOcpAction(Request $peticion)
	{
            $opc=new OpcionSistema(); 
            $form = $this->createForm(new OpcionSistemaType() , $opc);
            
            if ($peticion->getMethod() == 'POST') {
                $form->bindRequest($peticion);

                if ($form->isValid()) {
                    $opcDao = new OpcionSistemaDao($this->getDoctrine()->getEntityManager());                
                    $mensajesSistema = $opcDao->addOpcion($opc);	                     
                    return new Response($mensajesSistema[0].' '.$mensajesSistema[1] );                    
                }
            }
            return $this->redirect($this->generateUrl('MinSalSidPlaAdminBundle_homepage'));	    
	}
        
        /*
         * Crea un nuevo formulario, para ser utilizado, para crear una Nueva Opcion del sistema.
         */
        
        
        public function nuevaOpcAction()
	{
            $opc=new OpcionSistema();            
            
            $form = $this->createForm(new OpcionSistemaType() , $opc);
            return $this->render('MinSalSidPlaAdminBundle:Default:opcionFormTemplate.html.twig', 
                    array('form' => $form->createView(),  ));
            
	}
        
        
        
}
