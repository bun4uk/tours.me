<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_edba7b37921a0ebc3d49428e4d44355bb2c5348df08842b6b4e2fbdada5656df extends Twig_Template
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
        $__internal_c7ab34dcbd610f7fde9a3268af597bd4347144e42e5a6da425f68d66e11b1c95 = $this->env->getExtension("native_profiler");
        $__internal_c7ab34dcbd610f7fde9a3268af597bd4347144e42e5a6da425f68d66e11b1c95->enter($__internal_c7ab34dcbd610f7fde9a3268af597bd4347144e42e5a6da425f68d66e11b1c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c7ab34dcbd610f7fde9a3268af597bd4347144e42e5a6da425f68d66e11b1c95->leave($__internal_c7ab34dcbd610f7fde9a3268af597bd4347144e42e5a6da425f68d66e11b1c95_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
