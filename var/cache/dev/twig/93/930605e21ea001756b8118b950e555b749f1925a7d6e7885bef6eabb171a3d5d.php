<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fff5a401a3d2f477681bccfe05dbbb04d8e3dc8d97fb818164e718cae5938787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_db58b0984d8e5b9781e4a32da3a9d0e74592b9ef09d1ca3f88a2177cd87a551c = $this->env->getExtension("native_profiler");
        $__internal_db58b0984d8e5b9781e4a32da3a9d0e74592b9ef09d1ca3f88a2177cd87a551c->enter($__internal_db58b0984d8e5b9781e4a32da3a9d0e74592b9ef09d1ca3f88a2177cd87a551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db58b0984d8e5b9781e4a32da3a9d0e74592b9ef09d1ca3f88a2177cd87a551c->leave($__internal_db58b0984d8e5b9781e4a32da3a9d0e74592b9ef09d1ca3f88a2177cd87a551c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bff12f733a4cc4fbebf5a93872d51abd51ecef26ef4bc220d3f760a711769fb8 = $this->env->getExtension("native_profiler");
        $__internal_bff12f733a4cc4fbebf5a93872d51abd51ecef26ef4bc220d3f760a711769fb8->enter($__internal_bff12f733a4cc4fbebf5a93872d51abd51ecef26ef4bc220d3f760a711769fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bff12f733a4cc4fbebf5a93872d51abd51ecef26ef4bc220d3f760a711769fb8->leave($__internal_bff12f733a4cc4fbebf5a93872d51abd51ecef26ef4bc220d3f760a711769fb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a828ec6b7066095f52b8b2f2a533b89bcb01e0e09162a4d5398846eb1a751180 = $this->env->getExtension("native_profiler");
        $__internal_a828ec6b7066095f52b8b2f2a533b89bcb01e0e09162a4d5398846eb1a751180->enter($__internal_a828ec6b7066095f52b8b2f2a533b89bcb01e0e09162a4d5398846eb1a751180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a828ec6b7066095f52b8b2f2a533b89bcb01e0e09162a4d5398846eb1a751180->leave($__internal_a828ec6b7066095f52b8b2f2a533b89bcb01e0e09162a4d5398846eb1a751180_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87c7c42932f7187e30a67461a3f7a7a6754c95a73c6ff35a80550cf8db5478d0 = $this->env->getExtension("native_profiler");
        $__internal_87c7c42932f7187e30a67461a3f7a7a6754c95a73c6ff35a80550cf8db5478d0->enter($__internal_87c7c42932f7187e30a67461a3f7a7a6754c95a73c6ff35a80550cf8db5478d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_87c7c42932f7187e30a67461a3f7a7a6754c95a73c6ff35a80550cf8db5478d0->leave($__internal_87c7c42932f7187e30a67461a3f7a7a6754c95a73c6ff35a80550cf8db5478d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
