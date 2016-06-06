<?php

/* base.html.twig */
class __TwigTemplate_c83d946f419f233620986d6b485648ee5552fa307887d8beb9797f81bd458043 extends Twig_Template
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
        $__internal_b76b863b424cd17d615ab8c00ecf76db61c3a5c33017f29d56b38615c5a34968 = $this->env->getExtension("native_profiler");
        $__internal_b76b863b424cd17d615ab8c00ecf76db61c3a5c33017f29d56b38615c5a34968->enter($__internal_b76b863b424cd17d615ab8c00ecf76db61c3a5c33017f29d56b38615c5a34968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b76b863b424cd17d615ab8c00ecf76db61c3a5c33017f29d56b38615c5a34968->leave($__internal_b76b863b424cd17d615ab8c00ecf76db61c3a5c33017f29d56b38615c5a34968_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21ec330b51882e8647a713b1220e67f99698a533e038fc044c0b6123e8a505c1 = $this->env->getExtension("native_profiler");
        $__internal_21ec330b51882e8647a713b1220e67f99698a533e038fc044c0b6123e8a505c1->enter($__internal_21ec330b51882e8647a713b1220e67f99698a533e038fc044c0b6123e8a505c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_21ec330b51882e8647a713b1220e67f99698a533e038fc044c0b6123e8a505c1->leave($__internal_21ec330b51882e8647a713b1220e67f99698a533e038fc044c0b6123e8a505c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fad6f36948f50a4356f30bbff7fb7e690969c132ba6280642d115655cc99946 = $this->env->getExtension("native_profiler");
        $__internal_8fad6f36948f50a4356f30bbff7fb7e690969c132ba6280642d115655cc99946->enter($__internal_8fad6f36948f50a4356f30bbff7fb7e690969c132ba6280642d115655cc99946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8fad6f36948f50a4356f30bbff7fb7e690969c132ba6280642d115655cc99946->leave($__internal_8fad6f36948f50a4356f30bbff7fb7e690969c132ba6280642d115655cc99946_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df2e58bbf262636b0f03e7e7a1f3d5f1f981e874cdec0ecc931d2c29f6469de = $this->env->getExtension("native_profiler");
        $__internal_0df2e58bbf262636b0f03e7e7a1f3d5f1f981e874cdec0ecc931d2c29f6469de->enter($__internal_0df2e58bbf262636b0f03e7e7a1f3d5f1f981e874cdec0ecc931d2c29f6469de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0df2e58bbf262636b0f03e7e7a1f3d5f1f981e874cdec0ecc931d2c29f6469de->leave($__internal_0df2e58bbf262636b0f03e7e7a1f3d5f1f981e874cdec0ecc931d2c29f6469de_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0801b5859eb09ec0e9bb7ebfd2ea9aa76d6a06e06d4dda5499e29a20e1b15a6 = $this->env->getExtension("native_profiler");
        $__internal_e0801b5859eb09ec0e9bb7ebfd2ea9aa76d6a06e06d4dda5499e29a20e1b15a6->enter($__internal_e0801b5859eb09ec0e9bb7ebfd2ea9aa76d6a06e06d4dda5499e29a20e1b15a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e0801b5859eb09ec0e9bb7ebfd2ea9aa76d6a06e06d4dda5499e29a20e1b15a6->leave($__internal_e0801b5859eb09ec0e9bb7ebfd2ea9aa76d6a06e06d4dda5499e29a20e1b15a6_prof);

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
