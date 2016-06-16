<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b3a3d7d5ad9939163ac8950a15a8fa33d03866c9f93c13b2304fa9790124d0ed extends Twig_Template
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
        $__internal_6506f497127ac1e27f13f023aff121425014a19552e7e494b51ae8bc456cf473 = $this->env->getExtension("native_profiler");
        $__internal_6506f497127ac1e27f13f023aff121425014a19552e7e494b51ae8bc456cf473->enter($__internal_6506f497127ac1e27f13f023aff121425014a19552e7e494b51ae8bc456cf473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6506f497127ac1e27f13f023aff121425014a19552e7e494b51ae8bc456cf473->leave($__internal_6506f497127ac1e27f13f023aff121425014a19552e7e494b51ae8bc456cf473_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
