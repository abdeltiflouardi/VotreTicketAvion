<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class ReservationController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Reservation:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT r FROM BackendCoreBundle:Reservation r';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }
    
    public function newAction() {
        return $this->view('BackendAdminBundle:Reservation:new.html.twig');
    }    
}
