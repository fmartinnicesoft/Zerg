<?php

namespace Zerg\CallsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zerg\CallsBundle\Entity\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="openingdate", type="date")
     */
    private $openingdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="majdate", type="date")
     */
    private $majdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closingdate", type="date")
     */
    private $closingdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline", type="date")
     */
    private $deadline;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="solution", type="text")
     */
    private $solution;
    
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
     * Set openingdate
     *
     * @param \DateTime $openingdate
     * @return Ticket
     */
    public function setOpeningdate($openingdate)
    {
        $this->openingdate = $openingdate;
    
        return $this;
    }

    /**
     * Get openingdate
     *
     * @return \DateTime 
     */
    public function getOpeningdate()
    {
        return $this->openingdate;
    }

    /**
     * Set majdate
     *
     * @param \DateTime $majdate
     * @return Ticket
     */
    public function setMajdate($majdate)
    {
        $this->majdate = $majdate;
    
        return $this;
    }

    /**
     * Get majdate
     *
     * @return \DateTime 
     */
    public function getMajdate()
    {
        return $this->majdate;
    }

    /**
     * Set closingdate
     *
     * @param \DateTime $closingdate
     * @return Ticket
     */
    public function setClosingdate($closingdate)
    {
        $this->closingdate = $closingdate;
    
        return $this;
    }

    /**
     * Get closingdate
     *
     * @return \DateTime 
     */
    public function getClosingdate()
    {
        return $this->closingdate;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     * @return Ticket
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;
    
        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime 
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ticket
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set solution
     *
     * @param string $solution
     * @return Ticket
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;
    
        return $this;
    }

    /**
     * Get solution
     *
     * @return string 
     */
    public function getSolution()
    {
        return $this->solution;
    }
}
