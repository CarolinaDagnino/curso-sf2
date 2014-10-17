<?php

namespace OFarrel\Bundle\GuiasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use OFarrel\Bundle\GuiasBundle\Entity\Provincia;
use OFarrel\Bundle\GuiasBundle\Form\ProvinciaType;
use OFarrel\Bundle\GuiasBundle\Form\ProvinciaFilterType;

/**
 * Provincia controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/provincia")
 */
class ProvinciaController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'OFarrel/Bundle/GuiasBundle/Resources/config/Provincia.yml',
    );

    /**
     * Lists all Provincia entities.
     *
     * @Route("/", name="admin_provincia")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new ProvinciaFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Provincia entity.
     *
     * @Route("/", name="admin_provincia_create")
     * @Method("POST")
     * @Template("OFarrelGuiasBundle:Provincia:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new ProvinciaType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Provincia entity.
     *
     * @Route("/new", name="admin_provincia_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new ProvinciaType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Provincia entity.
     *
     * @Route("/{id}", name="admin_provincia_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Provincia entity.
     *
     * @Route("/{id}/edit", name="admin_provincia_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new ProvinciaType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Provincia entity.
     *
     * @Route("/{id}", name="admin_provincia_update")
     * @Method("PUT")
     * @Template("OFarrelGuiasBundle:Provincia:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new ProvinciaType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Provincia entity.
     *
     * @Route("/{id}", name="admin_provincia_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Provincia entity.
     *
     * @Route("/autocomplete-forms/get-localidades", name="Provincia_autocomplete_localidades")
     */
    public function getAutocompleteLocalidad()
    {
        $options = array(
            'repository' => "OFarrelGuiasBundle:Localidad",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}