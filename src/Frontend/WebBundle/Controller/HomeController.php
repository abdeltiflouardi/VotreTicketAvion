<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class HomeController extends Controller
{
    
    public function indexAction()
    {
        $this->set('aeroports', $this->findAll('BackendCoreBundle:Aeroport'));
        
        return $this->view('FrontendWebBundle:Home:index.html.twig');
    }
}
