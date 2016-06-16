<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fe94cc4c92520818f95bc1076f9e2ad8f8cec455328655e1064ae61a0711c7d3 extends Twig_Template
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
        $__internal_586d9e53e8ddd2b3a12d0c670f4e333e8243ed71e91f7043c924f9c67c76feb9 = $this->env->getExtension("native_profiler");
        $__internal_586d9e53e8ddd2b3a12d0c670f4e333e8243ed71e91f7043c924f9c67c76feb9->enter($__internal_586d9e53e8ddd2b3a12d0c670f4e333e8243ed71e91f7043c924f9c67c76feb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_586d9e53e8ddd2b3a12d0c670f4e333e8243ed71e91f7043c924f9c67c76feb9->leave($__internal_586d9e53e8ddd2b3a12d0c670f4e333e8243ed71e91f7043c924f9c67c76feb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
