<?php

/* order/add.html.twig */
class __TwigTemplate_b906e6c57b75e4de9f1f52f178055f8f2c812880cb72ee17fe5110058c53b8be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 2);
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
        $__internal_dc4ecaa0df57788b36f1eb333112f97043ae64f9250bacaf009ec9792b5df018 = $this->env->getExtension("native_profiler");
        $__internal_dc4ecaa0df57788b36f1eb333112f97043ae64f9250bacaf009ec9792b5df018->enter($__internal_dc4ecaa0df57788b36f1eb333112f97043ae64f9250bacaf009ec9792b5df018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4ecaa0df57788b36f1eb333112f97043ae64f9250bacaf009ec9792b5df018->leave($__internal_dc4ecaa0df57788b36f1eb333112f97043ae64f9250bacaf009ec9792b5df018_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_787331feffc512b5e73546cdd21fbd42d417210d1aa96404359e6e732c949d02 = $this->env->getExtension("native_profiler");
        $__internal_787331feffc512b5e73546cdd21fbd42d417210d1aa96404359e6e732c949d02->enter($__internal_787331feffc512b5e73546cdd21fbd42d417210d1aa96404359e6e732c949d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_787331feffc512b5e73546cdd21fbd42d417210d1aa96404359e6e732c949d02->leave($__internal_787331feffc512b5e73546cdd21fbd42d417210d1aa96404359e6e732c949d02_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
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
/* {# app/Resources/views/order/add.html.twig #}*/
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
