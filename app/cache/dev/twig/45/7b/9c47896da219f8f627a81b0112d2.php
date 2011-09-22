<?php

/* BackendAdminBundle::layout.html.twig */
class __TwigTemplate_457b9c47896da219f8f627a81b0112d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>Title</title>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>
    <div id=\"wrapper\">
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "            
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "            
        <div id=\"footer\">
            
        </div>
    </div>

    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        echo "        
</body>
</html>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        // line 15
        echo "        <div id=\"header\">
            <ul class=\"menu\">
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BackendAdminBundle_homepage"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html");
        echo "</a></li>
                <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BackendAdminBundle_profile_index"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile"), "html");
        echo "</a></li>
                <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reservation"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reservation"), "html");
        echo "</a></li>
                <li><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Client"), "html");
        echo "</a></li>
                <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vols"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Vols"), "html");
        echo "</a></li>
                <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("airoport"), "html");
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Airoport"), "html");
        echo "</a></li>
            </ul>
        </div>
        ";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
