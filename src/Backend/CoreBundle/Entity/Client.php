<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string $nationalite
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=true)
     */
    private $nationalite;

    /**
     * @var string $paysResidence
     *
     * @ORM\Column(name="Pays_residence", type="string", length=100, nullable=true)
     */
    private $paysResidence;

    /**
     * @var string $gsm
     *
     * @ORM\Column(name="gsm", type="string", length=45, nullable=true)
     */
    private $gsm;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=135, nullable=true)
     */
    private $email;



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
     * Set paysResidence
     *
     * @param string $paysResidence
     */
    public function setPaysResidence($paysResidence)
    {
        $this->paysResidence = $paysResidence;
    }

    /**
     * Get paysResidence
     *
     * @return string 
     */
    public function getPaysResidence()
    {
        return $this->paysResidence;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;
    }

    /**
     * Get gsm
     *
     * @return string 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
}