<?php

/* BackendAdminBundle:Security:login.html.twig */
class __TwigTemplate_c15fbcd93faf698f400790208b3aaf88 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        if ($this->getContext($context, 'error')) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "</div>
";
        }
        // line 5
        echo "
<form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <input type=\"submit\" name=\"login\" />
</form>";
    }

    public function getTemplateName()
    {
        return "BackendAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
