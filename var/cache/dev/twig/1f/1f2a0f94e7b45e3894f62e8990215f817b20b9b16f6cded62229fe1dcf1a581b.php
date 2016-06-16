<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_61a7cedf0c04b49f5473d710f72393a679db0dbaf4ded8b41861e3fe26eeef2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c679cb6d4b76b746d7ddadc1a624630e122cda6a6c3fe4d25f3cd9eae36bbc = $this->env->getExtension("native_profiler");
        $__internal_49c679cb6d4b76b746d7ddadc1a624630e122cda6a6c3fe4d25f3cd9eae36bbc->enter($__internal_49c679cb6d4b76b746d7ddadc1a624630e122cda6a6c3fe4d25f3cd9eae36bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_49c679cb6d4b76b746d7ddadc1a624630e122cda6a6c3fe4d25f3cd9eae36bbc->leave($__internal_49c679cb6d4b76b746d7ddadc1a624630e122cda6a6c3fe4d25f3cd9eae36bbc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b4b7302862d89e6f0519b5ce57452097dbf5842ae2add6b4dacb634fa26bee = $this->env->getExtension("native_profiler");
        $__internal_87b4b7302862d89e6f0519b5ce57452097dbf5842ae2add6b4dacb634fa26bee->enter($__internal_87b4b7302862d89e6f0519b5ce57452097dbf5842ae2add6b4dacb634fa26bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_87b4b7302862d89e6f0519b5ce57452097dbf5842ae2add6b4dacb634fa26bee->leave($__internal_87b4b7302862d89e6f0519b5ce57452097dbf5842ae2add6b4dacb634fa26bee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
