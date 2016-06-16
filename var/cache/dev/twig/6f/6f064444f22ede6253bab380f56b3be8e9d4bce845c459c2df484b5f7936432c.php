<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_39267f374d521cbaa8133d03710f07095ac06887d9f1ddf74c950f31b08a41f4 extends Twig_Template
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
        $__internal_8810bb360a5580b2f8945877a25fa10824a8cf2f339cacf01070222bdcd80a1a = $this->env->getExtension("native_profiler");
        $__internal_8810bb360a5580b2f8945877a25fa10824a8cf2f339cacf01070222bdcd80a1a->enter($__internal_8810bb360a5580b2f8945877a25fa10824a8cf2f339cacf01070222bdcd80a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8810bb360a5580b2f8945877a25fa10824a8cf2f339cacf01070222bdcd80a1a->leave($__internal_8810bb360a5580b2f8945877a25fa10824a8cf2f339cacf01070222bdcd80a1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
