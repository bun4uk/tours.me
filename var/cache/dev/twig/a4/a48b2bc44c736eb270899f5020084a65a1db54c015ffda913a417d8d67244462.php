<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a6ad0806c6226f12a39de7d4f8c827b578141185fe9cde85cfe3fcbcc51b0ef6 extends Twig_Template
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
        $__internal_9f68c67572eb5b13c1f8bf34abb6c0756f76a36f82c876b235288d5281b07eab = $this->env->getExtension("native_profiler");
        $__internal_9f68c67572eb5b13c1f8bf34abb6c0756f76a36f82c876b235288d5281b07eab->enter($__internal_9f68c67572eb5b13c1f8bf34abb6c0756f76a36f82c876b235288d5281b07eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f68c67572eb5b13c1f8bf34abb6c0756f76a36f82c876b235288d5281b07eab->leave($__internal_9f68c67572eb5b13c1f8bf34abb6c0756f76a36f82c876b235288d5281b07eab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
