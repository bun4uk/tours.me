<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_eb753f284a0ab2d99383127eca982e72164f94f294360979188851df088b55e5 extends Twig_Template
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
        $__internal_9e72b22397886752c786c3135ccb5a7e7c19032319b5b51146ebf1baef7a0900 = $this->env->getExtension("native_profiler");
        $__internal_9e72b22397886752c786c3135ccb5a7e7c19032319b5b51146ebf1baef7a0900->enter($__internal_9e72b22397886752c786c3135ccb5a7e7c19032319b5b51146ebf1baef7a0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9e72b22397886752c786c3135ccb5a7e7c19032319b5b51146ebf1baef7a0900->leave($__internal_9e72b22397886752c786c3135ccb5a7e7c19032319b5b51146ebf1baef7a0900_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
