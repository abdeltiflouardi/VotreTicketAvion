<?php

/* FrontendWebBundle:Home:index.html.twig */
class __TwigTemplate_d5b5261084fabcd49220d9891291a3b3 extends Twig_Template
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
        echo "        <div id=\"content\">
            <div id=\"slot-1\">
                <div class=\"search\">
                    <div class=\"tab-1\">Réserver maintenant</div>
                    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_search_result"), "html");
        echo "\" method=\"post\">
                        <div class=\"row-radio\">
                            ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'search_form'), "withReturn", array(), "any", false), 0, array(), "array", false));
        echo "
                            <label for=\"searchForm_withReturn_0\">Aller simple</label>
                        </div>

                        <div class=\"row-radio\"> 
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, 'search_form'), "withReturn", array(), "any", false), 1, array(), "array", false));
        echo "
                            <label for=\"searchForm_withReturn_1\">Aller retour</label>
                        </div>                        
                        
                        <div class=\"row-sep\">&nbsp;</div>                            
                            
                        <div class=\"row\">
                            <label>De</label>
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "airportDeparture", array(), "any", false));
        echo "
                        </div>

                        <div class=\"row\">
                            <label for=\"searchForm_dateDeparture\">Départ</label>
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "dateDeparture", array(), "any", false), array("attr" => array("class" => "datepicker", "readonly" => "readonly")));
        echo "
                            <img id=\"departure-img\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
                        </div>
                            
                        <div class=\"row\">
                            <label>Vers</label>
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "airportArrival", array(), "any", false));
        echo "
                        </div>

                        <div class=\"row\">
                            <label for=\"searchForm_dateArrival\">Retour</label>
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "dateArrival", array(), "any", false), array("attr" => array("class" => "datepicker", "readonly" => "readonly")));
        echo "
                            <img id=\"return-img\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
                        </div>
                        
                        <div class=\"row-sep\">&nbsp;</div>                            
                        
                        <div class=\"row-select\">
                            <label>Adultes</label>
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "adults", array(), "any", false));
        echo "
                        </div>
                            
                        <div class=\"row-select\">
                            <label>Enfants <small>(2-11 ans)</small></label>
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "children", array(), "any", false));
        echo "
                        </div>

                        <div class=\"row-select\">
                            <label>Bébés <small>(< 2 ans)</small></label>
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'search_form'), "babies", array(), "any", false));
        echo "
                        </div>
                        
                        <div class=\"row-info\">
                            <label>Tous les prix sont en (€)</label>    
                        </div>
                        
                        <div class=\"row-submit\">
                            <input type=\"image\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rechercher_btn.png"), "html");
        echo "\" />
                        </div>
                        
                        ";
        // line 68
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'search_form'));
        echo "
                    </form>
                </div>
                <div class=\"search-picture\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/promo_ete.jpg"), "html");
        echo "\" alt=\"\" />
                </div>
            </div>
            <div id=\"slot-2\">
                <p class=\"villes\">
                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/villes.png"), "html");
        echo "\" alt=\"\" />
                </p>                
            </div>
            
            <div id=\"slot-3\">
                <div class=\"newsletter\">
                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter.png"), "html");
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter_icon.png"), "html");
        echo "\" alt=\"\" />
                    <p>Recevez nos dernières promotions & infos exclusifs</p>
                    <form>
                        <input id=\"email\" type=\"input\" name=\"email\" />
                        <input type=\"image\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter_btn.png"), "html");
        echo "\" />
                    </form>
                </div>
                <div class=\"offre-1\">
                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_hotel.png"), "html");
        echo "\" alt=\"\" />
                </div>
                <div class=\"offre-2\">
                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_location.png"), "html");
        echo "\" alt=\"\" />
                </div>
                <div class=\"offre-3\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_croisiere.png"), "html");
        echo "\" alt=\"\" />
                </div>
            </div>            
        </div>    
";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 105
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blitzer/jquery-ui-1.8.16.custom.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        // line 109
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.6.2.min.js"), "html");
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.16.custom.min.js"), "html");
        echo "\"></script>
    <script>
\t\$(function() {
\t\t\$(\".datepicker\").datepicker();
                \$(\"#departure-img\").click(function (){\$(\"#searchForm_dateDeparture\").focus();});
                \$(\"#return-img\").click(function (){\$(\"#searchForm_dateArrival\").focus();});
\t});
    </script>    
";
    }

    public function getTemplateName()
    {
        return "FrontendWebBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
