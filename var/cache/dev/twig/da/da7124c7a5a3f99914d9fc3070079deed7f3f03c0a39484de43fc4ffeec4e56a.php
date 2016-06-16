<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ddbf5bb0a7cc7dddddfe765be6224c9dd077163f122868e456359ca34a3357ca extends Twig_Template
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
        $__internal_c5b59264e392152fc4473aac9345839523aad6942d90bf36b932674d01c98d84 = $this->env->getExtension("native_profiler");
        $__internal_c5b59264e392152fc4473aac9345839523aad6942d90bf36b932674d01c98d84->enter($__internal_c5b59264e392152fc4473aac9345839523aad6942d90bf36b932674d01c98d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c5b59264e392152fc4473aac9345839523aad6942d90bf36b932674d01c98d84->leave($__internal_c5b59264e392152fc4473aac9345839523aad6942d90bf36b932674d01c98d84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
