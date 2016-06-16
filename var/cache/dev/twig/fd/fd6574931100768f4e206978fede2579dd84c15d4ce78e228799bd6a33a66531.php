<?php

/* :tour:thanks.html.twig */
class __TwigTemplate_9cb6f848fb437fbe22c199006a2e14754e3e7cedf4108524f7c4aef9bf7fa5d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":tour:thanks.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685e5634da49440dee80bc8095d492ff69db24d50361964f90a9af15bbac5796 = $this->env->getExtension("native_profiler");
        $__internal_685e5634da49440dee80bc8095d492ff69db24d50361964f90a9af15bbac5796->enter($__internal_685e5634da49440dee80bc8095d492ff69db24d50361964f90a9af15bbac5796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tour:thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685e5634da49440dee80bc8095d492ff69db24d50361964f90a9af15bbac5796->leave($__internal_685e5634da49440dee80bc8095d492ff69db24d50361964f90a9af15bbac5796_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_096a005132b0587cb4269bd4b163311ef98c57b9342f9e17dc19cd0012c48e5a = $this->env->getExtension("native_profiler");
        $__internal_096a005132b0587cb4269bd4b163311ef98c57b9342f9e17dc19cd0012c48e5a->enter($__internal_096a005132b0587cb4269bd4b163311ef98c57b9342f9e17dc19cd0012c48e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Thank you! Your order will be processed soon.</h1>
    <p> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tour home");
        echo "\">Order a ticket</a></p>
";
        
        $__internal_096a005132b0587cb4269bd4b163311ef98c57b9342f9e17dc19cd0012c48e5a->leave($__internal_096a005132b0587cb4269bd4b163311ef98c57b9342f9e17dc19cd0012c48e5a_prof);

    }

    public function getTemplateName()
    {
        return ":tour:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/order/add.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Thank you! Your order will be processed soon.</h1>*/
/*     <p> <a href="{{ path('tour home') }}">Order a ticket</a></p>*/
/* {% endblock %}*/
