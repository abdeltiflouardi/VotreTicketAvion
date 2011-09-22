<?php

/* FrontendWebBundle:Search:results.html.twig */
class __TwigTemplate_b7808590f07607433394305ecceb9228 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        echo "<div class=\"content\">
    <div class=\"sidebar-left\">
        <div class=\"title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Details"), "html");
        echo "</div>
        <div class=\"vols-details\">
            
        </div>
    </div>

    <div class=\"sidebar-right\">
        ";
        // line 13
        if (($this->getAttribute($this->getContext($context, 'departure'), "nbResults", array(), "any", false) > 0)) {
            // line 14
            echo "            <div class=\"airport-infos\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportDepart", array(), "any", false), "aeroport", array(), "any", false), "html");
            echo "
                -
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportArrivee", array(), "any", false), "aeroport", array(), "any", false), "html");
            echo "
            </div>
            <div class=\"list-results\">
                ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'departure'));
            foreach ($context['_seq'] as $context['_key'] => $context['vols']) {
                // line 21
                echo "                    <div id=\"item-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'vols'), "id", array(), "any", false), "html");
                echo "\" class=\"item\">
                        <ul>
                            <li class=\"title\">";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "dateDepart", array(), "any", false), "d/m/Y"), "html");
                echo "</li>
                            <li class=\"price\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false), "html");
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('output')->getParam("currency"), "html");
                echo "</li>
                        </ul>                     
                    </div>
                    <div id=\"vols-details-item-";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'vols'), "id", array(), "any", false), "html");
                echo "\" style=\"display: none;\">
                        <ul class=\"vols-details-list\">
                            <li>
                                <label>";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date depature"), "html");
                echo ":</label> 
                                <span>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "dateDepart", array(), "any", false), "d/m/Y"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hour departue"), "html");
                echo ":</label> 
                                <span>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "heureDepart", array(), "any", false), "H:i"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date arrival"), "html");
                echo ":</label> 
                                <span>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "dateArive", array(), "any", false), "d/m/Y"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hour arrival"), "html");
                echo ":</label> 
                                <span>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "heureArivee", array(), "any", false), "H:i"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adults price"), "html");
                echo ":</label> 
                                <span class=\"adults-price\">";
                // line 47
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false), "&nbsp;")) : ("&nbsp;"));
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('output')->getParam("currency"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Children price"), "html");
                echo ":</label> 
                                <span class=\"children-price\">";
                // line 51
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifEnfant", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifEnfant", array(), "any", false), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false)));
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('output')->getParam("currency"), "html");
                echo "</span>
                            </li>
                            <li>
                                <label>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Babies price"), "html");
                echo ":</label> 
                                <span class=\"babies-price\">";
                // line 55
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifBebe", array(), "any", true)) ? (twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifBebe", array(), "any", false), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false)));
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('output')->getParam("currency"), "html");
                echo "</span>
                            </li>
                        </ul>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vols'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 60
            echo "            </div>
            ";
        }
        // line 62
        echo "    </div>
    ";
        // line 81
        echo "    <div class=\"sidebar-right\" style=\"margin-top: 10px; border: 0px;\">
        <table class=\"table\">
            <tr>
                <th>Passagers</th>
                <th>Nombre</th>
                <th>Prix</th>
                <th>Total</th>            
            </tr>
            ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'list_passagers'));
        foreach ($context['_seq'] as $context['_key'] => $context['passager_infos']) {
            // line 90
            echo "            <tr>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'passager_infos'), "type", array(), "array", false), "html");
            echo "</td>
                <td class=\"number-";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'passager_infos'), "type", array(), "array", false), "html");
            echo " number\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'passager_infos'), "number", array(), "array", false), "html");
            echo "</td>
                <td class=\"price-";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'passager_infos'), "type", array(), "array", false), "html");
            echo " number\"></td>
                <td class=\"total-";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'passager_infos'), "type", array(), "array", false), "html");
            echo " number\"></td>            
            </tr>                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passager_infos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "            
        </table>
    </div>    
    <div class=\"sidebar-right\" style=\"text-align: right; border: 0px; background-color: #fff;\">
        <label>TOTAL: <span class=\"total\"></span></label>
    </div>        
    <div class=\"sidebar-right\" style=\"text-align: right; border: 0px; background-color: #fff;\">
        <form id=\"volsForm\" action=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_vols_store"), "html");
        echo "\" method=\"post\">
            <input type=\"hidden\" id=\"vols-departue\" name=\"vols[departure]\" value=\"\" />
            <input type=\"hidden\" id=\"vols-departue\" name=\"vols[return]\" value=\"\" />
            <input type=\"submit\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send your vols"), "html");
        echo "\" class=\"button\" />
        </form>
    </div>      
</div>
";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 113
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.6.2.min.js"), "html");
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.8.16.custom.min.js"), "html");
        echo "\"></script>

    <script>
        \$('.item').click(function() {
            // Change color of selected vol
            \$('.item').css('background-color', '#FFF');
            \$('.item .price').css('color', '#000');

            \$(this).css('background-color', '#FF4242');
            \$(this).find('.price').css('color', '#FFF');

            // Show details in left sidebar
            block = '#vols-details-' + \$(this).attr('id');
            \$('.vols-details').html(\$(block).html());

            // Put value of selected item to form
            \$('#vols-departue').val(\$(this).attr('id').replace('item-', ''));
            
            // Print total price
            price_adults = parseInt(\$('.vols-details').find('.adults-price').text());
            number_adults = parseInt(\$('.number-adults').text());
            price_children = parseInt(\$('.vols-details').find('.children-price').text());
            number_children = parseInt(\$('.number-children').text());
            price_babies = parseInt(\$('.vols-details').find('.babies-price').text());
            number_babies = parseInt(\$('.number-babies').text());
            
            \$('.price-adults').html(price_adults);
            \$('.price-children').html(price_children);
            \$('.price-babies').html(price_babies);
            
            \$('.total-adults').html(price_adults*number_adults);
            \$('.total-children').html(price_children*number_children);
            \$('.total-babies').html(price_babies*number_babies);
            
            \$('.total').html(price_babies*number_babies + price_children*number_children + price_adults*number_adults);
        });
        
        \$('#volsForm').submit(function() {
            var val = \$('#vols-departue').val();
            if (val == '') {
                alert('";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose a vols"), "html");
        echo "');
                return false;
            }

            return true;
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendWebBundle:Search:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
