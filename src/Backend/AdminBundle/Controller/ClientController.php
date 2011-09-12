<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class ClientController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Client:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT c FROM BackendCoreBundle:Client c';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }    
    
    public function newAction() {
        return $this->view('BackendAdminBundle:Client:new.html.twig');
    }    
}
