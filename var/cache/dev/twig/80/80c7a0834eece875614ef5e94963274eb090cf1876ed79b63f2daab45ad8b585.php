<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a20f306b7a33779041d0f8dc5c7f0acec491ced46a93178705187ec795d2d2be extends Twig_Template
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
        $__internal_c765da0a1638c376033507034daf0d7e22408b5f35dcd16bab9a4c82fc63ccf9 = $this->env->getExtension("native_profiler");
        $__internal_c765da0a1638c376033507034daf0d7e22408b5f35dcd16bab9a4c82fc63ccf9->enter($__internal_c765da0a1638c376033507034daf0d7e22408b5f35dcd16bab9a4c82fc63ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c765da0a1638c376033507034daf0d7e22408b5f35dcd16bab9a4c82fc63ccf9->leave($__internal_c765da0a1638c376033507034daf0d7e22408b5f35dcd16bab9a4c82fc63ccf9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
