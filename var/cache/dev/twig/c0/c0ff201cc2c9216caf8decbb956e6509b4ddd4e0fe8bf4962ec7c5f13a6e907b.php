<?php

/* base.html.twig */
class __TwigTemplate_ce9b9d84a32cc3f587dd8e69c4ed32f3537e85286c2a000c3798ac1079120361 extends Twig_Template
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
        $__internal_528b852e76fcc4a8b90182dd7f6361428f9643280ebfd6af4a0b2a862c8f80da = $this->env->getExtension("native_profiler");
        $__internal_528b852e76fcc4a8b90182dd7f6361428f9643280ebfd6af4a0b2a862c8f80da->enter($__internal_528b852e76fcc4a8b90182dd7f6361428f9643280ebfd6af4a0b2a862c8f80da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_528b852e76fcc4a8b90182dd7f6361428f9643280ebfd6af4a0b2a862c8f80da->leave($__internal_528b852e76fcc4a8b90182dd7f6361428f9643280ebfd6af4a0b2a862c8f80da_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cbcd617a9ff1df317ed36844035edab90c9a21b7594e7d7d8e6a246f768d444 = $this->env->getExtension("native_profiler");
        $__internal_3cbcd617a9ff1df317ed36844035edab90c9a21b7594e7d7d8e6a246f768d444->enter($__internal_3cbcd617a9ff1df317ed36844035edab90c9a21b7594e7d7d8e6a246f768d444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3cbcd617a9ff1df317ed36844035edab90c9a21b7594e7d7d8e6a246f768d444->leave($__internal_3cbcd617a9ff1df317ed36844035edab90c9a21b7594e7d7d8e6a246f768d444_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab07f85db68131876161d5049f060ba5327c485d44a35f740d924b40cb33f0f0 = $this->env->getExtension("native_profiler");
        $__internal_ab07f85db68131876161d5049f060ba5327c485d44a35f740d924b40cb33f0f0->enter($__internal_ab07f85db68131876161d5049f060ba5327c485d44a35f740d924b40cb33f0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ab07f85db68131876161d5049f060ba5327c485d44a35f740d924b40cb33f0f0->leave($__internal_ab07f85db68131876161d5049f060ba5327c485d44a35f740d924b40cb33f0f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7589064a7c92f6e11e0d29c3b16baa8ef08b1bd3ab86f6992703b5d560646e8a = $this->env->getExtension("native_profiler");
        $__internal_7589064a7c92f6e11e0d29c3b16baa8ef08b1bd3ab86f6992703b5d560646e8a->enter($__internal_7589064a7c92f6e11e0d29c3b16baa8ef08b1bd3ab86f6992703b5d560646e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7589064a7c92f6e11e0d29c3b16baa8ef08b1bd3ab86f6992703b5d560646e8a->leave($__internal_7589064a7c92f6e11e0d29c3b16baa8ef08b1bd3ab86f6992703b5d560646e8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d299dbce83e02dc9333b5dbe02c895073efc0fd6f868d03f765943c968fe61d7 = $this->env->getExtension("native_profiler");
        $__internal_d299dbce83e02dc9333b5dbe02c895073efc0fd6f868d03f765943c968fe61d7->enter($__internal_d299dbce83e02dc9333b5dbe02c895073efc0fd6f868d03f765943c968fe61d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d299dbce83e02dc9333b5dbe02c895073efc0fd6f868d03f765943c968fe61d7->leave($__internal_d299dbce83e02dc9333b5dbe02c895073efc0fd6f868d03f765943c968fe61d7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
