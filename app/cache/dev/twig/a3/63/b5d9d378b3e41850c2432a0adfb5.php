<?php

/* ZergCallsBundle:Calls:menu.html.twig */
class __TwigTemplate_a363b5d9d378b3e41850c2432a0adfb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h3>Les derniers articles</h3>

<ul>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zergcalls_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "</ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "ZergCallsBundle:Calls:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  26 => 7,  19 => 2,  124 => 50,  121 => 49,  119 => 48,  116 => 47,  112 => 36,  109 => 35,  102 => 10,  99 => 9,  93 => 7,  87 => 52,  85 => 47,  73 => 37,  71 => 35,  65 => 32,  59 => 29,  37 => 12,  35 => 9,  23 => 2,  63 => 18,  60 => 17,  55 => 28,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 8,  81 => 23,  74 => 21,  66 => 18,  62 => 17,  56 => 16,  53 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
