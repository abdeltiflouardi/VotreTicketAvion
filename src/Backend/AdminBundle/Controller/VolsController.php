<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;
use Backend\CoreBundle\Entity\Vols;
use Backend\CoreBundle\Form\VolsType;

class VolsController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Vols:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT v FROM BackendCoreBundle:Vols v';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }      
    

    /**
     * Finds and displays a Vols entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Vols')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vols entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendCoreBundle:Vols:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Vols entity.
     *
     */
    public function newAction()
    {
        $entity = new Vols();
        $form   = $this->createForm(new VolsType(), $entity);

        return $this->render('BackendCoreBundle:Vols:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Vols entity.
     *
     */
    public function createAction()
    {
        $entity  = new Vols();
        $request = $this->getRequest();
        $form    = $this->createForm(new VolsType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vols_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BackendCoreBundle:Vols:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Vols entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Vols')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vols entity.');
        }

        $editForm = $this->createForm(new VolsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendCoreBundle:Vols:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Vols entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Vols')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vols entity.');
        }

        $editForm   = $this->createForm(new VolsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vols_edit', array('id' => $id)));
        }

        return $this->render('BackendCoreBundle:Vols:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Vols entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BackendCoreBundle:Vols')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vols entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vols'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }  
}
