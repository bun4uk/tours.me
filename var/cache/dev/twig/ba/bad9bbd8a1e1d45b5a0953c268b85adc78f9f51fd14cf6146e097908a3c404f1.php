<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_71db665e2a0e12b6b58bf4491fe0400d3325cf1b8bb3d9266ab8fec328f34214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a2467588a021a85bdee6603a0c73c9ffec6382cd74e97afa5319b08c93f27c0e = $this->env->getExtension("native_profiler");
        $__internal_a2467588a021a85bdee6603a0c73c9ffec6382cd74e97afa5319b08c93f27c0e->enter($__internal_a2467588a021a85bdee6603a0c73c9ffec6382cd74e97afa5319b08c93f27c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2467588a021a85bdee6603a0c73c9ffec6382cd74e97afa5319b08c93f27c0e->leave($__internal_a2467588a021a85bdee6603a0c73c9ffec6382cd74e97afa5319b08c93f27c0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3c945712fde0a38f2c099cb513d0bb6c6ae1a25f4920abc823a00ad5ba456fd = $this->env->getExtension("native_profiler");
        $__internal_f3c945712fde0a38f2c099cb513d0bb6c6ae1a25f4920abc823a00ad5ba456fd->enter($__internal_f3c945712fde0a38f2c099cb513d0bb6c6ae1a25f4920abc823a00ad5ba456fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f3c945712fde0a38f2c099cb513d0bb6c6ae1a25f4920abc823a00ad5ba456fd->leave($__internal_f3c945712fde0a38f2c099cb513d0bb6c6ae1a25f4920abc823a00ad5ba456fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_111c62899665575262a19276a35746d653c4a4a15ef29e18702041da2c5de541 = $this->env->getExtension("native_profiler");
        $__internal_111c62899665575262a19276a35746d653c4a4a15ef29e18702041da2c5de541->enter($__internal_111c62899665575262a19276a35746d653c4a4a15ef29e18702041da2c5de541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_111c62899665575262a19276a35746d653c4a4a15ef29e18702041da2c5de541->leave($__internal_111c62899665575262a19276a35746d653c4a4a15ef29e18702041da2c5de541_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
