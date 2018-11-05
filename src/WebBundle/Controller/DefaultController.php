<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebBundle\Entity\Corte;
use WebBundle\Entity\Categoria;
use WebBundle\Entity\Herramienta;


class DefaultController extends Controller
{
    public function homepageAction()
    {
        //Capturar el repositorio de la tabla contra la base de datos y corte se refiere a la entity
        $corteRepository = $this->getDoctrine()->getRepository(Corte::class);
        $cortes = $corteRepository->findByTop(1);
        return $this->render('frontend/index.html.twig',array(
            'cortes'=>$cortes
        ));
    }
    
    public function nosotrosAction()
    {
        return $this->render('frontend/nosotros.html.twig');
    }    
    
    public function contactarAction(Request $request,$sitio = "todos")
    {
        return $this->render('frontend/barberias.html.twig',array("sitiotwig"=>$sitio));
    }     

    public function corteAction(Request $request,$id=null)
    {
        if($id!=null){
            $corteRepository = $this->getDoctrine()->getRepository(Corte::class);
            $corte = $corteRepository->find($id);
            return $this->render('frontend/corte.html.twig',array(
                "corte"=>$corte
            ));          
        }else{
            return $this->redirectToRoute('welcome');
        }
        
    }
    
    public function categoriaAction(Request $request,$id=null)
    {
        if($id!=null){
            $categoriaRepository = $this->getDoctrine()->getRepository(Categoria::class);
            $categoria = $categoriaRepository->find($id);
            return $this->render('frontend/categoria.html.twig',array(
                "categoria"=>$categoria
            ));          
        }else{
            return $this->redirectToRoute('welcome');
        }
        
    }
    
    public function herramientaAction(Request $request,$id=null)
    {
        if($id!=null){
            $herramientaRepository = $this->getDoctrine()->getRepository(Herramienta::class);
            $herramienta = $herramientaRepository->find($id);
            return $this->render('frontend/herramienta.html.twig',array(
                "herramienta"=>$herramienta
            ));          
        }else{
            return $this->redirectToRoute('welcome');
        }
        
    }  
}
