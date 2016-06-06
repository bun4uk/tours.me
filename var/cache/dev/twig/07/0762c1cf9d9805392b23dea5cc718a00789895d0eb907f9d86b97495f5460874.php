<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e92310d0cd631afc6a4a1228ab3f40554d6a05beb2d5381cb4de2f655ede3742 extends Twig_Template
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
        $__internal_3e4a6ed00e5c8c4364d08e283c4edb7d39155acb6b149645392a39bc9b7e43d1 = $this->env->getExtension("native_profiler");
        $__internal_3e4a6ed00e5c8c4364d08e283c4edb7d39155acb6b149645392a39bc9b7e43d1->enter($__internal_3e4a6ed00e5c8c4364d08e283c4edb7d39155acb6b149645392a39bc9b7e43d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e4a6ed00e5c8c4364d08e283c4edb7d39155acb6b149645392a39bc9b7e43d1->leave($__internal_3e4a6ed00e5c8c4364d08e283c4edb7d39155acb6b149645392a39bc9b7e43d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6d26713a67caf1960a55c7bc7d59136d74a0c88debe7db5034068eda7a7dc86 = $this->env->getExtension("native_profiler");
        $__internal_b6d26713a67caf1960a55c7bc7d59136d74a0c88debe7db5034068eda7a7dc86->enter($__internal_b6d26713a67caf1960a55c7bc7d59136d74a0c88debe7db5034068eda7a7dc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b6d26713a67caf1960a55c7bc7d59136d74a0c88debe7db5034068eda7a7dc86->leave($__internal_b6d26713a67caf1960a55c7bc7d59136d74a0c88debe7db5034068eda7a7dc86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34619eeebf7e10a7bc3afe9f387e024bd72cba7f6366ee376c9507b5b70358cd = $this->env->getExtension("native_profiler");
        $__internal_34619eeebf7e10a7bc3afe9f387e024bd72cba7f6366ee376c9507b5b70358cd->enter($__internal_34619eeebf7e10a7bc3afe9f387e024bd72cba7f6366ee376c9507b5b70358cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34619eeebf7e10a7bc3afe9f387e024bd72cba7f6366ee376c9507b5b70358cd->leave($__internal_34619eeebf7e10a7bc3afe9f387e024bd72cba7f6366ee376c9507b5b70358cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3459b134bd74c48e1af707fd6e42d1896f3a7b5fc7231a4d5a7e5d6fdd0dc7d2 = $this->env->getExtension("native_profiler");
        $__internal_3459b134bd74c48e1af707fd6e42d1896f3a7b5fc7231a4d5a7e5d6fdd0dc7d2->enter($__internal_3459b134bd74c48e1af707fd6e42d1896f3a7b5fc7231a4d5a7e5d6fdd0dc7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3459b134bd74c48e1af707fd6e42d1896f3a7b5fc7231a4d5a7e5d6fdd0dc7d2->leave($__internal_3459b134bd74c48e1af707fd6e42d1896f3a7b5fc7231a4d5a7e5d6fdd0dc7d2_prof);

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
