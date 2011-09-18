<?php

namespace Backend\CoreBundle\Twig;

/**
 * Description of Output
 *
 * @author ouardisoft
 */
class OutputExtension extends \Twig_Extension {

    private $container;
    private $request;
    private $templating;

    /**
     *
     * @param type $request 
     */
    public function __construct($container) {
        $this->container = $container;
        $this->request = $container->get('request');
        $this->templating = $container->get('twig');
    }

    /**
     * Returns a list of global functions to add to the existing list.
     *
     * @return array An array of global functions
     */
    public function getFunctions() {
        return array(
            'per_page_path' => new \Twig_Function_Method($this, 'perPagePath'),
            'pager_sort' => new \Twig_Function_Method($this, 'pagerSort'),
            'pager_pagination' => new \Twig_Function_Method($this, 'pagerPagination'),
            'gettype' => new \Twig_Function_Method($this, 'getType'),
            'is_key_exists' => new \Twig_Function_Method($this, 'isKeyExists'),
            'param' => new \Twig_Function_Method($this, 'getParam'),
        );
    }

    /**
     * return PerPagePath
     */
    public function perPagePath($per_page) {
        $path = $this->getCurrentUrl(array('per_page'));

        // Bind $per_page var to query string
        $separator = strpos($path, '?') ? '&' : '?';
        $path .= $separator . 'per_page=' . $per_page;

        return $path;
    }

    /**
     * return link of sort
     */
    public function pagerSort($title, $key) {
        $options = array();
        $path = $this->getCurrentUrl(array('sort', 'direction'));
        $sort = $this->request->get('sort');
        $direction = $this->request->get('direction');

        if (($sort == $key) && ($direction == 'asc')) {
            $direction = 'desc';
        } else {
            $direction = 'asc';
        }

        $separator = strpos($path, '?') ? '&' : '?';

        $path .= $separator . 'sort=' . $key;
        $path .= '&direction=' . $direction;

        $options = array('href' => $path);

        return $this->templating->render('BackendCoreBundle:Pager:sort_link.html.twig', array('options' => $options, 'title' => $title));
    }

    /**
     * return links of pagination
     */
    public function pagerPagination($pager, $template) {
        $path = $this->getCurrentUrl(array('page'));

        $range_number = $this->container->getParameter('pager.range');

        $separator = strpos($path, '?') ? '&' : '?';
        $path .= $separator;

        $start = ($pager->getCurrentPage() >= $range_number) ? $pager->getCurrentPage() - $range_number : 1;
        $end = ($pager->getCurrentPage() + $range_number > $pager->getNbPages()) ? $pager->getNbPages() : $pager->getCurrentPage() + $range_number;

        $range = range($start, $end);

        return $this->templating->render($template, array('pager' => $pager, 'path' => $path, 'range' => $range));
    }

    /**
     * return current url
     */
    public function getCurrentUrl($exclusion = array()) {
        // Get current quert string
        $query_string = $this->request->getQueryString();

        // Remove current per_page from query string
        parse_str($query_string, $output);

        foreach ($exclusion as $key)
            unset($output[$key]);

        $query_string = http_build_query($output);

        // Bind query string with path
        $path = $this->request->getBaseUrl() . $this->request->getPathInfo();

        if (!empty($query_string))
            $path .= "?" . $query_string;

        return $path;
    }

    /**
     * @return type of var
     */
    public function getType($var) {
        return gettype($var);
    }

    /**
     * @return boolen
     * if key exists in array
     */
    public function isKeyExists($key, $array) {
        if (is_array($array))
            if (array_key_exists($key, $array))
                return true;
            else
                return false;

        return false;
    }

    public function getParam($name) {
        return $this->container->getParameter($name);
    }
    
    /**
     * Name of this extension
     *
     * @return string
     */
    public function getName() {
        return 'output';
    }

}

?>