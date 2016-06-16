<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2954e0bc8c53b8ee548916ded51537d9d84896dad832245b876488d10b29ea7e extends Twig_Template
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
        $__internal_06dfef778fc7387c7bd4c32645bb03c1628addbc59112e91079b5174e932061d = $this->env->getExtension("native_profiler");
        $__internal_06dfef778fc7387c7bd4c32645bb03c1628addbc59112e91079b5174e932061d->enter($__internal_06dfef778fc7387c7bd4c32645bb03c1628addbc59112e91079b5174e932061d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_06dfef778fc7387c7bd4c32645bb03c1628addbc59112e91079b5174e932061d->leave($__internal_06dfef778fc7387c7bd4c32645bb03c1628addbc59112e91079b5174e932061d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
