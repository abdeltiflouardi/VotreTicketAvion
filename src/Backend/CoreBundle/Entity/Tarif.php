<?php

namespace Backend\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backend\CoreBundle\Entity\Tarif
 *
 * @ORM\Table(name="tarif")
 * @ORM\Entity
 */
class Tarif
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
     * @var decimal $tarifAdulte
     *
     * @ORM\Column(name="tarif_adulte", type="decimal", nullable=true)
     */
    private $tarifAdulte;

    /**
     * @var string $typePassage
     *
     * @ORM\Column(name="type_passage", type="string", length=45, nullable=true)
     */
    private $typePassage;

    /**
     * @var string $periode
     *
     * @ORM\Column(name="periode", type="string", length=45, nullable=true)
     */
    private $periode;

    /**
     * @var decimal $tarifEnfant
     *
     * @ORM\Column(name="tarif_enfant", type="decimal", nullable=true)
     */
    private $tarifEnfant;

    /**
     * @var decimal $tarifBebe
     *
     * @ORM\Column(name="tarif_bebe", type="decimal", nullable=true)
     */
    private $tarifBebe;

    /**
     * @var decimal $taxeAdulte
     *
     * @ORM\Column(name="taxe_adulte", type="decimal", nullable=true)
     */
    private $taxeAdulte;

    /**
     * @var decimal $taxeEnfant
     *
     * @ORM\Column(name="taxe_enfant", type="decimal", nullable=true)
     */
    private $taxeEnfant;

    /**
     * @var decimal $taxeBebe
     *
     * @ORM\Column(name="taxe_bebe", type="decimal", nullable=true)
     */
    private $taxeBebe;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var Vols
     *
     * @ORM\ManyToOne(targetEntity="Vols")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vols_id", referencedColumnName="id")
     * })
     */
    private $vols;



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
     * Set tarifAdulte
     *
     * @param decimal $tarifAdulte
     */
    public function setTarifAdulte($tarifAdulte)
    {
        $this->tarifAdulte = $tarifAdulte;
    }

    /**
     * Get tarifAdulte
     *
     * @return decimal 
     */
    public function getTarifAdulte()
    {
        return $this->tarifAdulte;
    }

    /**
     * Set typePassage
     *
     * @param string $typePassage
     */
    public function setTypePassage($typePassage)
    {
        $this->typePassage = $typePassage;
    }

    /**
     * Get typePassage
     *
     * @return string 
     */
    public function getTypePassage()
    {
        return $this->typePassage;
    }

    /**
     * Set periode
     *
     * @param string $periode
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set tarifEnfant
     *
     * @param decimal $tarifEnfant
     */
    public function setTarifEnfant($tarifEnfant)
    {
        $this->tarifEnfant = $tarifEnfant;
    }

    /**
     * Get tarifEnfant
     *
     * @return decimal 
     */
    public function getTarifEnfant()
    {
        return $this->tarifEnfant;
    }

    /**
     * Set tarifBebe
     *
     * @param decimal $tarifBebe
     */
    public function setTarifBebe($tarifBebe)
    {
        $this->tarifBebe = $tarifBebe;
    }

    /**
     * Get tarifBebe
     *
     * @return decimal 
     */
    public function getTarifBebe()
    {
        return $this->tarifBebe;
    }

    /**
     * Set taxeAdulte
     *
     * @param decimal $taxeAdulte
     */
    public function setTaxeAdulte($taxeAdulte)
    {
        $this->taxeAdulte = $taxeAdulte;
    }

    /**
     * Get taxeAdulte
     *
     * @return decimal 
     */
    public function getTaxeAdulte()
    {
        return $this->taxeAdulte;
    }

    /**
     * Set taxeEnfant
     *
     * @param decimal $taxeEnfant
     */
    public function setTaxeEnfant($taxeEnfant)
    {
        $this->taxeEnfant = $taxeEnfant;
    }

    /**
     * Get taxeEnfant
     *
     * @return decimal 
     */
    public function getTaxeEnfant()
    {
        return $this->taxeEnfant;
    }

    /**
     * Set taxeBebe
     *
     * @param decimal $taxeBebe
     */
    public function setTaxeBebe($taxeBebe)
    {
        $this->taxeBebe = $taxeBebe;
    }

    /**
     * Get taxeBebe
     *
     * @return decimal 
     */
    public function getTaxeBebe()
    {
        return $this->taxeBebe;
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