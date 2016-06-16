<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d6a70ee5c9d1a447b77c10ba66f9edc5730ee5197a29fc3f0e7512bc6c84ec93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38bba56594956d09ed4365eb04a417c316bf7a7c8c7846b54a36633af50887de = $this->env->getExtension("native_profiler");
        $__internal_38bba56594956d09ed4365eb04a417c316bf7a7c8c7846b54a36633af50887de->enter($__internal_38bba56594956d09ed4365eb04a417c316bf7a7c8c7846b54a36633af50887de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38bba56594956d09ed4365eb04a417c316bf7a7c8c7846b54a36633af50887de->leave($__internal_38bba56594956d09ed4365eb04a417c316bf7a7c8c7846b54a36633af50887de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55da12557b72a06acd01340a1dd7c76fd299784fe19546cc4e2a8559c8ba6023 = $this->env->getExtension("native_profiler");
        $__internal_55da12557b72a06acd01340a1dd7c76fd299784fe19546cc4e2a8559c8ba6023->enter($__internal_55da12557b72a06acd01340a1dd7c76fd299784fe19546cc4e2a8559c8ba6023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55da12557b72a06acd01340a1dd7c76fd299784fe19546cc4e2a8559c8ba6023->leave($__internal_55da12557b72a06acd01340a1dd7c76fd299784fe19546cc4e2a8559c8ba6023_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_446ea890d61e0ea300e0415e86410a76de36fac99998ef14e38002e4b1dd02d0 = $this->env->getExtension("native_profiler");
        $__internal_446ea890d61e0ea300e0415e86410a76de36fac99998ef14e38002e4b1dd02d0->enter($__internal_446ea890d61e0ea300e0415e86410a76de36fac99998ef14e38002e4b1dd02d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_446ea890d61e0ea300e0415e86410a76de36fac99998ef14e38002e4b1dd02d0->leave($__internal_446ea890d61e0ea300e0415e86410a76de36fac99998ef14e38002e4b1dd02d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6f852520cdebda61e28f2f0111a565a6037c79e1ba58f502d986c172adc4f9a = $this->env->getExtension("native_profiler");
        $__internal_a6f852520cdebda61e28f2f0111a565a6037c79e1ba58f502d986c172adc4f9a->enter($__internal_a6f852520cdebda61e28f2f0111a565a6037c79e1ba58f502d986c172adc4f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6f852520cdebda61e28f2f0111a565a6037c79e1ba58f502d986c172adc4f9a->leave($__internal_a6f852520cdebda61e28f2f0111a565a6037c79e1ba58f502d986c172adc4f9a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
