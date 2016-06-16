<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_79eb18b9e993912877bb316cbbd2f209c9caa37b719721d62f9a786a6cc4cb47 extends Twig_Template
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
        $__internal_d9ab7a65b6b8204bbbd6f1f87d70b4c0ef92792e5b5b8a5850f8bdde40e3c42d = $this->env->getExtension("native_profiler");
        $__internal_d9ab7a65b6b8204bbbd6f1f87d70b4c0ef92792e5b5b8a5850f8bdde40e3c42d->enter($__internal_d9ab7a65b6b8204bbbd6f1f87d70b4c0ef92792e5b5b8a5850f8bdde40e3c42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d9ab7a65b6b8204bbbd6f1f87d70b4c0ef92792e5b5b8a5850f8bdde40e3c42d->leave($__internal_d9ab7a65b6b8204bbbd6f1f87d70b4c0ef92792e5b5b8a5850f8bdde40e3c42d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
