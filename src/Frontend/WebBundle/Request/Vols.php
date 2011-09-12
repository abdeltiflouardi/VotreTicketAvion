<?php

namespace Frontend\WebBundle\Request;

class Vols {
    private $departure;
    private $return;
    
    public function setDeparture($departure) {
        $this->departure = $departure;
    }

    public function getDeparture() {
        return $this->departure;
    }
    
    public function setReturn($return) {
        $this->return = $return;
    }

    public function getReturn() {
        return $this->return;
    }    
}