<?php

/* ZergCallsBundle::layout.html.twig */
class __TwigTemplate_002f350e1b87c9ff886ee0f8849587ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'liste_body' => array($this, 'block_liste_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " 
  ";
        // line 6
        echo "  ";
        $this->displayBlock('liste_body', $context, $blocks);
        // line 8
        echo " 
";
    }

    // line 6
    public function block_liste_body($context, array $blocks = array())
    {
        // line 7
        echo "  ";
    }

    public function getTemplateName()
    {
        return "ZergCallsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  43 => 6,  38 => 8,  35 => 6,  32 => 4,  29 => 3,);
    }
}
