<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BackendCoreBundleEntityVolsProxy extends \Backend\CoreBundle\Entity\Vols implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setDateDepart($dateDepart)
    {
        $this->__load();
        return parent::setDateDepart($dateDepart);
    }

    public function getDateDepart()
    {
        $this->__load();
        return parent::getDateDepart();
    }

    public function setDateArive($dateArive)
    {
        $this->__load();
        return parent::setDateArive($dateArive);
    }

    public function getDateArive()
    {
        $this->__load();
        return parent::getDateArive();
    }

    public function setHeureDepart($heureDepart)
    {
        $this->__load();
        return parent::setHeureDepart($heureDepart);
    }

    public function getHeureDepart()
    {
        $this->__load();
        return parent::getHeureDepart();
    }

    public function setHeureArivee($heureArivee)
    {
        $this->__load();
        return parent::setHeureArivee($heureArivee);
    }

    public function getHeureArivee()
    {
        $this->__load();
        return parent::getHeureArivee();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setAeroportDepart(\Backend\CoreBundle\Entity\Aeroport $aeroportDepart)
    {
        $this->__load();
        return parent::setAeroportDepart($aeroportDepart);
    }

    public function getAeroportDepart()
    {
        $this->__load();
        return parent::getAeroportDepart();
    }

    public function setAeroportArrivee(\Backend\CoreBundle\Entity\Aeroport $aeroportArrivee)
    {
        $this->__load();
        return parent::setAeroportArrivee($aeroportArrivee);
    }

    public function getAeroportArrivee()
    {
        $this->__load();
        return parent::getAeroportArrivee();
    }

    public function addTarifs(\Backend\CoreBundle\Entity\Tarif $tarifs)
    {
        $this->__load();
        return parent::addTarifs($tarifs);
    }

    public function getTarifs()
    {
        $this->__load();
        return parent::getTarifs();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'dateDepart', 'dateArive', 'heureDepart', 'heureArivee', 'active', 'aeroportDepart', 'aeroportArrivee', 'tarifs');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}