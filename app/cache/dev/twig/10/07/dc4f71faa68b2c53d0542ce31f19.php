<?php

/* BackendAdminBundle:Reservation:new.html.twig */
class __TwigTemplate_1007dc4f71faa68b2c53d0542ce31f19 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "BackendAdminBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"content\">
    <h1>Reservation creation</h1>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation_create"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
        <p>
            <button type=\"submit\">Create</button>
        </p>
    </form>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation"), "html");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Reservation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
