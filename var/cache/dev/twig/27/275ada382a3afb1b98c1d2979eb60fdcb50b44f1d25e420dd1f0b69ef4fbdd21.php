<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_75ade977741877c117b9003ddc79326bd0dc87786e51e1b91a2b3917b7e00a10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cb771d9804a104067b868308992ecdaf477bd5fbce70b75fd27fc5f4761972d3 = $this->env->getExtension("native_profiler");
        $__internal_cb771d9804a104067b868308992ecdaf477bd5fbce70b75fd27fc5f4761972d3->enter($__internal_cb771d9804a104067b868308992ecdaf477bd5fbce70b75fd27fc5f4761972d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb771d9804a104067b868308992ecdaf477bd5fbce70b75fd27fc5f4761972d3->leave($__internal_cb771d9804a104067b868308992ecdaf477bd5fbce70b75fd27fc5f4761972d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_321ddda2ef4121e0863730f340fc4850d06912b7f0f140cdfc6da2b357aa224e = $this->env->getExtension("native_profiler");
        $__internal_321ddda2ef4121e0863730f340fc4850d06912b7f0f140cdfc6da2b357aa224e->enter($__internal_321ddda2ef4121e0863730f340fc4850d06912b7f0f140cdfc6da2b357aa224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_321ddda2ef4121e0863730f340fc4850d06912b7f0f140cdfc6da2b357aa224e->leave($__internal_321ddda2ef4121e0863730f340fc4850d06912b7f0f140cdfc6da2b357aa224e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af68c2786167906610e1d04cafe449eda80667a9d4a5012f054fa48d66164fd6 = $this->env->getExtension("native_profiler");
        $__internal_af68c2786167906610e1d04cafe449eda80667a9d4a5012f054fa48d66164fd6->enter($__internal_af68c2786167906610e1d04cafe449eda80667a9d4a5012f054fa48d66164fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_af68c2786167906610e1d04cafe449eda80667a9d4a5012f054fa48d66164fd6->leave($__internal_af68c2786167906610e1d04cafe449eda80667a9d4a5012f054fa48d66164fd6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
