<?php

namespace Sistema\FormulariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\FormulariosBundle\Entity\TaskRepository")
 */
class Task
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
     * @ORM\Column(name="task", type="string", length=255)
     */
    private $task;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    private $category;

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
     * Set task
     *
     * @param string $task
     * @return Task
     */
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get task
     *
     * @return string 
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Task
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category=$category;
        
        return $this;
    }
    
    
    }

