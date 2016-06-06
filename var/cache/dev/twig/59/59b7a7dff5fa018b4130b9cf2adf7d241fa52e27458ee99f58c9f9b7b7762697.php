<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5838b82b16a23b868d919fe2c08cb999ed7bbe0f2912216aaeada2e212e40d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6e8164b16f676193344816957b5cb168795ed1f4c59802f7bd5321198d33fce3 = $this->env->getExtension("native_profiler");
        $__internal_6e8164b16f676193344816957b5cb168795ed1f4c59802f7bd5321198d33fce3->enter($__internal_6e8164b16f676193344816957b5cb168795ed1f4c59802f7bd5321198d33fce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8164b16f676193344816957b5cb168795ed1f4c59802f7bd5321198d33fce3->leave($__internal_6e8164b16f676193344816957b5cb168795ed1f4c59802f7bd5321198d33fce3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21b78631bf5599c66422487ec542946ca0dc978c22f3b5b818b12e49bab8fc7a = $this->env->getExtension("native_profiler");
        $__internal_21b78631bf5599c66422487ec542946ca0dc978c22f3b5b818b12e49bab8fc7a->enter($__internal_21b78631bf5599c66422487ec542946ca0dc978c22f3b5b818b12e49bab8fc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21b78631bf5599c66422487ec542946ca0dc978c22f3b5b818b12e49bab8fc7a->leave($__internal_21b78631bf5599c66422487ec542946ca0dc978c22f3b5b818b12e49bab8fc7a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24a4091d382df0f74761af93af13e00b3f8c45f7d28029970ec698df91404f4d = $this->env->getExtension("native_profiler");
        $__internal_24a4091d382df0f74761af93af13e00b3f8c45f7d28029970ec698df91404f4d->enter($__internal_24a4091d382df0f74761af93af13e00b3f8c45f7d28029970ec698df91404f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_24a4091d382df0f74761af93af13e00b3f8c45f7d28029970ec698df91404f4d->leave($__internal_24a4091d382df0f74761af93af13e00b3f8c45f7d28029970ec698df91404f4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_862ff489d2a8d7bfec140b7401654892785e9264f5380486c620e8d18574769d = $this->env->getExtension("native_profiler");
        $__internal_862ff489d2a8d7bfec140b7401654892785e9264f5380486c620e8d18574769d->enter($__internal_862ff489d2a8d7bfec140b7401654892785e9264f5380486c620e8d18574769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_862ff489d2a8d7bfec140b7401654892785e9264f5380486c620e8d18574769d->leave($__internal_862ff489d2a8d7bfec140b7401654892785e9264f5380486c620e8d18574769d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
