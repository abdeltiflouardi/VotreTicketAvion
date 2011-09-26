<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller,
    Backend\CoreBundle\Form\UsersType as UsersForm;

class ProfileController extends Controller
{
    
    public function indexAction()
    {
        $user = $this->getUser();
        $password = $user->getPassword();
        
        $form = $this->createForm(new UsersForm(), $user);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            
            if ($form->isValid()) {
                
                if ($user->getPassword())
                    $this->encodePassword($user);
                else
                    $user->setPassword($password);
                
                $em = $this->em();
                $em->persist($user);
                $em->flush();
            }
        }
        
        $this->set('form', $form->createView());
        
        return $this->view('BackendAdminBundle:Profile:index.html.twig');
    }
}
