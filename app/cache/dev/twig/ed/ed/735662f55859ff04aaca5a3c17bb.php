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
        echo "<div class=\"content\">
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("FrontendWebBundle_client_subscribe"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo ">
        <fieldset class=\"personal-infos\">
            <legend>Informations personnelles</legend>
            ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
        </fieldset>

        <fieldset class=\"passagers-infos\">
            <legend>Passagers</legend>
            ";
        // line 13
        if (($this->getAttribute($this->getContext($context, 'search'), "adults", array(), "any", false) != 0)) {
            // line 14
            echo "                <fieldset>
                    <legend>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Adults"), "html");
            echo "</legend>
                    <table>
                        <tr>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Titre"), "html");
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lastname"), "html");
            echo "</td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Firstname"), "html");
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Birthday"), "html");
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nationalty"), "html");
            echo "</td>
                        </tr>
                        ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getContext($context, 'search'), "adults", array(), "any", false)));
            foreach ($context['_seq'] as $context['_key'] => $context['i']) {
                // line 25
                echo "                        <tr>
                            <td>
                                <select name=\"adults[";
                // line 27
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][titre]\" required=\"required\">
                                    <option value=\"\"></option>
                                    <option value=\"Mr.\">Mr.</option>
                                    <option value=\"Ms.\">Ms.</option>
                                </select>
                            </td>
                            <td><input type=\"text\" name=\"adults[";
                // line 33
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"adults[";
                // line 34
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][prenom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"adults[";
                // line 35
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][dateNaissance]\" required=\"required\" class=\"datepicker\" readonly=\"readonly\" /></td>
                            <td><input type=\"text\" name=\"adults[";
                // line 36
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nationalite]\" required=\"required\" /></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "                    </table>              
                </fieldset>
            ";
        }
        // line 42
        echo "            ";
        if (($this->getAttribute($this->getContext($context, 'search'), "children", array(), "any", false) != 0)) {
            // line 43
            echo "                <fieldset>
                    <legend>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Children"), "html");
            echo "</legend>
                    <table>
                        <tr>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Titre"), "html");
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lastname"), "html");
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Firstname"), "html");
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Birthday"), "html");
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nationalty"), "html");
            echo "</td>
                        </tr>
                        ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getContext($context, 'search'), "children", array(), "any", false)));
            foreach ($context['_seq'] as $context['_key'] => $context['i']) {
                // line 54
                echo "                        <tr>
                            <td>
                                <select name=\"children[";
                // line 56
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][titre]\" required=\"required\">
                                    <option value=\"\"></option>
                                    <option value=\"Mr.\">Mr.</option>
                                    <option value=\"Ms.\">Ms.</option>
                                </select>                            
                            </td>
                            <td><input type=\"text\" name=\"children[";
                // line 62
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"children[";
                // line 63
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][prenom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"children[";
                // line 64
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][dateNaissance]\" required=\"required\" class=\"datepicker\" readonly=\"readonly\" /></td>
                            <td><input type=\"text\" name=\"children[";
                // line 65
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nationalite]\" required=\"required\" /></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "                    </table>
                </fieldset>
            ";
        }
        // line 71
        echo "            ";
        if (($this->getAttribute($this->getContext($context, 'search'), "babies", array(), "any", false) != 0)) {
            // line 72
            echo "                <fieldset>
                    <legend>";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Babies"), "html");
            echo "</legend>
                    <table>
                        <tr>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Titre"), "html");
            echo "</td>
                            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Lastname"), "html");
            echo "</td>
                            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Firstname"), "html");
            echo "</td>
                            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Birthday"), "html");
            echo "</td>
                            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nationalty"), "html");
            echo "</td>
                        </tr>
                        ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getContext($context, 'search'), "babies", array(), "any", false)));
            foreach ($context['_seq'] as $context['_key'] => $context['i']) {
                // line 83
                echo "                        <tr>
                            <td>
                                <select name=\"babies[";
                // line 85
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][titre]\" required=\"required\">
                                    <option value=\"\"></option>
                                    <option value=\"Mr.\">Mr.</option>
                                    <option value=\"Ms.\">Ms.</option>
                                </select>                            
                            </td>
                            <td><input type=\"text\" name=\"babies[";
                // line 91
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"babies[";
                // line 92
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][prenom]\" required=\"required\" /></td>
                            <td><input type=\"text\" name=\"babies[";
                // line 93
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][dateNaissance]\" required=\"required\" class=\"datepicker\" readonly=\"readonly\" /></td>
                            <td><input type=\"text\" name=\"babies[";
                // line 94
                echo twig_escape_filter($this->env, $this->getContext($context, 'i'), "html");
                echo "][nationalite]\" required=\"required\" /></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 97
            echo "                    </table>
                </fieldset>    
            ";
        }
        // line 100
        echo "        </fieldset>
        <div style=\"clear: both; text-align: right;\">
            <input type=\"submit\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save your infos"), "html");
        echo "\" class=\"button\" />
        </div>
    </form>
</div>
";
    }

    // line 108
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 109
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blitzer/jquery-ui-1.8.16.custom.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
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
\t\$(function() {
\t\t\$(\".datepicker\").datepicker({dateFormat:'dd/mm/yy'});
\t});
    </script>    
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
