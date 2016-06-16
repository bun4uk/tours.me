<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c7dd3f68a6965a73e8e38fe22732efc4c354080bce9f86db347817ba471cf2a9 extends Twig_Template
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
        $__internal_ff2b9673fbde084943026fc31ee9fc35144a012b47dee326756dcdf478388208 = $this->env->getExtension("native_profiler");
        $__internal_ff2b9673fbde084943026fc31ee9fc35144a012b47dee326756dcdf478388208->enter($__internal_ff2b9673fbde084943026fc31ee9fc35144a012b47dee326756dcdf478388208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff2b9673fbde084943026fc31ee9fc35144a012b47dee326756dcdf478388208->leave($__internal_ff2b9673fbde084943026fc31ee9fc35144a012b47dee326756dcdf478388208_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
