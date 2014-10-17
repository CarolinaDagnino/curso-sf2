<?php

namespace OFarrel\Bundle\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Persona
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OFarrel\Bundle\GuiasBundle\Entity\PersonaRepository")
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nya", type="string", length=50)
     */
    private $nya;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=13)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=100)
     */
    private $domicilio;
    /**
     * @ORM\OneToMany(targetEntity="Campo", mappedBy="duenio_id")
     */
    protected $campos;
 /**
     * @ORM\OneToMany(targetEntity="Guia", mappedBy="vendedor_id")
     */
    protected $guias;
    public function __construct()
    {
        $this->campos = new ArrayCollection();
        $this->guias=new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nya
     *
     * @param string $nya
     * @return Persona
     */
    public function setNya($nya)
    {
        $this->nya = $nya;

        return $this;
    }

    /**
     * Get nya
     *
     * @return string 
     */
    public function getNya()
    {
        return $this->nya;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Persona
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Persona
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }
}
