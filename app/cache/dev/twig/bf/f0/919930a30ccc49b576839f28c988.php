<?php

/* ZergCallsBundle:Calls:voir.html.twig */
class __TwigTemplate_bff0919930a30ccc49b576839f28c988 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Visualisation d'un article</title>
    </head>
    <body>
        <h1>Article n°";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "</h1>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "ZergCallsBundle:Calls:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
