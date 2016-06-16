<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_6a36e6efaea1a2af991441ebc70f9b35fe9b919353c4327aa7e0e98a952344a2 extends Twig_Template
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
        $__internal_347fb6fe21ad0105f807ee3ffcee04ce84230d837192567b129d319e5428428b = $this->env->getExtension("native_profiler");
        $__internal_347fb6fe21ad0105f807ee3ffcee04ce84230d837192567b129d319e5428428b->enter($__internal_347fb6fe21ad0105f807ee3ffcee04ce84230d837192567b129d319e5428428b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_347fb6fe21ad0105f807ee3ffcee04ce84230d837192567b129d319e5428428b->leave($__internal_347fb6fe21ad0105f807ee3ffcee04ce84230d837192567b129d319e5428428b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
