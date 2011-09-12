<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;

class ProfileController extends Controller
{
    
    public function indexAction()
    {
        return $this->view('BackendAdminBundle:Profile:index.html.twig');
    }
}
