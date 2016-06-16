<?php

/* tour/thanks.html.twig */
class __TwigTemplate_527bc3a13dc1283c1a523cbcc91b6cdbd5bda2e0fe22a8528bf60d4f26fcdcad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "tour/thanks.html.twig", 2);
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
        $__internal_bc05deebb6270d21348be622a3d23a2906d888523e4c80dc0f5e5e5fa1a5de0c = $this->env->getExtension("native_profiler");
        $__internal_bc05deebb6270d21348be622a3d23a2906d888523e4c80dc0f5e5e5fa1a5de0c->enter($__internal_bc05deebb6270d21348be622a3d23a2906d888523e4c80dc0f5e5e5fa1a5de0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/thanks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc05deebb6270d21348be622a3d23a2906d888523e4c80dc0f5e5e5fa1a5de0c->leave($__internal_bc05deebb6270d21348be622a3d23a2906d888523e4c80dc0f5e5e5fa1a5de0c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed20fcfe1f0484843e46c310f27844b951ba0f82874fa33541a18f5e1c2ea8fa = $this->env->getExtension("native_profiler");
        $__internal_ed20fcfe1f0484843e46c310f27844b951ba0f82874fa33541a18f5e1c2ea8fa->enter($__internal_ed20fcfe1f0484843e46c310f27844b951ba0f82874fa33541a18f5e1c2ea8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Thank you! Your order will be processed soon.</h1>
    <p> <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tour home");
        echo "\">Order a ticket</a></p>
";
        
        $__internal_ed20fcfe1f0484843e46c310f27844b951ba0f82874fa33541a18f5e1c2ea8fa->leave($__internal_ed20fcfe1f0484843e46c310f27844b951ba0f82874fa33541a18f5e1c2ea8fa_prof);

    }

    public function getTemplateName()
    {
        return "tour/thanks.html.twig";
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
