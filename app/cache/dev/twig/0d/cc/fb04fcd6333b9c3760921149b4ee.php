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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_search_result"), "html");
        echo "\" method=\"post\">
    <fieldset class=\"form\">
        <div class=\"form-row\">
            <label class=\"label\">&nbsp;</label>
            ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'search_form'), "withReturn", array(), "any", false), 0, array(), "array", false));
        echo " <label for=\"searchForm_withReturn_0\">Aller simple</label> 
            ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'search_form'), "withReturn", array(), "any", false), 1, array(), "array", false));
        echo " <label for=\"searchForm_withReturn_1\">Aller retour</label> 
        </div>
        <div class=\"form-row\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'search_form'), "airportDeparture", array(), "any", false), null, array("attr" => array("class" => "label")));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "airportDeparture", array(), "any", false));
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "airportDeparture", array(), "any", false));
        echo "
        </div>
        <div class=\"form-row\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'search_form'), "dateDeparture", array(), "any", false), null, array("attr" => array("class" => "label")));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "dateDeparture", array(), "any", false), array("attr" => array("class" => "datepicker")));
        echo "
            <img id=\"departure-img\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
            ";
        // line 20
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "dateDeparture", array(), "any", false));
        echo "    
        </div>
        <div class=\"form-row\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'search_form'), "airportArrival", array(), "any", false), null, array("attr" => array("class" => "label")));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "airportArrival", array(), "any", false));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "airportArrival", array(), "any", false));
        echo "
        </div>
        <div class=\"form-row\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'search_form'), "dateArrival", array(), "any", false), null, array("attr" => array("class" => "label")));
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "dateArrival", array(), "any", false), array("attr" => array("class" => "datepicker")));
        echo "
            <img id=\"return-img\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
            ";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "dateArrival", array(), "any", false));
        echo "     
        </div>
        <div class=\"form-row\">
            <label class=\"label\">Adults</label>
            ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "adults", array(), "any", false));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "adults", array(), "any", false));
        echo "            
        </div>  
        <div class=\"form-row\">   
            <label class=\"label\">Enfants <small>(2-11 ans)</small></label>
            ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "children", array(), "any", false));
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "children", array(), "any", false));
        echo "
        </div>  
        <div class=\"form-row\">   
            <label class=\"label\">Bébés <small>(< 2 ans)</small></label>
            ";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "babies", array(), "any", false));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'search_form'), "babies", array(), "any", false));
        echo "
        </div>
        ";
        // line 48
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'search_form'));
        echo "
        <input type=\"submit\" value=\"Rechercher\" class=\"button\" />
    </fieldset>
</form>
";
    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 55
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blitzer/jquery-ui-1.8.16.custom.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.6.2.min.js"), "html");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.16.custom.min.js"), "html");
        echo "\"></script>
    <script>
\t\$(function() {
\t\t\$(\".datepicker\").datepicker({dateFormat:'dd/mm/yy'});
                \$(\"#departure-img\").click(function (){\$(\"#searchForm_dateDeparture\").focus();});
                \$(\"#return-img\").click(function (){\$(\"#searchForm_dateArrival\").focus();});
\t});
    </script>    
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
