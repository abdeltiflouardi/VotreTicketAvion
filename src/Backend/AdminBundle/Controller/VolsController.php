<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class VolsController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Vols:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT v FROM BackendCoreBundle:Vols v';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }      
    
    public function newAction() {
        return $this->view('BackendAdminBundle:Vols:new.html.twig');
    }    
}
