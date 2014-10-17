<?php

namespace IPAP\Bundle\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OperacionesController extends Controller
{
    //, name="calculadora
    /**
     * @Route("/calculadora/{A}/{B}/{valor}") 
     * @Template()
     */
    public function calcularAction($A=0, $B=0, $valor='suma'){
        $resultado=0;
    switch ($valor){
        case 'suma':
            $resultado= $A+$B;
            break;
        case 'resta':
            $resultado=$A-$B;
            break;
    }
        return array('resultado' =>$resultado);
    }
}
