<?php

namespace Sistema\FormulariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\FormulariosBundle\Entity\Task;
use Sistema\FormulariosBundle\Form\TaskType;


class DefaultController extends Controller
{
    /**
     * @Route("/formulario")
     * @Template()
     */
    public function indexAction()
    {
        $entity = new Task();
        $form = $this->createForm(new TaskType(), $entity);
        return array('form' => $form->createView());
       
    }
}
