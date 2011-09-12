<?php

/* BackendAdminBundle:Vols:show.html.twig */
class __TwigTemplate_f94c8f23627280afbb9e71a02dc83d58 extends Twig_Template
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
        echo "
<h1>Vols</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Aeroport départ</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "aeroportDepart", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Aeroport arrivé</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "aeroportArrivee", array(), "any", false), "html");
        echo "</td>
        </tr>        
        <tr>
            <th>Id</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Datedepart</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "dateDepart", array(), "any", false), "Y-m-d"), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Datearive</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "dateArive", array(), "any", false), "Y-m-d"), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Heuredepart</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "heureDepart", array(), "any", false), "H:i:s"), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Heurearivee</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "heureArivee", array(), "any", false), "H:i:s"), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Active</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "active", array(), "any", false), "html");
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vols"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vols_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vols_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Vols:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
