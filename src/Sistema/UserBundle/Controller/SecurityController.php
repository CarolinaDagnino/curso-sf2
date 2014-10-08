<?php

namespace Sistema\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Sistema\UserBundle\Entity\Usuario;
use Sistema\UserBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        //obtiene el error
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return array(
            //ultimo nombre de usuario ingresado
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }
    /**
     * @Route("/logout")
     * @Template()
     */
    public function logoutAction()
    {
    }
    /**
     * @Route("/registro, name "usuario_registro")
     * @Template()
     */
    public function registroAction()
    {
        $request=$this -> getRequest;
        $usuario = new Usuario();
        $formulario=$this->createForm(new UsuarioType(),$usuario);
        
        
        if ($request->getMethod() == 'POST'){
            $formulario->handleRequest($request);
            if ($formulario -> isValid()){
                $encoder = $this -> get('security.encore_factory')
                                -> getEncoder($usuario);
                $usuario->setSalt(md5(time()));
                $passwordCodificado=
                        $encoder->encodePassword(
                                $usuario->getPassword(),
                                $usuario->getSalt()
                                );
                $usuario-> setPassword($passwordCodificado);
                $em= $this->getDoctrine->getManager();
                $em->persist($usuario);
                $em->flush();
                $token=new UsernamepasswordToken(
                        $usuario,
                        $usuario->getPassword(),
                        'secured_area',
                        $usuario->getRoles()
                        );
                $this->container->get('security.context')
                        ->setToken($token);
                        
                return $this->redirect(
                                $this->generateUrl('admin_curso'));
            }
        }
            return array('formulario'=>$formulario->createView());
    }
    
}
