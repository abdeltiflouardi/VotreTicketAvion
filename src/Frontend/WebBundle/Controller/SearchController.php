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
                $this->set('departure', $this->getListDeparture($search_request));
                $this->set('arrival', $this->getListArrival($search_request));
                $this->set('search', $search_request);
                
                $session->set('search', $search_request);
                
                $this->buildListPassagers($search_request);

                return $this->view('FrontendWebBundle:Search:results.html.twig');
            }

        $this->set('search_form', $search_form->createView());

        return $this->view('FrontendWebBundle:Search:form.html.twig');
    }

    public function resultsAjaxAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        $search_request = new  SearchRequest();
        
        $search_form = $this->createForm(new SearchType(), $search_request);
        $search_form->bindRequest ($session->get('search_request'));
        
        $data = $request->get('data');
        list($date, $action, $isReturn) = explode('|', $data); // 0:Date|1:Action(Next)|2:isReturn
        
        $date = \DateTime::createFromFormat('d/m/Y', $date);
        if ($action == 'NEXT')
            $date->add(new \DateInterval('P1D'));
        else
            $date->sub(new \DateInterval('P1D'));
        
        if ($isReturn == 1) {
            $tpl = 'FrontendWebBundle:Search:item_return.html.twig';    
            $arrivee_id = $search_request->getAirportDeparture()->getId();
            $depart_id = $search_request->getAirportArrival()->getId();        
        } else {
            $tpl = 'FrontendWebBundle:Search:item.html.twig';
            $depart_id = $search_request->getAirportDeparture()->getId();
            $arrivee_id = $search_request->getAirportArrival()->getId();
        }
            
        
        $dql = "SELECT v FROM BackendCoreBundle:Vols v WHERE ";
        $dql .= "v.aeroportDepart=" . $depart_id;
        $dql .= " AND ";
        $dql .= "v.aeroportArrivee=" . $arrivee_id;
        $dql .= " AND ";
        $dql .= "v.dateDepart='" . $date->format('Y-m-d') . "'";
        
        $query = $this->em()->createQuery($dql);
        $vols = $query->getResult();
        
        if (!empty($vols))
            $this->set('vols', $vols[0]);
        else
            $this->set('vols', $date->format('d/m/Y'));
        
        return $this->view($tpl);
    }
    
    private function buildListPassagers($search_request) {
        $list[] = array('type' => 'adults', 'number' => $search_request->getAdults());
        $list[] = array('type' => 'children', 'number' => $search_request->getChildren());
        $list[] = array('type' => 'babies', 'number' => $search_request->getBabies());

        $this->set('list_passagers', $list);
    }
    
    private function getListDeparture($search_request) {
        $dql = "SELECT v FROM BackendCoreBundle:Vols v";
        
        // Build where
        $where = array();

        if ($airportDeparture = $search_request->getAirportDeparture()) {
            $where[] = 'v.aeroportDepart=' . $airportDeparture->getId();
        }

        if ($airportArrival = $search_request->getAirportArrival()) {
            $where[] = 'v.aeroportArrivee=' . $airportArrival->getId();
        }

        if ($departure_date = $search_request->getDateDeparture()) {
            $departure = clone $departure_date;
            
            $date_from = $departure_date->sub(new \DateInterval('P3D'))->format('Y-m-d');
            $date_to = $departure_date->add(new \DateInterval('P8D'))->format('Y-m-d');
            
            $where[] = sprintf("v.dateDepart BETWEEN '%s' AND '%s'", $date_from, $date_to);
        }

        // Bind Where to SELECT
        if (!empty($where)) {
            $dql .= " WHERE " . implode(' AND ', $where);
        }

        // Bind Order to SELECT
        $dql .= " ORDER BY v.dateDepart";
        
        $list = array();
        $query = $this->em()->createQuery($dql);
        foreach($query->getResult() as $vols) {
            $index = $departure->diff($vols->getDateDepart());
            $index = $index->format('%R%a');
            $index += 3;
            $list[$index] = $vols;
        }
        
        $departure->sub(new \DateInterval('P3D'))->format('d/m/Y');
        for ($i=0,$j=8; $i<$j; $i++) {
            if (!isset($list[$i])) {
                $list[$i] = $departure->format('d/m/Y');
            }      
            $departure->add(new \DateInterval('P1D'));
        }
        ksort($list);
        
        return $list;
    }

    private function getListArrival($search_request) {
        $dql = "SELECT v FROM BackendCoreBundle:Vols v";
        
        // Build where
        $where = array();

        if ($airportArrival = $search_request->getAirportArrival()) {
            $where[] = 'v.aeroportDepart=' . $airportArrival->getId();
        }

        if ($airportDeparture = $search_request->getAirportDeparture()) {
            $where[] = 'v.aeroportArrivee=' . $airportDeparture->getId();
        }

        if ($arrival_date = $search_request->getDateArrival()) {
            $arrival = clone $arrival_date;
            
            $date_from = $arrival_date->sub(new \DateInterval('P3D'))->format('Y-m-d');
            $date_to = $arrival_date->add(new \DateInterval('P8D'))->format('Y-m-d');
            
            $where[] = sprintf("v.dateDepart BETWEEN '%s' AND '%s'", $date_from, $date_to);
        }

        // Bind Where to SELECT
        if (!empty($where)) {
            $dql .= " WHERE " . implode(' AND ', $where);
        }

        // Bind Order to SELECT
        $dql .= " ORDER BY v.dateDepart";
        
        $list = array();
        $query = $this->em()->createQuery($dql);
        foreach($query->getResult() as $vols) {
            $index = $arrival->diff($vols->getDateArive());
            $index = $index->format('%R%a');
            $index += 3;
            $list[$index] = $vols;
        }
        
        $arrival->sub(new \DateInterval('P3D'))->format('d/m/Y');
        for ($i=0,$j=8; $i<$j; $i++) {
            if (!isset($list[$i])) {
                $list[$i] = $arrival->format('d/m/Y');
            }      
            $arrival->add(new \DateInterval('P1D'));
        }
        ksort($list);
        
        return $list;
    }    
    
}
