<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Aeroport
 *
 * @ORM\Table(name="aeroport")
 * @ORM\Entity
 */
class Aeroport
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
     * @var string $aeroport
     *
     * @ORM\Column(name="aeroport", type="string", length=145, nullable=true)
     */
    private $aeroport;



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
     * Set aeroport
     *
     * @param string $aeroport
     */
    public function setAeroport($aeroport)
    {
        $this->aeroport = $aeroport;
    }

    /**
     * Get aeroport
     *
     * @return string 
     */
    public function getAeroport()
    {
        return $this->aeroport;
    }
}