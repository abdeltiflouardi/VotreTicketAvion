<?php

/* BackendAdminBundle:Reservation:index.html.twig */
class __TwigTemplate_cd9f5e8b01e03af82f4ddc659743d8f2 extends Twig_Template
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
        $parent = "BackendAdminBundle::layout.html.twig";
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
        echo "<div id=\"content\">
    <h1>Reservation</h1>
    
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BackendAdminBundle_reservation_new"), "html");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New"), "html");
        echo "</a>
    
    <table>
        <tr>
            <th>#</th>
            <th>";
        // line 12
        echo $this->env->getExtension('output')->pagerSort("Id", "r.id");
        echo "</th>
        </tr>
    
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'pager'));
        foreach ($context['_seq'] as $context['_key'] => $context['reservation']) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'reservation'), "id", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'reservation'), "id", array(), "any", false), "html");
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "    </table>
    
    ";
        // line 23
        echo $this->env->getExtension('output')->pagerPagination($this->getContext($context, 'pager'), "BackendCoreBundle:Pager:sliding.html.twig");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
