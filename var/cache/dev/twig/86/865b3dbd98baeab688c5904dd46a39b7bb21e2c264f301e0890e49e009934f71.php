<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c6789ff08e61a2c9ae01dc639127fd023baae2caea9f17de6f285ec4dc82723f extends Twig_Template
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
        $__internal_3a336194328f97d9d9611baf3f6dc76af348e7cab6c049d8d2bf4bc82363ab99 = $this->env->getExtension("native_profiler");
        $__internal_3a336194328f97d9d9611baf3f6dc76af348e7cab6c049d8d2bf4bc82363ab99->enter($__internal_3a336194328f97d9d9611baf3f6dc76af348e7cab6c049d8d2bf4bc82363ab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3a336194328f97d9d9611baf3f6dc76af348e7cab6c049d8d2bf4bc82363ab99->leave($__internal_3a336194328f97d9d9611baf3f6dc76af348e7cab6c049d8d2bf4bc82363ab99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
