<?php

namespace OFarrel\Bundle\GuiasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Finalidad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OFarrel\Bundle\GuiasBundle\Entity\FinalidadRepository")
 */
class Finalidad
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
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;
    /**
     * @ORM\OneToMany(targetEntity="Guia", mappedBy="finalidad_id")
     */
    protected $guias;
 
    public function __construct()
    {
        $this->guias = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Finalidad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
