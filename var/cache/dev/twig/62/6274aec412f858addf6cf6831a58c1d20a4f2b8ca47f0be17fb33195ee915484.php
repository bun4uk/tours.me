<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9ddd6e7f898ef5046473d3d7e91546a5368c55f84711d77720b39a5b727655f6 extends Twig_Template
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
        $__internal_c3da26d4d493cbcd6b0984b4acb9c5ef477b4b224314146cebe7631250d75fd1 = $this->env->getExtension("native_profiler");
        $__internal_c3da26d4d493cbcd6b0984b4acb9c5ef477b4b224314146cebe7631250d75fd1->enter($__internal_c3da26d4d493cbcd6b0984b4acb9c5ef477b4b224314146cebe7631250d75fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c3da26d4d493cbcd6b0984b4acb9c5ef477b4b224314146cebe7631250d75fd1->leave($__internal_c3da26d4d493cbcd6b0984b4acb9c5ef477b4b224314146cebe7631250d75fd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
