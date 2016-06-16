<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e28a6f24eab7a113e750ba1661ba7a4d057aa239935da568aad2ad574ce75d90 extends Twig_Template
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
        $__internal_ba13c4d2adea1ad4a6fa5ef0cc59d565cece40e2cf33edcfae9bb72585da0fd4 = $this->env->getExtension("native_profiler");
        $__internal_ba13c4d2adea1ad4a6fa5ef0cc59d565cece40e2cf33edcfae9bb72585da0fd4->enter($__internal_ba13c4d2adea1ad4a6fa5ef0cc59d565cece40e2cf33edcfae9bb72585da0fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba13c4d2adea1ad4a6fa5ef0cc59d565cece40e2cf33edcfae9bb72585da0fd4->leave($__internal_ba13c4d2adea1ad4a6fa5ef0cc59d565cece40e2cf33edcfae9bb72585da0fd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b70684b831c46d54536f879f4afc113cc3206d5db2f1f530b9fecb782071bf4 = $this->env->getExtension("native_profiler");
        $__internal_1b70684b831c46d54536f879f4afc113cc3206d5db2f1f530b9fecb782071bf4->enter($__internal_1b70684b831c46d54536f879f4afc113cc3206d5db2f1f530b9fecb782071bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b70684b831c46d54536f879f4afc113cc3206d5db2f1f530b9fecb782071bf4->leave($__internal_1b70684b831c46d54536f879f4afc113cc3206d5db2f1f530b9fecb782071bf4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e02a0713fda28889c2f706d6e773b046fe0011b1f40124d4d92c00ed315e23e5 = $this->env->getExtension("native_profiler");
        $__internal_e02a0713fda28889c2f706d6e773b046fe0011b1f40124d4d92c00ed315e23e5->enter($__internal_e02a0713fda28889c2f706d6e773b046fe0011b1f40124d4d92c00ed315e23e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e02a0713fda28889c2f706d6e773b046fe0011b1f40124d4d92c00ed315e23e5->leave($__internal_e02a0713fda28889c2f706d6e773b046fe0011b1f40124d4d92c00ed315e23e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b89eda8cf74732cf7fc00ab796838dbfd420af57c6f5237ee19b46d74adb6af = $this->env->getExtension("native_profiler");
        $__internal_3b89eda8cf74732cf7fc00ab796838dbfd420af57c6f5237ee19b46d74adb6af->enter($__internal_3b89eda8cf74732cf7fc00ab796838dbfd420af57c6f5237ee19b46d74adb6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b89eda8cf74732cf7fc00ab796838dbfd420af57c6f5237ee19b46d74adb6af->leave($__internal_3b89eda8cf74732cf7fc00ab796838dbfd420af57c6f5237ee19b46d74adb6af_prof);

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
