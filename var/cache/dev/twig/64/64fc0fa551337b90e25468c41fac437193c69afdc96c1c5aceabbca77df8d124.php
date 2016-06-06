<?php

/* battery/add.html.twig */
class __TwigTemplate_d1b3d551ab7734c23ff6fe3303f0e0ae2aa44529a3c14e5554367827d91bbdce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "battery/add.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641d5f50857d87f947edc34702b130075a0f673bb1638b8db0a9714076e4bbab = $this->env->getExtension("native_profiler");
        $__internal_641d5f50857d87f947edc34702b130075a0f673bb1638b8db0a9714076e4bbab->enter($__internal_641d5f50857d87f947edc34702b130075a0f673bb1638b8db0a9714076e4bbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battery/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641d5f50857d87f947edc34702b130075a0f673bb1638b8db0a9714076e4bbab->leave($__internal_641d5f50857d87f947edc34702b130075a0f673bb1638b8db0a9714076e4bbab_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_145c4902b13d83e35cf2cbc3ff971886e6abf91bb99a72b86e36c3849b9bbef9 = $this->env->getExtension("native_profiler");
        $__internal_145c4902b13d83e35cf2cbc3ff971886e6abf91bb99a72b86e36c3849b9bbef9->enter($__internal_145c4902b13d83e35cf2cbc3ff971886e6abf91bb99a72b86e36c3849b9bbef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Заказать путевку</h1>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_145c4902b13d83e35cf2cbc3ff971886e6abf91bb99a72b86e36c3849b9bbef9->leave($__internal_145c4902b13d83e35cf2cbc3ff971886e6abf91bb99a72b86e36c3849b9bbef9_prof);

    }

    public function getTemplateName()
    {
        return "battery/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/battery/add.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Заказать путевку</h1>*/
/*     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
