<?php

/* tour/add.html.twig */
class __TwigTemplate_0bfc43d3cdeecc853553f834a6e524accd886b571427247fb512a9de1f8124a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "tour/add.html.twig", 2);
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
        $__internal_dcbb72a70956848a808af64d4bcf5ffbd9069cd93c9cf8f704e2a9adfa0803b5 = $this->env->getExtension("native_profiler");
        $__internal_dcbb72a70956848a808af64d4bcf5ffbd9069cd93c9cf8f704e2a9adfa0803b5->enter($__internal_dcbb72a70956848a808af64d4bcf5ffbd9069cd93c9cf8f704e2a9adfa0803b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcbb72a70956848a808af64d4bcf5ffbd9069cd93c9cf8f704e2a9adfa0803b5->leave($__internal_dcbb72a70956848a808af64d4bcf5ffbd9069cd93c9cf8f704e2a9adfa0803b5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce5850b52177b7a2ac60d432229890250f13cf8ef3822fbd311dd856b74e190c = $this->env->getExtension("native_profiler");
        $__internal_ce5850b52177b7a2ac60d432229890250f13cf8ef3822fbd311dd856b74e190c->enter($__internal_ce5850b52177b7a2ac60d432229890250f13cf8ef3822fbd311dd856b74e190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Order a ticket</h1>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            echo "        <div class=\"flash-notice\">
            <h2>";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</h2>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ce5850b52177b7a2ac60d432229890250f13cf8ef3822fbd311dd856b74e190c->leave($__internal_ce5850b52177b7a2ac60d432229890250f13cf8ef3822fbd311dd856b74e190c_prof);

    }

    public function getTemplateName()
    {
        return "tour/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/tour/add.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Order a ticket</h1>*/
/*     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/*     {% for flash_message in app.session.flashBag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             <h2>{{ flash_message }}</h2>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
