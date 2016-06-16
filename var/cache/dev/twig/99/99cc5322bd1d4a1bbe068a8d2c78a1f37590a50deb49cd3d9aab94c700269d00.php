<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_830fb095a183b9576fbaccde8c492ff04e82bb7986d49c4b0588b3836b4878bf extends Twig_Template
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
        $__internal_74980b9a64ef85fa3d8a6b494d2ab1809a178bebbb0abd0247d9cf815cad75c7 = $this->env->getExtension("native_profiler");
        $__internal_74980b9a64ef85fa3d8a6b494d2ab1809a178bebbb0abd0247d9cf815cad75c7->enter($__internal_74980b9a64ef85fa3d8a6b494d2ab1809a178bebbb0abd0247d9cf815cad75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_74980b9a64ef85fa3d8a6b494d2ab1809a178bebbb0abd0247d9cf815cad75c7->leave($__internal_74980b9a64ef85fa3d8a6b494d2ab1809a178bebbb0abd0247d9cf815cad75c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
