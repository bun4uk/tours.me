<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_48995a78636dc6b56f43f449fa58db419e1e809590031c5a053f504bd32c6c7c extends Twig_Template
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
        $__internal_1d5f68f3ab69db0238905d15f7762f685860e17381e537a7e33f9c8905e483d9 = $this->env->getExtension("native_profiler");
        $__internal_1d5f68f3ab69db0238905d15f7762f685860e17381e537a7e33f9c8905e483d9->enter($__internal_1d5f68f3ab69db0238905d15f7762f685860e17381e537a7e33f9c8905e483d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1d5f68f3ab69db0238905d15f7762f685860e17381e537a7e33f9c8905e483d9->leave($__internal_1d5f68f3ab69db0238905d15f7762f685860e17381e537a7e33f9c8905e483d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
