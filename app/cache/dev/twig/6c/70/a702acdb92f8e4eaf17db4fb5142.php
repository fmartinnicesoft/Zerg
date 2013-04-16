<?php

/* ZergCallsBundle::layout.html.twig */
class __TwigTemplate_6c70a702acdb92f8e4eaf17db4fb5142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Liste de travail - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  <h1>Tableau de Bord</h1>
 
  <hr>
 
  ";
        // line 15
        echo "  ";
        $this->displayBlock('liste_body', $context, $blocks);
        // line 17
        echo " 
";
    }

    // line 15
    public function block_liste_body($context, array $blocks = array())
    {
        // line 16
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
        return array (  63 => 16,  60 => 15,  55 => 17,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  31 => 4,  28 => 3,);
    }
}
