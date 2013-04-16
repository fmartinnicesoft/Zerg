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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>

    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"hero-unit\">
                <h1>Mon Projet Symfony2</h1>
                <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
                <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/tutoriel-3-517569-symfony2.html\">
                        Lire le tutoriel »</a></p>
            </div>

            <div class=\"row\">
                <div id=\"content\" class=\"span9\">
                    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "                </div>
            </div>

            <hr>
            <footer>
                <p> © 2013</p>
            </footer>
        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Zerg";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  81 => 23,  74 => 8,  71 => 7,  65 => 6,  52 => 25,  50 => 23,  35 => 10,  33 => 7,  29 => 6,  22 => 1,);
    }
}
