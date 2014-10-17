<?php

namespace OFarrel\Bundle\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Guia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OFarrel\Bundle\GuiasBundle\Entity\GuiaRepository")
 */
class Guia
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="solamarca", type="boolean")
     */
    private $solamarca;
    
    /**
     * @ORM\ManyToOne(targetEntity="Persona", inversedBy="guias")
     * @ORM\JoinColumn(name="vendedor_id", referencedColumnName="id")
     */
    protected $persona;
    
    /**
     * @ORM\ManyToOne(targetEntity="Finalidad", inversedBy="guias")
     * @ORM\JoinColumn(name="finalidad_id", referencedColumnName="id")
     */
    protected $finalidad;
    
    /**
     * @ORM\ManyToOne(targetEntity="Campo", inversedBy="guias")
     * @ORM\JoinColumn(name="comprador_id", referencedColumnName="id")
     */
    protected $campo;
    
     /**
     * @ORM\OneToMany(targetEntity="Categoria_x_Guia", mappedBy="guia_id")
     */
    protected $guiacategorias;
   
    
 
    public function __construct()
    {
        
        $this->guiacategorias = new ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Guia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set solamarca
     *
     * @param boolean $solamarca
     * @return Guia
     */
    public function setSolamarca($solamarca)
    {
        $this->solamarca = $solamarca;

        return $this;
    }

    /**
     * Get solamarca
     *
     * @return boolean 
     */
    public function getSolamarca()
    {
        return $this->solamarca;
    }
}
