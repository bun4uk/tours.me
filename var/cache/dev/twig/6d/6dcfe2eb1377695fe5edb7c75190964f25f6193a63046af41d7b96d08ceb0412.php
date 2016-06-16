<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f0ddcc1f1ec8f5c22beed913ef60739cee3cbe701ca09682acf8deeff412c914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5ffd4c0bf419805ce712ebb6979019c32870eb950df508d9ac467ef7c3230fcd = $this->env->getExtension("native_profiler");
        $__internal_5ffd4c0bf419805ce712ebb6979019c32870eb950df508d9ac467ef7c3230fcd->enter($__internal_5ffd4c0bf419805ce712ebb6979019c32870eb950df508d9ac467ef7c3230fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ffd4c0bf419805ce712ebb6979019c32870eb950df508d9ac467ef7c3230fcd->leave($__internal_5ffd4c0bf419805ce712ebb6979019c32870eb950df508d9ac467ef7c3230fcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93007a7960017136c9e97772034bd992bab3b9d5387e51da23852683f81181f4 = $this->env->getExtension("native_profiler");
        $__internal_93007a7960017136c9e97772034bd992bab3b9d5387e51da23852683f81181f4->enter($__internal_93007a7960017136c9e97772034bd992bab3b9d5387e51da23852683f81181f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_93007a7960017136c9e97772034bd992bab3b9d5387e51da23852683f81181f4->leave($__internal_93007a7960017136c9e97772034bd992bab3b9d5387e51da23852683f81181f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cd179bed8933d3792b5220f3278017ff4ab2b82e5ba4e55b623acd1cf1d777f = $this->env->getExtension("native_profiler");
        $__internal_1cd179bed8933d3792b5220f3278017ff4ab2b82e5ba4e55b623acd1cf1d777f->enter($__internal_1cd179bed8933d3792b5220f3278017ff4ab2b82e5ba4e55b623acd1cf1d777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cd179bed8933d3792b5220f3278017ff4ab2b82e5ba4e55b623acd1cf1d777f->leave($__internal_1cd179bed8933d3792b5220f3278017ff4ab2b82e5ba4e55b623acd1cf1d777f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc61a4ff22ebc1bf3547f5c4101528ae018b7953942d77bc355da94751000dd = $this->env->getExtension("native_profiler");
        $__internal_2dc61a4ff22ebc1bf3547f5c4101528ae018b7953942d77bc355da94751000dd->enter($__internal_2dc61a4ff22ebc1bf3547f5c4101528ae018b7953942d77bc355da94751000dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2dc61a4ff22ebc1bf3547f5c4101528ae018b7953942d77bc355da94751000dd->leave($__internal_2dc61a4ff22ebc1bf3547f5c4101528ae018b7953942d77bc355da94751000dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
