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
        $__internal_b8d3792c6da53550de75a6d3ec4e0916d96e4ac53d82a7d2b363d5ac2eb586b2 = $this->env->getExtension("native_profiler");
        $__internal_b8d3792c6da53550de75a6d3ec4e0916d96e4ac53d82a7d2b363d5ac2eb586b2->enter($__internal_b8d3792c6da53550de75a6d3ec4e0916d96e4ac53d82a7d2b363d5ac2eb586b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b8d3792c6da53550de75a6d3ec4e0916d96e4ac53d82a7d2b363d5ac2eb586b2->leave($__internal_b8d3792c6da53550de75a6d3ec4e0916d96e4ac53d82a7d2b363d5ac2eb586b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d7cf2a681ceaa7d5f7b7c2bb1249ef03b9821af8c5ca3ccb6bb9e4edb4d6f71 = $this->env->getExtension("native_profiler");
        $__internal_6d7cf2a681ceaa7d5f7b7c2bb1249ef03b9821af8c5ca3ccb6bb9e4edb4d6f71->enter($__internal_6d7cf2a681ceaa7d5f7b7c2bb1249ef03b9821af8c5ca3ccb6bb9e4edb4d6f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d7cf2a681ceaa7d5f7b7c2bb1249ef03b9821af8c5ca3ccb6bb9e4edb4d6f71->leave($__internal_6d7cf2a681ceaa7d5f7b7c2bb1249ef03b9821af8c5ca3ccb6bb9e4edb4d6f71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58b8ae205766901bda4ed644d307d06dd1e86b6a34273a2eeed2e1f3f254d227 = $this->env->getExtension("native_profiler");
        $__internal_58b8ae205766901bda4ed644d307d06dd1e86b6a34273a2eeed2e1f3f254d227->enter($__internal_58b8ae205766901bda4ed644d307d06dd1e86b6a34273a2eeed2e1f3f254d227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58b8ae205766901bda4ed644d307d06dd1e86b6a34273a2eeed2e1f3f254d227->leave($__internal_58b8ae205766901bda4ed644d307d06dd1e86b6a34273a2eeed2e1f3f254d227_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bf7320f4a2f51ace4541828d036e7c92a4f4451904bccb59e8b8731b9f5c0b9 = $this->env->getExtension("native_profiler");
        $__internal_7bf7320f4a2f51ace4541828d036e7c92a4f4451904bccb59e8b8731b9f5c0b9->enter($__internal_7bf7320f4a2f51ace4541828d036e7c92a4f4451904bccb59e8b8731b9f5c0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7bf7320f4a2f51ace4541828d036e7c92a4f4451904bccb59e8b8731b9f5c0b9->leave($__internal_7bf7320f4a2f51ace4541828d036e7c92a4f4451904bccb59e8b8731b9f5c0b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4ee2dee17f8f9be9e6c55072527579c43466bfb49ec8b522db5a4396e6211c3 = $this->env->getExtension("native_profiler");
        $__internal_d4ee2dee17f8f9be9e6c55072527579c43466bfb49ec8b522db5a4396e6211c3->enter($__internal_d4ee2dee17f8f9be9e6c55072527579c43466bfb49ec8b522db5a4396e6211c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4ee2dee17f8f9be9e6c55072527579c43466bfb49ec8b522db5a4396e6211c3->leave($__internal_d4ee2dee17f8f9be9e6c55072527579c43466bfb49ec8b522db5a4396e6211c3_prof);

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
