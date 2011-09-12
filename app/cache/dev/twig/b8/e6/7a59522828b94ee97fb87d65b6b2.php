<?php

/* BackendAdminBundle:Client:index.html.twig */
class __TwigTemplate_b8e67a59522828b94ee97fb87d65b6b2 extends Twig_Template
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
    <h1>Client list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>";
        // line 10
        echo $this->env->getExtension('output')->pagerSort("Id", "c.id");
        echo "</th>
                <th>";
        // line 11
        echo $this->env->getExtension('output')->pagerSort("Titre", "c.titre");
        echo "</th>
                <th>";
        // line 12
        echo $this->env->getExtension('output')->pagerSort("Nom", "c.nom");
        echo "</th>
                <th>";
        // line 13
        echo $this->env->getExtension('output')->pagerSort("Prenom", "c.prenom");
        echo "</th>
                <th>";
        // line 14
        echo $this->env->getExtension('output')->pagerSort("Nationalite", "c.nationalite");
        echo "</th>
                <th>";
        // line 15
        echo $this->env->getExtension('output')->pagerSort("Paysresidence", "c.paysResidence");
        echo "</th>
                <th>";
        // line 16
        echo $this->env->getExtension('output')->pagerSort("Gsm", "c.gsm");
        echo "</th>
                <th>";
        // line 17
        echo $this->env->getExtension('output')->pagerSort("Email", "c.email");
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'pager'));
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "titre", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nom", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "prenom", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "nationalite", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "paysResidence", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "gsm", array(), "any", false), "html");
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "email", array(), "any", false), "html");
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
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
        // line 44
        echo "        </tbody>
    </table>
    <p>";
        // line 46
        echo $this->env->getExtension('output')->pagerPagination($this->getContext($context, 'pager'), "BackendCoreBundle:Pager:sliding.html.twig");
        echo " </p>
    <ul>
        <li>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_new"), "html");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
