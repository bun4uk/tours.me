<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_0d9b9f861b9e94c1fbdedebeaf42ed1a517b3100df15fb1d9d0151b12201f7bd extends Twig_Template
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
        $__internal_cc7ccb320875a68e08c36bbdfcefdb7b82ccbbc664b1118fd61e80a01cd29f83 = $this->env->getExtension("native_profiler");
        $__internal_cc7ccb320875a68e08c36bbdfcefdb7b82ccbbc664b1118fd61e80a01cd29f83->enter($__internal_cc7ccb320875a68e08c36bbdfcefdb7b82ccbbc664b1118fd61e80a01cd29f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc7ccb320875a68e08c36bbdfcefdb7b82ccbbc664b1118fd61e80a01cd29f83->leave($__internal_cc7ccb320875a68e08c36bbdfcefdb7b82ccbbc664b1118fd61e80a01cd29f83_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
