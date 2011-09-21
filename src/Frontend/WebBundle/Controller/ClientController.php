<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Backend\CoreBundle\Form\ClientType,
    Backend\CoreBundle\Entity\Client,
    Backend\CoreBundle\Entity\Reservation,
    Backend\CoreBundle\Entity\Passager;

class ClientController extends Controller
{
    
    public function subscribeAction()
    {
        $request = $this->getRequest();        
        $session = $request->getSession();
        
        $client = new Client();

        $form = $this->createForm(new ClientType(), $client);
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            
            if ($form->isValid()) {
                $em = $this->em();

                $em->persist($client);
                $em->flush();

                /**
                 * Save reservation
                 */
                $vols = $session->get('vols');

                $reservation = new Reservation();
                $reservation->setClient($client);
                $reservation->setDate(new \DateTime());
                $reservation->setVols($this->findOne('BackendCoreBundle:Vols', $vols->getDeparture()));               

                $em->persist($reservation);
                $em->flush();                
                
                // Mapping posted data
                $adults = $request->get('adults', array());
                $children = $request->get('children', array());
                $babies = $request->get('babies', array());

                $passagers_array = array_merge($adults, $children, $babies);

                foreach($passagers_array as $passager_array) {
                    $passager = new Passager();
                    $passager->setTitre(null);
                    $passager->setNom($passager_array['lastname']);
                    $passager->setPrenom($passager_array['firstname']);
                    $passager->setDateNaissance(null);
                    $passager->setNationalite($passager_array['nationalty']);

                    $reservation->addPassager($passager);
                    $passager->addReservation($reservation);

                    $em->persist($passager);          
                    $em->persist($reservation);
                    $em->flush();
                }               
 
                
                $this->flash('Informations saved successfully.');
                return $this->redirectTo('FrontendWebBundle_client_subscribe_success');
            }
        }

        $this->set('search', $session->get('search'));
        $this->set('form', $form->createView());
        
        return $this->view('FrontendWebBundle:Client:subscribe.html.twig');
    }
    
    /**
     * Subscribe success
     */
    public function subscribeSuccessAction() {
        return $this->view('FrontendWebBundle:Client:subscribe_success.html.twig');
    }
}
