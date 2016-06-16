<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_06333897ecc4839d1d5e4709f3dc945018f50bf9f1495b17b90e03e9aae2fbee extends Twig_Template
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
        $__internal_e64d7bd4b1336c7a8b590a60ac361ab1ad99022db5b28dc93ca02cdee9ab5da2 = $this->env->getExtension("native_profiler");
        $__internal_e64d7bd4b1336c7a8b590a60ac361ab1ad99022db5b28dc93ca02cdee9ab5da2->enter($__internal_e64d7bd4b1336c7a8b590a60ac361ab1ad99022db5b28dc93ca02cdee9ab5da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e64d7bd4b1336c7a8b590a60ac361ab1ad99022db5b28dc93ca02cdee9ab5da2->leave($__internal_e64d7bd4b1336c7a8b590a60ac361ab1ad99022db5b28dc93ca02cdee9ab5da2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
