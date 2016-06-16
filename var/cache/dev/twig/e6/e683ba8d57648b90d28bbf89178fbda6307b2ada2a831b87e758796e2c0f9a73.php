<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5423e7032ac1c004e3910e3d04e3742007377cf3f1824e72a0dfa50fb56ea0ca extends Twig_Template
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
        $__internal_2a6d17a92bea8a86058b96a769e7e3aeec855b92b445887a3ef0031bd444f873 = $this->env->getExtension("native_profiler");
        $__internal_2a6d17a92bea8a86058b96a769e7e3aeec855b92b445887a3ef0031bd444f873->enter($__internal_2a6d17a92bea8a86058b96a769e7e3aeec855b92b445887a3ef0031bd444f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2a6d17a92bea8a86058b96a769e7e3aeec855b92b445887a3ef0031bd444f873->leave($__internal_2a6d17a92bea8a86058b96a769e7e3aeec855b92b445887a3ef0031bd444f873_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
