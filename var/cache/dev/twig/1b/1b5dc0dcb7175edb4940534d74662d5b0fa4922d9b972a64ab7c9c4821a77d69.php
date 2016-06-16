<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9fcbe27f27e7452d8405b8201e95716530b5ca3d0e331acfd04b39c9a5cef05b extends Twig_Template
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
        $__internal_400f54c41aceb21159f33d2b6b4fa5cb789528a12d901bc87f89bd356e10e998 = $this->env->getExtension("native_profiler");
        $__internal_400f54c41aceb21159f33d2b6b4fa5cb789528a12d901bc87f89bd356e10e998->enter($__internal_400f54c41aceb21159f33d2b6b4fa5cb789528a12d901bc87f89bd356e10e998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_400f54c41aceb21159f33d2b6b4fa5cb789528a12d901bc87f89bd356e10e998->leave($__internal_400f54c41aceb21159f33d2b6b4fa5cb789528a12d901bc87f89bd356e10e998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
