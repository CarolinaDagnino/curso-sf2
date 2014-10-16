<?php

namespace Sistema\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'AREA');
    }

    /**
     * @Route("/admin", name="admin_curso")
     * @Template()
     */
    public function adminAction()
    {
        return array('name' => 'AREA SECURE');
    }
}
