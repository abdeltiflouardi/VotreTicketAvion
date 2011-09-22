<?php

/* BackendAdminBundle:Airoport:index.html.twig */
class __TwigTemplate_1d7d7f0eb3c6c456f791e4a1d79efd02 extends Twig_Template
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
        echo "<h1>Airoport list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>";
        // line 9
        echo $this->env->getExtension('output')->pagerSort("Id", "a.id");
        echo "</th>
            <th>";
        // line 10
        echo $this->env->getExtension('output')->pagerSort("Airoport", "a.aeroport");
        echo "</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'pager'));
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 16
            echo "        <tr>
            <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("airoport_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo "</a></td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "aeroport", array(), "any", false), "html");
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("airoport_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("airoport_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "    </tbody>
</table>

<p>";
        // line 34
        echo $this->env->getExtension('output')->pagerPagination($this->getContext($context, 'pager'), "BackendCoreBundle:Pager:sliding.html.twig");
        echo "</p>

<ul>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("airoport_new"), "html");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Airoport:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
