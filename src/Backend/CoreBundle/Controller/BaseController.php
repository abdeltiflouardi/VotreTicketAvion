<?php

namespace Backend\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller {

    private $viewData = array();

    /**
     * Return EntityManager
     */
    public function em() {
        return $this->getDoctrine()->getEntityManager();
    }
    
    /**
     * return repository of entity
     */
    public function repo($entity) {
        return $this->em()->getRepository($entity);
    }
    
    /**
     * return entity
     */
    public function findOne($entity, $id) {
        return $this->repo($entity)->find($id);
    }
    
    /**
     * return All entities
     */
    public function findAll($entity) {
        return $this->repo($entity)->findAll();
    }
    
    /**
     *
     * @param type $user
     * @return type 
     */
    public function encodePassword($user = null) {
        $encoders = $this->get('security.encoder_factory');
        $encoder = $encoders->getEncoder($user);

        $user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));
    }    
    
    /**
     * 
     */
    public function getSecurity() {
        return $this->get('security.context');
    }

    /**
     */
    public function getUser() {
        return $this->getSecurity()->getToken()->getUser();  
    }
    
    /**
     * Pager entities
     * Get part of list
     */
    public function pager($entity, $options = array()) {
        // Paginate options
        $_default_options = array(
            'maxPerPage' => 1,
        );

        $options = array_merge($_default_options, $options);

        $per_page = $this->getRequest()->get('per_page');
        if ($per_page) {
            $options['maxPerPage'] = $per_page;
        }
        
        // Query
        if ($entity instanceof \Doctrine\ORM\Query) {
            $query = $entity;
        } else {
            $dql = "SELECT a FROM " . $entity . " a";
        
            $query = $this->em()->createQuery($dql);
        }
        
        $sort =  $this->getRequest()->get('sort');
        $direction = $this->getRequest()->get('direction');

        // Sorting pager
        if ($sort && $direction) {
            $dql = $query->getDQL();

            $dql .= ' ORDER BY ' . $sort . ' ' . strtoupper($direction);

            $query->setDQL($dql);            
        }
        
        // ORM adapter
        $adapter = new \Pagerfanta\Adapter\DoctrineORMAdapter($query);

        // Pagerfanta
        $pagerfanta = new \Pagerfanta\Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage($options['maxPerPage']);
        $pagerfanta->setCurrentPage($this->get('request')->query->get('page', 1));

        // return $pagerfanta
        return $pagerfanta;
    }

    /**
     * View data
     * 
     * @param mixed $name
     * @param mixed $value 
     */
    public function set($name, $value = null) {
        if (is_array($name))
            foreach ($name as $k => $v)
                $this->viewData[$k] = $v;
        else
            $this->viewData[$name] = $value;
    }

    /**
     * Render view + data
     *
     * @param string $template
     * @return View 
     */
    public function view($template) {
        return $this->render($template, $this->viewData);
    }
    
    /**
     * Redirect
     */
    public function redirectTo($route) {
        $path = $this->generateUrl($route);
        return new \Symfony\Component\HttpFoundation\RedirectResponse($path);
    }

    /**
     * Translate words
     */
    public function trans($word) {
        return $this->get('translator')->trans($word);
    }
    
    /**
     * Flash message
     * 
     * @param string $message
     * @param string $type 
     */
    public function flash($message, $type = "success") {
        $session = $this->getRequest()->getSession();
        
        $session->setFlash($type, $this->trans($message));
    }
    
    /**
     * Bind requested data to schema mapper
     */
    public function bindData($entity, $data) {
        
    }
}
