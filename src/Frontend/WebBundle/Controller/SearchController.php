<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Frontend\WebBundle\Request\Search as SearchRequest,
    Frontend\WebBundle\Request\Vols as VolsRequest,
    Frontend\WebBundle\Form\SearchType,
    Frontend\WebBundle\Form\VolsType;

class SearchController extends Controller {

    public function resultsAction() {
        
        $search_request = new  SearchRequest();
        $search_form = $this->createForm(new SearchType(), $search_request);
        
        
        
        
//        $request = $this->getRequest();  
//        $session = $request->getSession();
//
//        $search = new SearchRequest();
//        $vols = new VolsRequest();
//
//        $form_search = $this->createFormBuilder($search)
//                ->add('airportDeparture', 'entity', array('required' => false, 'class' => 'BackendCoreBundle:Aeroport', 'property' => 'aeroport'))
//                ->add('dateDeparture', 'date', array('required' => false, 'widget' => 'single_text'))
//                ->add('airportArrival', 'entity', array('required' => false, 'class' => 'BackendCoreBundle:Aeroport', 'property' => 'aeroport'))
//                ->add('dateArrival', 'date', array('required' => false, 'widget' => 'single_text'))
//                ->add('withReturn', 'radio', array('required' => false))
//                ->add('adult', 'choice', array('choices' => range(0, 9)))
//                ->add('children', 'choice', array('choices' => range(0, 9)))
//                ->add('babies', 'choice', array('choices' => range(0, 9)))
//                ->getForm();        
//        
//        $form_vols = $this->createForm(new VolsType(), $vols);
//
//        if ($request->getMethod() == 'POST') {
//            $form_vols->bindRequest($request);
//
//            $session->set('vols', $vols);
//
//            return $this->redirectTo('FrontendWebBundle_client_subscribe');
//        }
//        
//        $arrival = $search->getAirportArrival();
//        $departure = $search->getAirportDeparture();
//        if (!$arrival || !$departure) {
//            $this->set('form_search', $form_search->createView());
//            return $this->view('FrontendWebBundle:Search:form.html.twig');   
//        }
//
//        $session->set('search', $search);
//
//        $this->set('departure', $this->pager($this->buildDepartureQuery()));
//        $this->set('arrival', $this->pager($this->buildArrivalQuery()));
//
//        return $this->view('FrontendWebBundle:Search:results.html.twig');                
    }

    private function buildDepartureQuery() {
        $dql = "SELECT v FROM BackendCoreBundle:Vols v";

        $request = $this->getRequest();

        // Build where
        $where = array();

        if ($airportDeparture = $request->get('airportDeparture')) {
            $where[] = 'v.aeroportDepart=' . $airportDeparture;
        }

        if ($airportArrival = $request->get('airportArrival')) {
            $where[] = 'v.aeroportArrivee=' . $airportArrival;
        }

        if ($departure = $request->get('departure')) {
            $where[] = "v.dateDepart>'" . $departure . "'";
        }

        // Bind Where to SELECT
        if (!empty($where)) {
            $dql .= " WHERE " . implode(' AND ', $where);
        }

        // Bind Order to SELECT
        $dql .= " ORDER BY v.dateDepart";
        
        $query = $this->em()->createQuery($dql);

        return $query;
    }

    private function buildArrivalQuery() {
        $dql = "SELECT v FROM BackendCoreBundle:Vols v";

        $request = $this->getRequest();

        // Build where
        $where = array();

        if ($airportDeparture = $request->get('airportDeparture')) {
            $where[] = 'v.aeroportArrivee=' . $airportDeparture;
        }

        if ($airportArrival = $request->get('airportArrival')) {
            $where[] = 'v.aeroportDepart=' . $airportArrival;
        }

        if ($departure = $request->get('departure')) {
            $where[] = "v.dateDepart>'" . $departure . "'";
        }

        // Bind Where to SELECT
        if (!empty($where)) {
            $dql .= " WHERE " . implode(' AND ', $where);
        }

        // Bind Order to SELECT
        $dql .= " ORDER BY v.dateDepart";
        
        $query = $this->em()->createQuery($dql);

        return $query;
    }    
    
}
