<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3563a8736e017fca264337cdb2e50c381e5f6e808e03d3c41dae71be22e5b619 extends Twig_Template
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
        $__internal_248be5c423620731bc0c4985c6a5c459b363efb17ddeb0840a09796056a39257 = $this->env->getExtension("native_profiler");
        $__internal_248be5c423620731bc0c4985c6a5c459b363efb17ddeb0840a09796056a39257->enter($__internal_248be5c423620731bc0c4985c6a5c459b363efb17ddeb0840a09796056a39257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_248be5c423620731bc0c4985c6a5c459b363efb17ddeb0840a09796056a39257->leave($__internal_248be5c423620731bc0c4985c6a5c459b363efb17ddeb0840a09796056a39257_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
