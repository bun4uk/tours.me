<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d6cc5bb6d0b683c26ff3ea1c944d01c0a9dd466c8ca0e85d98b23fb7cf02f867 extends Twig_Template
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
        $__internal_820828a511ab8358ad733c715bdf39cb8dc2b8ad854424bf98de0bca7806ef75 = $this->env->getExtension("native_profiler");
        $__internal_820828a511ab8358ad733c715bdf39cb8dc2b8ad854424bf98de0bca7806ef75->enter($__internal_820828a511ab8358ad733c715bdf39cb8dc2b8ad854424bf98de0bca7806ef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_820828a511ab8358ad733c715bdf39cb8dc2b8ad854424bf98de0bca7806ef75->leave($__internal_820828a511ab8358ad733c715bdf39cb8dc2b8ad854424bf98de0bca7806ef75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
