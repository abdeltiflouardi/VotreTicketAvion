<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->view('BackendAdminBundle:Default:index.html.twig');
    }
}
