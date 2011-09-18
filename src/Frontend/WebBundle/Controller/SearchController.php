<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Frontend\WebBundle\Request\Search as SearchRequest,
    Frontend\WebBundle\Request\Vols as VolsRequest,
    Frontend\WebBundle\Form\SearchType,
    Frontend\WebBundle\Form\VolsType;

class SearchController extends Controller {

    public function resultsAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        $search_request = new  SearchRequest();

        if ($request->getMethod() != 'POST' && !$session->has('search_request')) {
            $search_request->setDateArrival(new \DateTime());
            $search_request->setDateDeparture(new \DateTime());
            $search_request->setWithReturn(0);            
        }

        $search_form = $this->createForm(new SearchType(), $search_request);

        if ($request->getMethod() == 'POST') {
            $search_form->bindRequest($request);
            
            $session->set('search_request', $request);
        } elseif ($session->has('search_request')) {
            $search_form->bindRequest ($session->get('search_request'));
        }        

        if ($session->has('search_request'))
            if ($search_form->isValid()) {
                $this->set('departure', $this->pager($this->buildDepartureQuery()));
                $this->set('arrival', $this->pager($this->buildArrivalQuery()));

                $session->set('search', $search_request);

                return $this->view('FrontendWebBundle:Search:results.html.twig');
            }

        $this->set('search_form', $search_form->createView());

        return $this->view('FrontendWebBundle:Search:form.html.twig');
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
