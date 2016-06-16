<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_97ee72159134aa85b747adea70fda838a32fbd0a1c9ac6954b922096d477c5bd extends Twig_Template
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
        $__internal_2a18dd418841503018e0f231ca5d4e044f3ddc72f81b1fb144af6f1ac27ecc88 = $this->env->getExtension("native_profiler");
        $__internal_2a18dd418841503018e0f231ca5d4e044f3ddc72f81b1fb144af6f1ac27ecc88->enter($__internal_2a18dd418841503018e0f231ca5d4e044f3ddc72f81b1fb144af6f1ac27ecc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2a18dd418841503018e0f231ca5d4e044f3ddc72f81b1fb144af6f1ac27ecc88->leave($__internal_2a18dd418841503018e0f231ca5d4e044f3ddc72f81b1fb144af6f1ac27ecc88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
