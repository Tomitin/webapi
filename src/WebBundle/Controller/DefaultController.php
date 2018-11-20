<?php

namespace WebBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WebBundle\Entity\Corte;
use WebBundle\Entity\Categoria;
use WebBundle\Entity\Herramienta;


use WebBundle\Entity\Usuario;
use WebBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class DefaultController extends Controller
{
    public function homepageAction($pagina=1)
    {
        $numCortes = 3;
        //Capturar el repositorio de la tabla contra la base de datos y corte se refiere a la entity
        $corteRepository = $this->getDoctrine()->getRepository(Corte::class);
        //Utilizacion del repository corte
        $cortes = $corteRepository->paginaCortes($pagina); // ,$numCortes no va porque es 3 por defecto

        return $this->render('frontend/index.html.twig',array(
            'cortes'=>$cortes,
            'paginaActual'=>$pagina
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
    

    public function registroAction(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
         // 1) build the form       
        $usuario = new Usuario();
        //Construyendo el formulario    
        $form = $this->createForm(UsuarioType::class, $usuario);
          // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
            $usuario->setPassword($password);

            // 3b) $username=$email
            $usuario->setUsername($usuario->getEmail());
            
            // 3c) roles

            $usuario->setRoles(array('ROLE_USER'));

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();
                
            return $this->redirectToRoute('login');
        }
        return $this->render('frontend/registro.html.twig',array(
            'form'=>$form->createView()
        ));
    }
    public function loginAction(Request $request,AuthenticationUtils $authenticationUtils)
    {
         // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('frontend/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
            ));
    }
}    
