<?php

/* :order:thanks.html.twig */
class __TwigTemplate_6e340234dcb09c285bf4dd92b8892ef31195215cd22aa70a12d7493c713558f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":order:thanks.html.twig", 2);
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
        echo "    <h1>Thank you! Your order will be processed soon.</h1>
    <p> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("order home");
        echo "\">Order a ticket</a></p>
";
    }

    public function getTemplateName()
    {
        return ":order:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/order/add.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Thank you! Your order will be processed soon.</h1>*/
/*     <p> <a href="{{ path('order home') }}">Order a ticket</a></p>*/
/* {% endblock %}*/
