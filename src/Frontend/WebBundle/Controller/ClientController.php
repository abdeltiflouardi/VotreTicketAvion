<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Backend\CoreBundle\Form\ClientType,
    Backend\CoreBundle\Form\PassagerType,
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
                
                $reservation_return = new Reservation();
                $reservation_return->setClient($client);
                $reservation_return->setDate(new \DateTime());
                $reservation_return->setVols($this->findOne('BackendCoreBundle:Vols', $vols->getReturn()));               

                $em->persist($reservation_return);
                $em->flush();                 
                
                // Mapping posted data
                $adults = $request->get('adults', array());
                $children = $request->get('children', array());
                $babies = $request->get('babies', array());

                $passagers_array = array_merge($adults, $children, $babies);

                foreach($passagers_array as $passager_array) {
                    if (!empty($passager_array['dateNaissance'])) {
                        $date_array = explode('/', $passager_array['dateNaissance']);

                        $date = new \DateTime();
                        $date->setDate($date_array[2], $date_array[1], $date_array[0]);
                    } else
                        $date = null;

                    $passager = new Passager();
                    $passager->setTitre($passager_array['titre']);
                    $passager->setNom($passager_array['nom']);
                    $passager->setPrenom($passager_array['prenom']);
                    $passager->setDateNaissance($date);
                    $passager->setNationalite($passager_array['nationalite']);
                    
                    $reservation->addPassager($passager);
                    $passager->addReservation($reservation);

                    $em->persist($passager);          
                    $em->persist($reservation);
                    $em->flush();
                    
                    $reservation_return->addPassager($passager);
                    $passager->addReservation($reservation_return);                    
                    
                    $em->persist($passager);          
                    $em->persist($reservation_return);
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
