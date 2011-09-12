<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
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
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var Passager
     *
     * @ORM\ManyToMany(targetEntity="Passager", inversedBy="reservation")
     * @ORM\JoinTable(name="reservation_passager",
     *   joinColumns={
     *     @ORM\JoinColumn(name="reservation_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="passager_id", referencedColumnName="id")
     *   }
     * )
     */
    private $passager;

    /**
     * @var Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    /**
     * @var Vols
     *
     * @ORM\ManyToOne(targetEntity="Vols")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vols_id", referencedColumnName="id")
     * })
     */
    private $vols;

    public function __construct()
    {
        $this->passager = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Add passager
     *
     * @param Backend\CoreBundle\Entity\Passager $passager
     */
    public function addPassager(\Backend\CoreBundle\Entity\Passager $passager)
    {
        $this->passager[] = $passager;
    }

    /**
     * Get passager
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPassager()
    {
        return $this->passager;
    }

    /**
     * Set client
     *
     * @param Backend\CoreBundle\Entity\Client $client
     */
    public function setClient(\Backend\CoreBundle\Entity\Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get client
     *
     * @return Backend\CoreBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set vols
     *
     * @param Backend\CoreBundle\Entity\Vols $vols
     */
    public function setVols(\Backend\CoreBundle\Entity\Vols $vols)
    {
        $this->vols = $vols;
    }

    /**
     * Get vols
     *
     * @return Backend\CoreBundle\Entity\Vols 
     */
    public function getVols()
    {
        return $this->vols;
    }
}