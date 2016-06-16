<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5c31b00608f0d1139e71b970906056e01e621b58485eb60ec64864c5f2832b85 extends Twig_Template
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
        $__internal_2f5c074454eddd22be7376095b9d1e2cb2f3f89539e026cc515ef42eef7059fc = $this->env->getExtension("native_profiler");
        $__internal_2f5c074454eddd22be7376095b9d1e2cb2f3f89539e026cc515ef42eef7059fc->enter($__internal_2f5c074454eddd22be7376095b9d1e2cb2f3f89539e026cc515ef42eef7059fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2f5c074454eddd22be7376095b9d1e2cb2f3f89539e026cc515ef42eef7059fc->leave($__internal_2f5c074454eddd22be7376095b9d1e2cb2f3f89539e026cc515ef42eef7059fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
