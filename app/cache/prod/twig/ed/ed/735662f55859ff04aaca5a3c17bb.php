<?php

/* FrontendWebBundle:Client:subscribe.html.twig */
class __TwigTemplate_eded735662f55859ff04aaca5a3c17bb extends Twig_Template
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
        $parent = "FrontendWebBundle::layout.html.twig";
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
        echo "
<fieldset>
    <legend>Informations personnelles</legend>
    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_client_subscribe"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "

        <input type=\"submit\" />
    </form>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "FrontendWebBundle:Client:subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
