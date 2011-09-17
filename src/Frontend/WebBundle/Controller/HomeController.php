<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;
use Frontend\WebBundle\Request\Search as SearchRequest;
use Frontend\WebBundle\Form\SearchType as SearchForm;

class HomeController extends Controller
{
    
    public function indexAction()
    {
        $search_request = new SearchRequest();
        $search_request->setDateArrival(new \DateTime());
        $search_request->setDateDeparture(new \DateTime());
        $search_request->setWithReturn(0);

        $search_form = $this->createForm(new SearchForm(), $search_request);

        $this->set('search_form', $search_form->createView());

        return $this->view('FrontendWebBundle:Home:index.html.twig');
    }
}
