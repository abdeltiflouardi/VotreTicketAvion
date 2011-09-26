<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Passager
 *
 * @ORM\Table(name="passager")
 * @ORM\Entity
 */
class Passager
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
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=45, nullable=true)
     */
    private $titre;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string $nationalite
     *
     * @ORM\Column(name="nationalite", type="string", length=45, nullable=true)
     */
    private $nationalite;

    /**
     * @var datetime $dateNaissance
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var Reservation
     *
     * @ORM\ManyToMany(targetEntity="Reservation", mappedBy="passager")
     */
    private $reservation;

    public function __construct()
    {
        $this->reservation = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set dateNaissance
     *
     * @param datetime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Get dateNaissance
     *
     * @return datetime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Add reservation
     *
     * @param Backend\CoreBundle\Entity\Reservation $reservation
     */
    public function addReservation(\Backend\CoreBundle\Entity\Reservation $reservation)
    {
        $this->reservation[] = $reservation;
    }

    /**
     * Get reservation
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getReservation()
    {
        return $this->reservation;
    }
    
    public function __toString() {
        return $this->getNom() . ' ' . $this->getPrenom();
    }
}