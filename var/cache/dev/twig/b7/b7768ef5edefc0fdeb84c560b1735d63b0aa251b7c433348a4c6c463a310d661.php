<?php

/* ::base.html.twig */
class __TwigTemplate_40e7c6f0b9b389356cdd1c31a13f32dceb6dac2de7b4b160e625c705568c92e5 extends Twig_Template
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
        $__internal_d4b710176dbb8d69848684e630ebaa8a44417ffaed891e2ecd55f088e47b3284 = $this->env->getExtension("native_profiler");
        $__internal_d4b710176dbb8d69848684e630ebaa8a44417ffaed891e2ecd55f088e47b3284->enter($__internal_d4b710176dbb8d69848684e630ebaa8a44417ffaed891e2ecd55f088e47b3284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d4b710176dbb8d69848684e630ebaa8a44417ffaed891e2ecd55f088e47b3284->leave($__internal_d4b710176dbb8d69848684e630ebaa8a44417ffaed891e2ecd55f088e47b3284_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc2c1b088862f4d2530ea2f02250bd8e952b3a40d014c5e592f1cb41c7154d5 = $this->env->getExtension("native_profiler");
        $__internal_fdc2c1b088862f4d2530ea2f02250bd8e952b3a40d014c5e592f1cb41c7154d5->enter($__internal_fdc2c1b088862f4d2530ea2f02250bd8e952b3a40d014c5e592f1cb41c7154d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fdc2c1b088862f4d2530ea2f02250bd8e952b3a40d014c5e592f1cb41c7154d5->leave($__internal_fdc2c1b088862f4d2530ea2f02250bd8e952b3a40d014c5e592f1cb41c7154d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_540d3b2297da767e27c9ed053c51bd5fc4ef844b486adef93896475f3f199bc9 = $this->env->getExtension("native_profiler");
        $__internal_540d3b2297da767e27c9ed053c51bd5fc4ef844b486adef93896475f3f199bc9->enter($__internal_540d3b2297da767e27c9ed053c51bd5fc4ef844b486adef93896475f3f199bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_540d3b2297da767e27c9ed053c51bd5fc4ef844b486adef93896475f3f199bc9->leave($__internal_540d3b2297da767e27c9ed053c51bd5fc4ef844b486adef93896475f3f199bc9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39394d4b473c88fc563db76e3606f95c88237e352732402a0f5035058deeacdf = $this->env->getExtension("native_profiler");
        $__internal_39394d4b473c88fc563db76e3606f95c88237e352732402a0f5035058deeacdf->enter($__internal_39394d4b473c88fc563db76e3606f95c88237e352732402a0f5035058deeacdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39394d4b473c88fc563db76e3606f95c88237e352732402a0f5035058deeacdf->leave($__internal_39394d4b473c88fc563db76e3606f95c88237e352732402a0f5035058deeacdf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0f6b1899d754fc000421c075ed6700ea381e80a1bc1f63734eb184151a32965 = $this->env->getExtension("native_profiler");
        $__internal_b0f6b1899d754fc000421c075ed6700ea381e80a1bc1f63734eb184151a32965->enter($__internal_b0f6b1899d754fc000421c075ed6700ea381e80a1bc1f63734eb184151a32965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b0f6b1899d754fc000421c075ed6700ea381e80a1bc1f63734eb184151a32965->leave($__internal_b0f6b1899d754fc000421c075ed6700ea381e80a1bc1f63734eb184151a32965_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
