<?php

/* ::layout.html.twig */
class __TwigTemplate_2cf92e0981c075160ef0683773774bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>
 
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
          Lire le tutoriel »
        </a></p>
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zergcalls_accueil"), "html", null, true);
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("zergcalls_ajouter"), "html", null, true);
        echo "\">Ajouter un article</a></li>
          </ul>
                     
          ";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZergCallsBundle:Calls:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
      </footer>
    </div>
 
  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo " 
  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "          ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 49
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  121 => 49,  119 => 48,  116 => 47,  112 => 36,  109 => 35,  102 => 10,  99 => 9,  93 => 7,  87 => 52,  85 => 47,  73 => 37,  71 => 35,  65 => 32,  59 => 29,  37 => 12,  35 => 9,  23 => 2,  63 => 18,  60 => 17,  55 => 28,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 7,);
    }
}
