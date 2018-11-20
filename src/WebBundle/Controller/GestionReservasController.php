<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebBundle\Entity\Reserva;
use WebBundle\Form\ReservaType;



class GestionReservasController extends Controller
{
    public function nuevaReservaAction(Request $request,$id = null)
    {
        if($id)
        {
            $repository = $this->getDoctrine()->getRepository(Reserva::class);
            $reserva = $repository->find($id);
        }else{
            $reserva = new Reserva();
        }      
        //Construyendo el formulario    
        $form = $this->createForm(ReservaType::class, $reserva);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $usuario = $this->getUser();
            $reserva->setUsuario($usuario);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reserva);
            $entityManager->flush();
                // corte viene de la BD
                
            return $this->redirectToRoute('reservas');
        }

    //Capturar el repositorio de la tabla contra la base de datos y corte se refiere a la entity
 
    return $this->render('gestionCortes/nuevaReserva.html.twig',array(
        'form'=>$form->createView()
    ));
    }

    public function reservasAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Reserva::class);
        //$reservas = $repository -> findAll();
        $reservas = $repository -> findByUsuario($this->getUser());
        $ocupados = $repository -> findAll();

        
        return $this->render('gestionCortes/reservas.html.twig',array("reservas"=>$reservas,"ocupados"=>$ocupados));
    }

    public function borrarReservaAction(Request $request,$id = null)
    {
        if($id)
        {
            //busqueda de la reserva
            $repository = $this->getDoctrine()->getRepository(Reserva::class);
            $reserva = $repository->find($id);
            //borrado
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reserva);
            $entityManager->flush();
        }
       
        return $this->redirectToRoute('reservas');
    }    
}