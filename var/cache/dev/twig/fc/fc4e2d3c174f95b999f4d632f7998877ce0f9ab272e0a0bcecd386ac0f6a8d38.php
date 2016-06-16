<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f5338d1ab76fff305ebbd0633b588c4dc8715168bff7d8dfc47fc4c008745442 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_043b286a0868fa7a570a49380910166112796dd9fbfe8e12bdf5da9b2ab109a8 = $this->env->getExtension("native_profiler");
        $__internal_043b286a0868fa7a570a49380910166112796dd9fbfe8e12bdf5da9b2ab109a8->enter($__internal_043b286a0868fa7a570a49380910166112796dd9fbfe8e12bdf5da9b2ab109a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_043b286a0868fa7a570a49380910166112796dd9fbfe8e12bdf5da9b2ab109a8->leave($__internal_043b286a0868fa7a570a49380910166112796dd9fbfe8e12bdf5da9b2ab109a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42eb0fbb14b905ff659fafc68f92e5f39bb8d92833c7ffdf9e3e5fa8a796ae91 = $this->env->getExtension("native_profiler");
        $__internal_42eb0fbb14b905ff659fafc68f92e5f39bb8d92833c7ffdf9e3e5fa8a796ae91->enter($__internal_42eb0fbb14b905ff659fafc68f92e5f39bb8d92833c7ffdf9e3e5fa8a796ae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_42eb0fbb14b905ff659fafc68f92e5f39bb8d92833c7ffdf9e3e5fa8a796ae91->leave($__internal_42eb0fbb14b905ff659fafc68f92e5f39bb8d92833c7ffdf9e3e5fa8a796ae91_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b72d65d94b529de9c495a786212a1a8d529109e9ad7fbc3534333ce370971cc = $this->env->getExtension("native_profiler");
        $__internal_6b72d65d94b529de9c495a786212a1a8d529109e9ad7fbc3534333ce370971cc->enter($__internal_6b72d65d94b529de9c495a786212a1a8d529109e9ad7fbc3534333ce370971cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6b72d65d94b529de9c495a786212a1a8d529109e9ad7fbc3534333ce370971cc->leave($__internal_6b72d65d94b529de9c495a786212a1a8d529109e9ad7fbc3534333ce370971cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6feff6aa65fa0030e1cd168ef3df73564ebf3bbe15391701e9bf2d256562c24 = $this->env->getExtension("native_profiler");
        $__internal_d6feff6aa65fa0030e1cd168ef3df73564ebf3bbe15391701e9bf2d256562c24->enter($__internal_d6feff6aa65fa0030e1cd168ef3df73564ebf3bbe15391701e9bf2d256562c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d6feff6aa65fa0030e1cd168ef3df73564ebf3bbe15391701e9bf2d256562c24->leave($__internal_d6feff6aa65fa0030e1cd168ef3df73564ebf3bbe15391701e9bf2d256562c24_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
