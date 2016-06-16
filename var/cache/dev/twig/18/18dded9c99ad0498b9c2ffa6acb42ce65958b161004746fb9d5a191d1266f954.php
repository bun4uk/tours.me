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
        $__internal_4f6a0b15b453e4ff329f2804fac4b719f4cfb117e8b6fcf190e2060912d8766a = $this->env->getExtension("native_profiler");
        $__internal_4f6a0b15b453e4ff329f2804fac4b719f4cfb117e8b6fcf190e2060912d8766a->enter($__internal_4f6a0b15b453e4ff329f2804fac4b719f4cfb117e8b6fcf190e2060912d8766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6a0b15b453e4ff329f2804fac4b719f4cfb117e8b6fcf190e2060912d8766a->leave($__internal_4f6a0b15b453e4ff329f2804fac4b719f4cfb117e8b6fcf190e2060912d8766a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88cc71f290a4abcb70e1c34c09a605ad37f3c47b4d2daf35f523b438c2b762c6 = $this->env->getExtension("native_profiler");
        $__internal_88cc71f290a4abcb70e1c34c09a605ad37f3c47b4d2daf35f523b438c2b762c6->enter($__internal_88cc71f290a4abcb70e1c34c09a605ad37f3c47b4d2daf35f523b438c2b762c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88cc71f290a4abcb70e1c34c09a605ad37f3c47b4d2daf35f523b438c2b762c6->leave($__internal_88cc71f290a4abcb70e1c34c09a605ad37f3c47b4d2daf35f523b438c2b762c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bde88f589defcc54ea15bfbc17c11c7fca234b0374ca548c559e3f2bf960ed4 = $this->env->getExtension("native_profiler");
        $__internal_0bde88f589defcc54ea15bfbc17c11c7fca234b0374ca548c559e3f2bf960ed4->enter($__internal_0bde88f589defcc54ea15bfbc17c11c7fca234b0374ca548c559e3f2bf960ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0bde88f589defcc54ea15bfbc17c11c7fca234b0374ca548c559e3f2bf960ed4->leave($__internal_0bde88f589defcc54ea15bfbc17c11c7fca234b0374ca548c559e3f2bf960ed4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35b092ee613a2d2344720ac88a342508e0bc475dbe2601c6219f2c56e392e0c7 = $this->env->getExtension("native_profiler");
        $__internal_35b092ee613a2d2344720ac88a342508e0bc475dbe2601c6219f2c56e392e0c7->enter($__internal_35b092ee613a2d2344720ac88a342508e0bc475dbe2601c6219f2c56e392e0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35b092ee613a2d2344720ac88a342508e0bc475dbe2601c6219f2c56e392e0c7->leave($__internal_35b092ee613a2d2344720ac88a342508e0bc475dbe2601c6219f2c56e392e0c7_prof);

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
