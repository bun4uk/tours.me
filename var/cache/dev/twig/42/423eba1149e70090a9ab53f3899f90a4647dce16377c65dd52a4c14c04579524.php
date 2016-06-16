<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_16d8f10e9ab901ee66547724b8c967713cddce58d54226ca565d6d0cb69b7cd8 extends Twig_Template
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
        $__internal_e580d197c91b8b10a1cb7333696e1a4c70dcfeda58e3445f08b37f1967dc080b = $this->env->getExtension("native_profiler");
        $__internal_e580d197c91b8b10a1cb7333696e1a4c70dcfeda58e3445f08b37f1967dc080b->enter($__internal_e580d197c91b8b10a1cb7333696e1a4c70dcfeda58e3445f08b37f1967dc080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e580d197c91b8b10a1cb7333696e1a4c70dcfeda58e3445f08b37f1967dc080b->leave($__internal_e580d197c91b8b10a1cb7333696e1a4c70dcfeda58e3445f08b37f1967dc080b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
