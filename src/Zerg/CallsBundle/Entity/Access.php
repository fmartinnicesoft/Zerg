<?php

namespace Zerg\CallsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Zerg\CallsBundle\Entity\AccessRepository")
 */
class Access
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
     * @ORM\ManyToOne(targetEntity="Zerg\CallsBundle\Entity\Site")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="localip", type="string", length=255)
     */
    private $localip;

    /**
     * @var string
     *
     * @ORM\Column(name="publicip", type="string", length=255)
     */
    private $publicip;

    /**
     * @var string
     *
     * @ORM\Column(name="accesslogin", type="string", length=255)
     */
    private $accesslogin;

    /**
     * @var string
     *
     * @ORM\Column(name="accesspassword", type="string", length=255)
     */
    private $accesspassword;

    /**
     * @var string
     *
     * @ORM\Column(name="pclogin", type="string", length=255)
     */
    private $pclogin;

    /**
     * @var string
     *
     * @ORM\Column(name="pcpassword", type="string", length=255)
     */
    private $pcpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

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
     * @return Access
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
     * Set type
     *
     * @param string $type
     * @return Access
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set localip
     *
     * @param string $localip
     * @return Access
     */
    public function setLocalip($localip)
    {
        $this->localip = $localip;
    
        return $this;
    }

    /**
     * Get localip
     *
     * @return string 
     */
    public function getLocalip()
    {
        return $this->localip;
    }

    /**
     * Set publicip
     *
     * @param string $publicip
     * @return Access
     */
    public function setPublicip($publicip)
    {
        $this->publicip = $publicip;
    
        return $this;
    }

    /**
     * Get publicip
     *
     * @return string 
     */
    public function getPublicip()
    {
        return $this->publicip;
    }

    /**
     * Set accesslogin
     *
     * @param string $accesslogin
     * @return Access
     */
    public function setAccesslogin($accesslogin)
    {
        $this->accesslogin = $accesslogin;
    
        return $this;
    }

    /**
     * Get accesslogin
     *
     * @return string 
     */
    public function getAccesslogin()
    {
        return $this->accesslogin;
    }

    /**
     * Set accesspassword
     *
     * @param string $accesspassword
     * @return Access
     */
    public function setAccesspassword($accesspassword)
    {
        $this->accesspassword = $accesspassword;
    
        return $this;
    }

    /**
     * Get accesspassword
     *
     * @return string 
     */
    public function getAccesspassword()
    {
        return $this->accesspassword;
    }

    /**
     * Set pclogin
     *
     * @param string $pclogin
     * @return Access
     */
    public function setPclogin($pclogin)
    {
        $this->pclogin = $pclogin;
    
        return $this;
    }

    /**
     * Get pclogin
     *
     * @return string 
     */
    public function getPclogin()
    {
        return $this->pclogin;
    }

    /**
     * Set pcpassword
     *
     * @param string $pcpassword
     * @return Access
     */
    public function setPcpassword($pcpassword)
    {
        $this->pcpassword = $pcpassword;
    
        return $this;
    }

    /**
     * Get pcpassword
     *
     * @return string 
     */
    public function getPcpassword()
    {
        return $this->pcpassword;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Access
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
     * Set datecrea
     *
     * @param \DateTime $datecrea
     * @return Access
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
     * @return Access
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
     * Set site
     *
     * @param \Zerg\CallsBundle\Entity\Site $site
     * @return Access
     */
    public function setSite(\Zerg\CallsBundle\Entity\Site $site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return \Zerg\CallsBundle\Entity\Site 
     */
    public function getSite()
    {
        return $this->site;
    }
}