<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62bcde31ce637d88ac348d67326dcda0b1fbc3ff9260a726a0f590e189f52d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6acb97dd85f520c8cd2aa3f9242645c85ba0373c04c5a54525edd5a82009f18b = $this->env->getExtension("native_profiler");
        $__internal_6acb97dd85f520c8cd2aa3f9242645c85ba0373c04c5a54525edd5a82009f18b->enter($__internal_6acb97dd85f520c8cd2aa3f9242645c85ba0373c04c5a54525edd5a82009f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acb97dd85f520c8cd2aa3f9242645c85ba0373c04c5a54525edd5a82009f18b->leave($__internal_6acb97dd85f520c8cd2aa3f9242645c85ba0373c04c5a54525edd5a82009f18b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43547213881c029ef6ccb587df721a1755dbec92c00965e83fae4b91117630fc = $this->env->getExtension("native_profiler");
        $__internal_43547213881c029ef6ccb587df721a1755dbec92c00965e83fae4b91117630fc->enter($__internal_43547213881c029ef6ccb587df721a1755dbec92c00965e83fae4b91117630fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_43547213881c029ef6ccb587df721a1755dbec92c00965e83fae4b91117630fc->leave($__internal_43547213881c029ef6ccb587df721a1755dbec92c00965e83fae4b91117630fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_91f305a7fb370a5712fe51dc23c4be6a9b5a9593270702d3ff47c73101c2efe5 = $this->env->getExtension("native_profiler");
        $__internal_91f305a7fb370a5712fe51dc23c4be6a9b5a9593270702d3ff47c73101c2efe5->enter($__internal_91f305a7fb370a5712fe51dc23c4be6a9b5a9593270702d3ff47c73101c2efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_91f305a7fb370a5712fe51dc23c4be6a9b5a9593270702d3ff47c73101c2efe5->leave($__internal_91f305a7fb370a5712fe51dc23c4be6a9b5a9593270702d3ff47c73101c2efe5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0825a6e3935f8ed67cdc2c092a90e43d935b6c13a728a8accd604733a34c2f2b = $this->env->getExtension("native_profiler");
        $__internal_0825a6e3935f8ed67cdc2c092a90e43d935b6c13a728a8accd604733a34c2f2b->enter($__internal_0825a6e3935f8ed67cdc2c092a90e43d935b6c13a728a8accd604733a34c2f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0825a6e3935f8ed67cdc2c092a90e43d935b6c13a728a8accd604733a34c2f2b->leave($__internal_0825a6e3935f8ed67cdc2c092a90e43d935b6c13a728a8accd604733a34c2f2b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
