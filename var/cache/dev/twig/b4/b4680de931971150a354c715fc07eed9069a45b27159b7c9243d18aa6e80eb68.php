<?php

/* tour/add.html.twig */
class __TwigTemplate_6683d9f17c2e62c772ed86dbd879a5ebdba2264143c6c569dddc94a20a78e210 extends Twig_Template
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
        $__internal_04e62661a6779d49763d7f15f6b3a867bf460a53d46f8986c88b43c3eba4ca6f = $this->env->getExtension("native_profiler");
        $__internal_04e62661a6779d49763d7f15f6b3a867bf460a53d46f8986c88b43c3eba4ca6f->enter($__internal_04e62661a6779d49763d7f15f6b3a867bf460a53d46f8986c88b43c3eba4ca6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e62661a6779d49763d7f15f6b3a867bf460a53d46f8986c88b43c3eba4ca6f->leave($__internal_04e62661a6779d49763d7f15f6b3a867bf460a53d46f8986c88b43c3eba4ca6f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ab0aca2ef456b2e9809875725e4caa1ea6f6e4890be6a8bc15a521663df59e9 = $this->env->getExtension("native_profiler");
        $__internal_5ab0aca2ef456b2e9809875725e4caa1ea6f6e4890be6a8bc15a521663df59e9->enter($__internal_5ab0aca2ef456b2e9809875725e4caa1ea6f6e4890be6a8bc15a521663df59e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ab0aca2ef456b2e9809875725e4caa1ea6f6e4890be6a8bc15a521663df59e9->leave($__internal_5ab0aca2ef456b2e9809875725e4caa1ea6f6e4890be6a8bc15a521663df59e9_prof);

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
