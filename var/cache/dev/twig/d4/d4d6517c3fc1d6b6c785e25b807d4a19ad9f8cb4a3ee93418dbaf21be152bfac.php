<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2da92603c004fe8d6fdae371623d30265d801db460cf5478166e82675131a57b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89accb3e285136aded112f69a3574a19e6938a742cd341a3a7a19f35fb2d9a2d = $this->env->getExtension("native_profiler");
        $__internal_89accb3e285136aded112f69a3574a19e6938a742cd341a3a7a19f35fb2d9a2d->enter($__internal_89accb3e285136aded112f69a3574a19e6938a742cd341a3a7a19f35fb2d9a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89accb3e285136aded112f69a3574a19e6938a742cd341a3a7a19f35fb2d9a2d->leave($__internal_89accb3e285136aded112f69a3574a19e6938a742cd341a3a7a19f35fb2d9a2d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eabe448f19a2086d51d35288e2b131a7a8e42dc1b2c90fed08cc4e34fd83e262 = $this->env->getExtension("native_profiler");
        $__internal_eabe448f19a2086d51d35288e2b131a7a8e42dc1b2c90fed08cc4e34fd83e262->enter($__internal_eabe448f19a2086d51d35288e2b131a7a8e42dc1b2c90fed08cc4e34fd83e262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eabe448f19a2086d51d35288e2b131a7a8e42dc1b2c90fed08cc4e34fd83e262->leave($__internal_eabe448f19a2086d51d35288e2b131a7a8e42dc1b2c90fed08cc4e34fd83e262_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
