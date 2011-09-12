<?php

namespace Backend\AdminBundle\Controller;

use Backend\CoreBundle\Controller\BaseController as Controller;
use Backend\CoreBundle\Entity\Aeroport as Airoport;
use Backend\CoreBundle\Form\AiroportType;

class AiroportController extends Controller
{
    
    public function indexAction()
    {
        $this->set('pager', $this->pager($this->buildQuery()));
        return $this->view('BackendAdminBundle:Airoport:index.html.twig');
    }
    
    public function buildQuery() {
        
        $dql = 'SELECT a FROM BackendCoreBundle:Aeroport a';
        
        $query = $this->em()->createQuery($dql);
        
        return $query;
    }
    

    /**
     * Finds and displays a Aeroport entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Aeroport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Airoport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendAdminBundle:Airoport:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Airoport entity.
     *
     */
    public function newAction()
    {
        $entity = new Airoport();
        $form   = $this->createForm(new AiroportType(), $entity);

        return $this->render('BackendAdminBundle:Airoport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Airoport entity.
     *
     */
    public function createAction()
    {
        $entity  = new Airoport();
        $request = $this->getRequest();
        $form    = $this->createForm(new AiroportType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('airoport_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BackendAdminBundle:Airoport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Airoport entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Aeroport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Airoport entity.');
        }

        $editForm = $this->createForm(new AiroportType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendAdminBundle:Airoport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Airoport entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BackendCoreBundle:Aeroport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Airoport entity.');
        }

        $editForm   = $this->createForm(new AiroportType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('airoport_edit', array('id' => $id)));
        }

        return $this->render('BackendAdminBundle:Airoport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Airoport entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BackendCoreBundle:Aeroport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Airoport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('airoport'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
