<?php

/* BackendCoreBundle:Pager:sliding.html.twig */
class __TwigTemplate_b9afc1bda31b8873811f27628c49525c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'pager'), "haveToPaginate", array(), "any", false)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getContext($context, 'pager'), "currentPage", array(), "any", false) != 1)) {
                // line 3
                echo "        <span class=\"first\">
        \t<a href=\"";
                // line 4
                echo twig_escape_filter($this->env, ($this->getContext($context, 'path') . "page=1"), "html");
                echo "\">&laquo;";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First"), "html");
                echo "</a>
        </span>
    ";
            }
            // line 7
            echo "
    ";
            // line 8
            if ($this->getAttribute($this->getContext($context, 'pager'), "hasPreviousPage", array(), "any", false)) {
                // line 9
                echo "        <span class=\"previous\">
        \t<a href=\"";
                // line 10
                echo twig_escape_filter($this->env, (($this->getContext($context, 'path') . "page=") . $this->getAttribute($this->getContext($context, 'pager'), "previousPage", array(), "any", false)), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html");
                echo "</a>
        </span>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'range'));
            foreach ($context['_seq'] as $context['_key'] => $context['page']) {
                // line 15
                echo "        ";
                if (($this->getContext($context, 'page') != $this->getAttribute($this->getContext($context, 'pager'), "currentPage", array(), "any", false))) {
                    // line 16
                    echo "            <span class=\"page\">
            \t<a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, (($this->getContext($context, 'path') . "page=") . $this->getContext($context, 'page')), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</a>
            </span>
        ";
                } else {
                    // line 20
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</span>
        ";
                }
                // line 22
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 24
            echo "
    ";
            // line 25
            if ($this->getAttribute($this->getContext($context, 'pager'), "hasNextPage", array(), "any", false)) {
                // line 26
                echo "        <span class=\"next\">
        \t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, (($this->getContext($context, 'path') . "page=") . $this->getAttribute($this->getContext($context, 'pager'), "nextPage", array(), "any", false)), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html");
                echo "</a>
        </span>
    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if (($this->getAttribute($this->getContext($context, 'pager'), "nbPages", array(), "any", false) != $this->getAttribute($this->getContext($context, 'pager'), "currentPage", array(), "any", false))) {
                // line 32
                echo "        <span class=\"last\">
        \t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, (($this->getContext($context, 'path') . "page=") . $this->getAttribute($this->getContext($context, 'pager'), "nbPages", array(), "any", false)), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last"), "html");
                echo "&raquo;</a>
        </span>
    ";
            }
            // line 36
            echo "    (";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'pager'), "currentPage", array(), "any", false) . "/") . $this->getAttribute($this->getContext($context, 'pager'), "nbPages", array(), "any", false)), "html");
            echo ")
       |   
    ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Per page"), "html");
            echo ":
    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('output')->perPagePath(10), "html");
            echo "\">10</a>,
    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('output')->perPagePath(20), "html");
            echo "\">20</a>,
    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('output')->perPagePath(50), "html");
            echo "\">50</a>,
    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('output')->perPagePath(100), "html");
            echo "\">100</a>           
";
        }
    }

    public function getTemplateName()
    {
        return "BackendCoreBundle:Pager:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
