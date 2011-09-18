<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Backend\CoreBundle\Form\ClientType,
    Backend\CoreBundle\Entity\Client,
    Backend\CoreBundle\Entity\Reservation;

class ClientController extends Controller
{
    
    public function subscribeAction()
    {
        $client = new Client();
        $request = $this->getRequest();

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
                $session = $request->getSession();
                $search = $session->get('search');
                $vols = $session->get('vols');

                $reservation = new Reservation();
                $reservation->setClient($client);
                $reservation->setDate(new \DateTime());
                $reservation->setVols($this->findOne('BackendCoreBundle:Vols', $vols->getDeparture()));

                $em->persist($reservation);
                $em->flush();                

                $this->flash('Informations saved successfully.');
                return $this->redirectTo('FrontendWebBundle_client_subscribe_success');
            }
        }

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
