<?php

/* ZergCallsBundle:Calls:index.html.twig */
class __TwigTemplate_1a6be75ef41b26f068cc5a21ba7fdcc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ZergCallsBundle::layout.html.twig");

        $this->blocks = array(
            'liste_body' => array($this, 'block_liste_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZergCallsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_liste_body($context, array $blocks = array())
    {
        // line 4
        echo " 
  <h2>Liste des interventions en cours</h2>
 
  <ul>
      <li>Pas d'interventions</li>
  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "ZergCallsBundle:Calls:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
