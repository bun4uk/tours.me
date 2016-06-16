<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_62bcde31ce637d88ac348d67326dcda0b1fbc3ff9260a726a0f590e189f52d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c539d34ca557f857199be0cc0cfbd5b04fbaa8116783adaba8e4bc2941eeee81 = $this->env->getExtension("native_profiler");
        $__internal_c539d34ca557f857199be0cc0cfbd5b04fbaa8116783adaba8e4bc2941eeee81->enter($__internal_c539d34ca557f857199be0cc0cfbd5b04fbaa8116783adaba8e4bc2941eeee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c539d34ca557f857199be0cc0cfbd5b04fbaa8116783adaba8e4bc2941eeee81->leave($__internal_c539d34ca557f857199be0cc0cfbd5b04fbaa8116783adaba8e4bc2941eeee81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef162d80b7a307400e7677bb65b152974959f89aa1b8841a66896c6d4d27ae43 = $this->env->getExtension("native_profiler");
        $__internal_ef162d80b7a307400e7677bb65b152974959f89aa1b8841a66896c6d4d27ae43->enter($__internal_ef162d80b7a307400e7677bb65b152974959f89aa1b8841a66896c6d4d27ae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef162d80b7a307400e7677bb65b152974959f89aa1b8841a66896c6d4d27ae43->leave($__internal_ef162d80b7a307400e7677bb65b152974959f89aa1b8841a66896c6d4d27ae43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c770c1a6d297cd7d66cfdb4a46168aec1e4506dd7a5f73ec2e9d338a5552a3f2 = $this->env->getExtension("native_profiler");
        $__internal_c770c1a6d297cd7d66cfdb4a46168aec1e4506dd7a5f73ec2e9d338a5552a3f2->enter($__internal_c770c1a6d297cd7d66cfdb4a46168aec1e4506dd7a5f73ec2e9d338a5552a3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c770c1a6d297cd7d66cfdb4a46168aec1e4506dd7a5f73ec2e9d338a5552a3f2->leave($__internal_c770c1a6d297cd7d66cfdb4a46168aec1e4506dd7a5f73ec2e9d338a5552a3f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12636a59651ba1c3ae65a0a4aa6e84fa0c199f80eb8e7182628e34f098e3821 = $this->env->getExtension("native_profiler");
        $__internal_b12636a59651ba1c3ae65a0a4aa6e84fa0c199f80eb8e7182628e34f098e3821->enter($__internal_b12636a59651ba1c3ae65a0a4aa6e84fa0c199f80eb8e7182628e34f098e3821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b12636a59651ba1c3ae65a0a4aa6e84fa0c199f80eb8e7182628e34f098e3821->leave($__internal_b12636a59651ba1c3ae65a0a4aa6e84fa0c199f80eb8e7182628e34f098e3821_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
