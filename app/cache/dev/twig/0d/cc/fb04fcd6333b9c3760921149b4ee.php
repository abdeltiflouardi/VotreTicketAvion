<?php

/* FrontendWebBundle:Search:form.html.twig */
class __TwigTemplate_0dccfb04fcd6333b9c3760921149b4ee extends Twig_Template
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
        echo "<form>
    ";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form_search'));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "FrontendWebBundle:Search:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
