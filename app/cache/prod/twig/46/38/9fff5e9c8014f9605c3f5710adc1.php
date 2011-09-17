<?php

/* FrontendWebBundle::layout.html.twig */
class __TwigTemplate_46389fff5e9c8014f9605c3f5710adc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>
    <div id=\"wrapper\">
        <div id=\"header\">
            <div id=\"header-logo\"></div>
            <ul id=\"header-menu\">
                <li><a href=\"#chi-siamo\">Chi siamo</a></li>
                <li class=\"sep\">|</li>
                <li><a href=\"#mappa-del-sito\">Mappa del sito</a></li>
                <li class=\"sep\">|</li>
                <li><a href=\"#contatto\">Contatto</a></li>
            </ul>
            <ul id=\"menu\">
                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_web_index"), "html");
        echo "\" alt=\"home\">Home</a></li>
                <li><a href=\"#voli\">Voli</a></li>
                <li><a href=\"#auto\">Auto</a></li>
                <li><a href=\"#hotel\">Hotel</a></li>
                <li><a href=\"#corciere\">Corciere</a></li>
                <li class=\"last\"><a href=\"#consigli-pratici\">Consigli Pratici</a></li>
            </ul>
        </div>
       
        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "            
        <div id=\"footer\">
            <div id=\"footer-logo\"></div>
            <p class=\"copyright\">Copyright &copy; 2011 tous droits reservés</p>
        </div>
    </div>
        
    ";
        // line 41
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

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FrontendWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
