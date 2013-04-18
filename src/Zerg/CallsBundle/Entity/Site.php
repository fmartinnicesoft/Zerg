<?php

namespace Zerg\CallsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zerg\CallsBundle\Entity\SiteRepository")
 */
class Site
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
     * @ORM\OneToMany(targetEntity="Zerg\CallsBundle\Entity\Ticket", mappedBy="site")
     */
    
    private $tickets;
    
    /**
     * @ORM\OneToMany(targetEntity="Zerg\CallsBundle\Entity\Contact", mappedBy="site")
     */
    
    private $contacts;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=100)
     */
    private $address1;

    /**
     * @var string
     *
     * @ORM\Column(name="address2", type="string", length=100)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="address3", type="string", length=100)
     */
    private $address3;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=10)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=25)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=25)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="phone1", type="string", length=25)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=25)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=25)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=25)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=25)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecrea", type="date")
     */
    private $datecrea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemaj", type="date")
     */
    private $datemaj;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=5)
     */
    private $version;


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
     * Set name
     *
     * @param string $name
     * @return Site
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Site
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
     * Set address1
     *
     * @param string $address1
     * @return Site
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return Site
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set address3
     *
     * @param string $address3
     * @return Site
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
    
        return $this;
    }

    /**
     * Get address3
     *
     * @return string 
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * Set zip
     *
     * @param string $zip
     * @return Site
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    
        return $this;
    }

    /**
     * Get zip
     *
     * @return string 
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Site
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Site
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     * @return Site
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;
    
        return $this;
    }

    /**
     * Get phone1
     *
     * @return string 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return Site
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
    
        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Site
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Site
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Site
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Site
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set datecrea
     *
     * @param \DateTime $datecrea
     * @return Site
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;
    
        return $this;
    }

    /**
     * Get datecrea
     *
     * @return \DateTime 
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set datemaj
     *
     * @param \DateTime $datemaj
     * @return Site
     */
    public function setDatemaj($datemaj)
    {
        $this->datemaj = $datemaj;
    
        return $this;
    }

    /**
     * Get datemaj
     *
     * @return \DateTime 
     */
    public function getDatemaj()
    {
        return $this->datemaj;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Site
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tickets
     *
     * @param \Zerg\CallsBundle\Entity\Ticket $tickets
     * @return Site
     */
    public function addTicket(\Zerg\CallsBundle\Entity\Ticket $tickets)
    {
        $this->tickets[] = $tickets;
    
        return $this;
    }

    /**
     * Remove tickets
     *
     * @param \Zerg\CallsBundle\Entity\Ticket $tickets
     */
    public function removeTicket(\Zerg\CallsBundle\Entity\Ticket $tickets)
    {
        $this->tickets->removeElement($tickets);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTickets()
    {
        return $this->tickets;
    }

    /**
     * Add contacts
     *
     * @param \Zerg\CallsBundle\Entity\Contact $contacts
     * @return Site
     */
    public function addContact(\Zerg\CallsBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;
    
        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \Zerg\CallsBundle\Entity\Contact $contacts
     */
    public function removeContact(\Zerg\CallsBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}