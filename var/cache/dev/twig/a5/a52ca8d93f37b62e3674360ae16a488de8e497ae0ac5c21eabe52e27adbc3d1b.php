<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eeaf5ff6b605199de1b33120262ca10308b928c6d85ef9b5b72d51b07e197e0a extends Twig_Template
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
        $__internal_eb614790854415bdc503273850b77bf821a8626b9ab5f34228e3e81a8e5c8e96 = $this->env->getExtension("native_profiler");
        $__internal_eb614790854415bdc503273850b77bf821a8626b9ab5f34228e3e81a8e5c8e96->enter($__internal_eb614790854415bdc503273850b77bf821a8626b9ab5f34228e3e81a8e5c8e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb614790854415bdc503273850b77bf821a8626b9ab5f34228e3e81a8e5c8e96->leave($__internal_eb614790854415bdc503273850b77bf821a8626b9ab5f34228e3e81a8e5c8e96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3008bddcbd3ff3186a0a201ca014cc3f58e15b81ac696e7687bd08217ef633f0 = $this->env->getExtension("native_profiler");
        $__internal_3008bddcbd3ff3186a0a201ca014cc3f58e15b81ac696e7687bd08217ef633f0->enter($__internal_3008bddcbd3ff3186a0a201ca014cc3f58e15b81ac696e7687bd08217ef633f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3008bddcbd3ff3186a0a201ca014cc3f58e15b81ac696e7687bd08217ef633f0->leave($__internal_3008bddcbd3ff3186a0a201ca014cc3f58e15b81ac696e7687bd08217ef633f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d03cff9b8cf581af58243bd571c8136c7654bd4b604debc9de876997cf50ff3 = $this->env->getExtension("native_profiler");
        $__internal_7d03cff9b8cf581af58243bd571c8136c7654bd4b604debc9de876997cf50ff3->enter($__internal_7d03cff9b8cf581af58243bd571c8136c7654bd4b604debc9de876997cf50ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d03cff9b8cf581af58243bd571c8136c7654bd4b604debc9de876997cf50ff3->leave($__internal_7d03cff9b8cf581af58243bd571c8136c7654bd4b604debc9de876997cf50ff3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec84973563da8ef2bbd3ac5db016367341dd1565b2811810381d8ba4e784469 = $this->env->getExtension("native_profiler");
        $__internal_9ec84973563da8ef2bbd3ac5db016367341dd1565b2811810381d8ba4e784469->enter($__internal_9ec84973563da8ef2bbd3ac5db016367341dd1565b2811810381d8ba4e784469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ec84973563da8ef2bbd3ac5db016367341dd1565b2811810381d8ba4e784469->leave($__internal_9ec84973563da8ef2bbd3ac5db016367341dd1565b2811810381d8ba4e784469_prof);

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
