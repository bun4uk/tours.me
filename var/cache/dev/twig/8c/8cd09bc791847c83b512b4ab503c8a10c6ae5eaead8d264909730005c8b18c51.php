<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e59c09dd4a52c853c2a826c96afd43d4be69b5611c9592db295f385dfdf67d9c extends Twig_Template
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
        $__internal_9a54f498c625dcb5c41e230d6b93d13ed516b6358af7db0ba408a8b287ccf327 = $this->env->getExtension("native_profiler");
        $__internal_9a54f498c625dcb5c41e230d6b93d13ed516b6358af7db0ba408a8b287ccf327->enter($__internal_9a54f498c625dcb5c41e230d6b93d13ed516b6358af7db0ba408a8b287ccf327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9a54f498c625dcb5c41e230d6b93d13ed516b6358af7db0ba408a8b287ccf327->leave($__internal_9a54f498c625dcb5c41e230d6b93d13ed516b6358af7db0ba408a8b287ccf327_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
