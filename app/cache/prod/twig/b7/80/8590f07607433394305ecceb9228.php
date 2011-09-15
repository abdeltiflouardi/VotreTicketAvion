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
        echo "    
<form action=\"\" method=\"post\">
    <div class=\"airport-infos\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportDepart", array(), "any", false), "aeroport", array(), "any", false), "html");
        echo "
        -
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportArrivee", array(), "any", false), "aeroport", array(), "any", false), "html");
        echo "
    </div>
    <div class=\"list-results\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'departure'));
        foreach ($context['_seq'] as $context['_key'] => $context['vols']) {
            // line 12
            echo "            <div class=\"item\">
                <input type=\"radio\" name=\"vols[departure]\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'vols'), "id", array(), "any", false), "html");
            echo "\" />
                <ul>
                    <li>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "dateDepart", array(), "any", false), "d/m/Y"), "html");
            echo "</li>
                    <li>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false), "html");
            echo "</li>
                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vols'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "    </div>

    <div class=\"airport-infos\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportArrivee", array(), "any", false), "aeroport", array(), "any", false), "html");
        echo "
        -
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'departure'), "currentPageResults", array(), "any", false), 0, array(), "array", false), "aeroportDepart", array(), "any", false), "aeroport", array(), "any", false), "html");
        echo "
    </div>
    <div class=\"list-results\">
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'arrival'));
        foreach ($context['_seq'] as $context['_key'] => $context['vols']) {
            // line 29
            echo "            <div class=\"item\">
                <input type=\"radio\" name=\"vols[return]\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'vols'), "id", array(), "any", false), "html");
            echo "\" />
                <ul>
                    <li>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'vols'), "dateDepart", array(), "any", false), "d/m/Y"), "html");
            echo "</li>
                    <li>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'vols'), "tarifs", array(), "any", false), 0, array(), "array", false), "tarifAdulte", array(), "any", false), "html");
            echo "</li>
                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vols'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "    </div>
        
        <input type=\"submit\" value=\"Save\" />
</form>
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
