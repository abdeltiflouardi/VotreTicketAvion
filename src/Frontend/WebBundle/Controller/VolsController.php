<?php

namespace Frontend\WebBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Frontend\WebBundle\Request\Vols as VolsRequest,
    Frontend\WebBundle\Form\VolsType as VolsForm;

class VolsController extends Controller
{

    public function storeAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        $vols_request = new VolsRequest();

        $vols_form = $this->createForm(new VolsForm(), $vols_request);
        $vols_form->bindRequest($request);

        $session->set('vols', $vols_request);

        return $this->redirectTo('FrontendWebBundle_client_subscribe');
    }
}
