<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_74ef1d8e63ac9865e550a5727ac4e521acae29bc4cd7b7e1549f1fc80f09f164 extends Twig_Template
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
        $__internal_70ced36ecb2d100d92bb0d376a62e49937248e948643a3b8e4f83f1312f6fd8e = $this->env->getExtension("native_profiler");
        $__internal_70ced36ecb2d100d92bb0d376a62e49937248e948643a3b8e4f83f1312f6fd8e->enter($__internal_70ced36ecb2d100d92bb0d376a62e49937248e948643a3b8e4f83f1312f6fd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_70ced36ecb2d100d92bb0d376a62e49937248e948643a3b8e4f83f1312f6fd8e->leave($__internal_70ced36ecb2d100d92bb0d376a62e49937248e948643a3b8e4f83f1312f6fd8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
