<?php

/* base.html.twig */
class __TwigTemplate_aa301c5e41dcda0ee070621199546e459b4686cbab1cd9fe3bcc8c3b66cae5f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a448210f9f2cb7807d9a7e603599f881bb77712736723600fa8c15be83524c8 = $this->env->getExtension("native_profiler");
        $__internal_0a448210f9f2cb7807d9a7e603599f881bb77712736723600fa8c15be83524c8->enter($__internal_0a448210f9f2cb7807d9a7e603599f881bb77712736723600fa8c15be83524c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0a448210f9f2cb7807d9a7e603599f881bb77712736723600fa8c15be83524c8->leave($__internal_0a448210f9f2cb7807d9a7e603599f881bb77712736723600fa8c15be83524c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_163d4869f9a85e69d057ca547262ac339059abfc2fa415863958a5bb65e42e3e = $this->env->getExtension("native_profiler");
        $__internal_163d4869f9a85e69d057ca547262ac339059abfc2fa415863958a5bb65e42e3e->enter($__internal_163d4869f9a85e69d057ca547262ac339059abfc2fa415863958a5bb65e42e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_163d4869f9a85e69d057ca547262ac339059abfc2fa415863958a5bb65e42e3e->leave($__internal_163d4869f9a85e69d057ca547262ac339059abfc2fa415863958a5bb65e42e3e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c2d26e5df54cbd3cfa17cced89a6a331f95499b6da92a0b3a52a9545491699c = $this->env->getExtension("native_profiler");
        $__internal_4c2d26e5df54cbd3cfa17cced89a6a331f95499b6da92a0b3a52a9545491699c->enter($__internal_4c2d26e5df54cbd3cfa17cced89a6a331f95499b6da92a0b3a52a9545491699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4c2d26e5df54cbd3cfa17cced89a6a331f95499b6da92a0b3a52a9545491699c->leave($__internal_4c2d26e5df54cbd3cfa17cced89a6a331f95499b6da92a0b3a52a9545491699c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_31426770ad334e6efb88a13b118e94e87d3de74d648dcc50ec4ef39524b125b0 = $this->env->getExtension("native_profiler");
        $__internal_31426770ad334e6efb88a13b118e94e87d3de74d648dcc50ec4ef39524b125b0->enter($__internal_31426770ad334e6efb88a13b118e94e87d3de74d648dcc50ec4ef39524b125b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31426770ad334e6efb88a13b118e94e87d3de74d648dcc50ec4ef39524b125b0->leave($__internal_31426770ad334e6efb88a13b118e94e87d3de74d648dcc50ec4ef39524b125b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d74c725e931bc9fad542c9ea15a5c24bac398628f826da637b3d771051e6cec8 = $this->env->getExtension("native_profiler");
        $__internal_d74c725e931bc9fad542c9ea15a5c24bac398628f826da637b3d771051e6cec8->enter($__internal_d74c725e931bc9fad542c9ea15a5c24bac398628f826da637b3d771051e6cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d74c725e931bc9fad542c9ea15a5c24bac398628f826da637b3d771051e6cec8->leave($__internal_d74c725e931bc9fad542c9ea15a5c24bac398628f826da637b3d771051e6cec8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
