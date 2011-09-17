<?php

namespace Frontend\WebBundle\Request;

class Search {
    private $airportDeparture;
    private $airportArrival;
    private $dateDeparture;
    private $dateArrival;
    private $withReturn;
    private $adults;
    private $children;
    private $babies;

    public function setAirportDeparture($airportDeparture) {
        $this->airportDeparture = $airportDeparture;
    }

    public function getAirportDeparture() {
        return $this->airportDeparture;
    }

    public function setAirportArrival($airportArrival) {
        $this->airportArrival = $airportArrival;
    }
  
    public function getAirportArrival() {
        return $this->airportArrival;
    }
    
    public function setDateDeparture($dateDeparture) {
        $this->dateDeparture = $dateDeparture;
    }
    
    public function getDateDeparture() {
        return $this->dateDeparture;
    }

    public function setDateArrival($dateArrival) {
        $this->dateArrival = $dateArrival;
    }

    public function getDateArrival() {
        return $this->dateArrival;
    }
    
    public function setWithReturn($withReturn) {
        $this->withReturn = $withReturn;
    }
    public function getWithReturn() {
        return $this->withReturn;
    }
    
    public function setAdults($adults) {
        $this->adults = $adults;
    }

    public function getAdults() {
        return $this->adults;
    }
    
    public function setChildren($children) {
        $this->children = $children;
    }

    public function getChildren() {
        return $this->children;
    }    
    
    public function setBabies($babies) {
        $this->babies = $babies;
    }
    public function getBabies() {
        return $this->babies;
    }
}