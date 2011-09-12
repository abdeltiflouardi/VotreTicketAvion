<?php

/* BackendCoreBundle:Pager:sort_link.html.twig */
class __TwigTemplate_92a3ca1b7809ab6107b7f9b9bd87b41e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['link'] = "";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['attr'] => $context['value']) {
            // line 3
            echo "    ";
            $context['link'] = (((($this->getContext($context, 'link') . " ") . $this->getContext($context, 'attr')) . "=") . $this->getContext($context, 'value'));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "
<a ";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, 'link'), "html");
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'title'), "html");
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "BackendCoreBundle:Pager:sort_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
