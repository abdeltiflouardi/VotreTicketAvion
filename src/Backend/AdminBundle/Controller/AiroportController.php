<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class AiroportController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Airoport:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT a FROM BackendCoreBundle:Aeroport a';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }
    
    public function newAction() {
        return $this->view('BackendAdminBundle:Airoport:new.html.twig');
    }
}
