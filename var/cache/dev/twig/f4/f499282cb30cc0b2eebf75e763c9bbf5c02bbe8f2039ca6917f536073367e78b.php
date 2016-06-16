<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ff5858c83391ae038ad5a834a847b80487497d15813864406f6b17102a6f9886 extends Twig_Template
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
        $__internal_66ed16d7e305254cfebef4e40c9b45819d5d9bc2d1d199b746f5a589f979a1b5 = $this->env->getExtension("native_profiler");
        $__internal_66ed16d7e305254cfebef4e40c9b45819d5d9bc2d1d199b746f5a589f979a1b5->enter($__internal_66ed16d7e305254cfebef4e40c9b45819d5d9bc2d1d199b746f5a589f979a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_66ed16d7e305254cfebef4e40c9b45819d5d9bc2d1d199b746f5a589f979a1b5->leave($__internal_66ed16d7e305254cfebef4e40c9b45819d5d9bc2d1d199b746f5a589f979a1b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
