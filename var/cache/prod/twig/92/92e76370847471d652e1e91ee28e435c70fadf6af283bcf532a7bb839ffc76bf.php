<?php

/* :order:add.html.twig */
class __TwigTemplate_74ef0de36da51dca54235c1f14de96b10fbcca4cbe8f16437d68661d95664555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":order:add.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Order a ticket</h1>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
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
    }

    public function getTemplateName()
    {
        return ":order:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
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
