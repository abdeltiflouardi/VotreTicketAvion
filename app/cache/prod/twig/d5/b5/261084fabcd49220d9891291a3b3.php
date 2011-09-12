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
        echo "\">
                        <div class=\"row\">
                            <label>De</label>
                            
                            <select name=\"search[airportDeparture]\">
                                <option value=\"\">--</option>
                                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'aeroports'));
        foreach ($context['_seq'] as $context['_key'] => $context['aeroport']) {
            // line 15
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'aeroport'), "id", array(), "any", false), "html");
            echo "\">
                                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'aeroport'), "aeroport", array(), "any", false), "html");
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aeroport'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "                            </select>
                        </div>

                        <div class=\"row\">
                            <label>Départ</label>
                            <input type=\"text\" name=\"search[departure]\" />
                            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
                        </div>
                            
                        <div class=\"row\">
                            <label>Vers</label>
                            <select name=\"search[airportArrival]\">
                                <option value=\"\">--</option>
                                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'aeroports'));
        foreach ($context['_seq'] as $context['_key'] => $context['aeroport']) {
            // line 33
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'aeroport'), "id", array(), "any", false), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'aeroport'), "aeroport", array(), "any", false), "html");
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aeroport'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "                            </select>
                        </div>

                        <div class=\"row\">
                            <label>Retour</label>
                            <input type=\"text\" name=\"search[return]\" />
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/calendrier.png"), "html");
        echo "\" alt=\"Calendrier\" />
                        </div>
                        
                        <div class=\"row-radio\">
                            <input id=\"return-0\" type=\"radio\" name=\"search[withReturn]\" value=\"0\" checked=\"checked\" />
                            <label for=\"return-0\">Aller simple</label>
                        </div>
                            
                        <div class=\"row-radio\"> 
                            <input id=\"return-1\" type=\"radio\" name=\"search[withReturn]\" value=\"1\" />
                            <label for=\"return-0\">Aller retour</label>
                        </div>
                        
                        <div class=\"row-sep\">&nbsp;</div>
                            
                        <div class=\"row-select\">
                            <label>Adulte</label>
                            <select name=\"search[adult]\">
                                ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 60
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, 'loop'), "index", array(), "any", false) == 1)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "</option>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "                            </select>                        
                        </div>
                            
                        <div class=\"row-select\">
                            <label>Enfant(2-11 ans)</label>
                            <select name=\"search[children]\">
                                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 69
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "                            </select>        
                        </div>

                        <div class=\"row-select\">
                            <label>Bébé (< 2 ans)</label>
                            <select name=\"search[babies]\">
                                ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 78
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "                            </select>                        
                        </div>
                        
                        <div class=\"row-info\">
                            <label>Tous les prix sont en (€)</label>    
                        </div>
                        
                        <div class=\"row-submit\">
                            <input type=\"image\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rechercher_btn.png"), "html");
        echo "\" />
                        </div>
                    </form>
                </div>
                <div class=\"search-picture\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/promo_ete.jpg"), "html");
        echo "\" alt=\"\" />
                </div>
            </div>
            <div id=\"slot-2\">
                <p class=\"villes\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/villes.png"), "html");
        echo "\" alt=\"\" />
                </p>                
            </div>
            
            <div id=\"slot-3\">
                <div class=\"newsletter\">
                    <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter.png"), "html");
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter_icon.png"), "html");
        echo "\" alt=\"\" />
                    <p>Recevez nos dernières promotions & infos exclusifs</p>
                    <form>
                        <input id=\"email\" type=\"input\" name=\"email\" />
                        <input type=\"image\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/newsletter_btn.png"), "html");
        echo "\" />
                    </form>
                </div>
                <div class=\"offre-1\">
                    <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_hotel.png"), "html");
        echo "\" alt=\"\" />
                </div>
                <div class=\"offre-2\">
                    <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_location.png"), "html");
        echo "\" alt=\"\" />
                </div>
                <div class=\"offre-3\">
                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/offre_croisiere.png"), "html");
        echo "\" alt=\"\" />
                </div>
            </div>
            
        </div>    
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
