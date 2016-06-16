<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_66af4b415c6618460749ed82be0d3d272fc53325ca57795ec53e9b191d23e993 extends Twig_Template
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
        $__internal_60088b4dd93864c10c00af0231cd26c631138a60bcca034046c52c79bd1abaf3 = $this->env->getExtension("native_profiler");
        $__internal_60088b4dd93864c10c00af0231cd26c631138a60bcca034046c52c79bd1abaf3->enter($__internal_60088b4dd93864c10c00af0231cd26c631138a60bcca034046c52c79bd1abaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_60088b4dd93864c10c00af0231cd26c631138a60bcca034046c52c79bd1abaf3->leave($__internal_60088b4dd93864c10c00af0231cd26c631138a60bcca034046c52c79bd1abaf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
