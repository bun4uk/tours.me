<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_039164ef5fcd8e18458ef5b0653c41db2d4dc057cb0448f7df27bc50fb78b4d0 extends Twig_Template
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
        $__internal_dcc67150e18cc28f2ed42e267df85d264c6e868ca34bf125b05b25dc15930cad = $this->env->getExtension("native_profiler");
        $__internal_dcc67150e18cc28f2ed42e267df85d264c6e868ca34bf125b05b25dc15930cad->enter($__internal_dcc67150e18cc28f2ed42e267df85d264c6e868ca34bf125b05b25dc15930cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dcc67150e18cc28f2ed42e267df85d264c6e868ca34bf125b05b25dc15930cad->leave($__internal_dcc67150e18cc28f2ed42e267df85d264c6e868ca34bf125b05b25dc15930cad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
