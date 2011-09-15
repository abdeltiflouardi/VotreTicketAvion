<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Backend\CoreBundle\Entity\Vols
 *
 * @ORM\Table(name="vols")
 * @ORM\Entity
 */
class Vols
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var date $dateDepart
     *
     * @ORM\Column(name="date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var date $dateArive
     *
     * @ORM\Column(name="date_arive", type="date", nullable=true)
     */
    private $dateArive;

    /**
     * @var time $heureDepart
     *
     * @ORM\Column(name="heure_depart", type="time", nullable=true)
     */
    private $heureDepart;

    /**
     * @var time $heureArivee
     *
     * @ORM\Column(name="heure_arivee", type="time", nullable=true)
     */
    private $heureArivee;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var Aeroport
     *
     * @ORM\ManyToOne(targetEntity="Aeroport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeroport_depart", referencedColumnName="id")
     * })
     */
    private $aeroportDepart;

    /**
     * @var Aeroport
     *
     * @ORM\ManyToOne(targetEntity="Aeroport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeroport_arrivee", referencedColumnName="id")
     * })
     */
    private $aeroportArrivee;

    /**
     * 
     * @ORM\OneToMany(targetEntity="Tarif", mappedBy="vols")
     */
    private $tarifs;

    public function __construct()
    {
        $this->tarifs = new ArrayCollection();
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
     * Set dateDepart
     *
     * @param date $dateDepart
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;
    }

    /**
     * Get dateDepart
     *
     * @return date 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArive
     *
     * @param date $dateArive
     */
    public function setDateArive($dateArive)
    {
        $this->dateArive = $dateArive;
    }

    /**
     * Get dateArive
     *
     * @return date 
     */
    public function getDateArive()
    {
        return $this->dateArive;
    }

    /**
     * Set heureDepart
     *
     * @param time $heureDepart
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;
    }

    /**
     * Get heureDepart
     *
     * @return time 
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set heureArivee
     *
     * @param time $heureArivee
     */
    public function setHeureArivee($heureArivee)
    {
        $this->heureArivee = $heureArivee;
    }

    /**
     * Get heureArivee
     *
     * @return time 
     */
    public function getHeureArivee()
    {
        return $this->heureArivee;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set aeroportDepart
     *
     * @param Backend\CoreBundle\Entity\Aeroport $aeroportDepart
     */
    public function setAeroportDepart(\Backend\CoreBundle\Entity\Aeroport $aeroportDepart)
    {
        $this->aeroportDepart = $aeroportDepart;
    }

    /**
     * Get aeroportDepart
     *
     * @return Backend\CoreBundle\Entity\Aeroport 
     */
    public function getAeroportDepart()
    {
        return $this->aeroportDepart;
    }

    /**
     * Set aeroportArrivee
     *
     * @param Backend\CoreBundle\Entity\Aeroport $aeroportArrivee
     */
    public function setAeroportArrivee(\Backend\CoreBundle\Entity\Aeroport $aeroportArrivee)
    {
        $this->aeroportArrivee = $aeroportArrivee;
    }

    /**
     * Get aeroportArrivee
     *
     * @return Backend\CoreBundle\Entity\Aeroport 
     */
    public function getAeroportArrivee()
    {
        return $this->aeroportArrivee;
    }

    /**
     * Add tarifs
     *
     * @param Backend\CoreBundle\Entity\Tarif $tarifs
     */
    public function addTarifs(\Backend\CoreBundle\Entity\Tarif $tarifs)
    {
        $this->tarifs[] = $tarifs;
    }

    /**
     * Get tarifs
     *
     * @return Doctrine\Common\Collections\ArrayCollection
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }
    
    public function __toString() {
        return $this->getAeroportDepart() . ' >> ' . $this->getAeroportArrivee();
    }    
}