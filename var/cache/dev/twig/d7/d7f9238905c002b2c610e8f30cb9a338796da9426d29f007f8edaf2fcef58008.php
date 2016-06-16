<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d166130d24ae50d12370c47e28dea086a5558a54cae0faec94c2202e05bb6aea extends Twig_Template
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
        $__internal_38c6bfdbc1dd81be8aaf305ce190d9029b44dcd376b43b00ef00de5e5ad71beb = $this->env->getExtension("native_profiler");
        $__internal_38c6bfdbc1dd81be8aaf305ce190d9029b44dcd376b43b00ef00de5e5ad71beb->enter($__internal_38c6bfdbc1dd81be8aaf305ce190d9029b44dcd376b43b00ef00de5e5ad71beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_38c6bfdbc1dd81be8aaf305ce190d9029b44dcd376b43b00ef00de5e5ad71beb->leave($__internal_38c6bfdbc1dd81be8aaf305ce190d9029b44dcd376b43b00ef00de5e5ad71beb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
