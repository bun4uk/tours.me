<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_47498f6c60564f78c48181cce2074cb784cf88f06243c46f7be25c799eb1c84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9f9ae2ac6329c98deb91bf35244c5edbf5eedadfd6e24aa175ceba4c9d313c = $this->env->getExtension("native_profiler");
        $__internal_de9f9ae2ac6329c98deb91bf35244c5edbf5eedadfd6e24aa175ceba4c9d313c->enter($__internal_de9f9ae2ac6329c98deb91bf35244c5edbf5eedadfd6e24aa175ceba4c9d313c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_de9f9ae2ac6329c98deb91bf35244c5edbf5eedadfd6e24aa175ceba4c9d313c->leave($__internal_de9f9ae2ac6329c98deb91bf35244c5edbf5eedadfd6e24aa175ceba4c9d313c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
