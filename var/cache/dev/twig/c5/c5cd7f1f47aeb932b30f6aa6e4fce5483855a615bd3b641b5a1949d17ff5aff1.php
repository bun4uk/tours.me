<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ad2ecfa09308ce40709197057628d7f65e4f978ec53bd72f5b3cf5a29631b9cf extends Twig_Template
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
        $__internal_935cfb3cc7e7ff1ac62099568019cfedb88bbc720e1ccda2ee393a18924acb59 = $this->env->getExtension("native_profiler");
        $__internal_935cfb3cc7e7ff1ac62099568019cfedb88bbc720e1ccda2ee393a18924acb59->enter($__internal_935cfb3cc7e7ff1ac62099568019cfedb88bbc720e1ccda2ee393a18924acb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_935cfb3cc7e7ff1ac62099568019cfedb88bbc720e1ccda2ee393a18924acb59->leave($__internal_935cfb3cc7e7ff1ac62099568019cfedb88bbc720e1ccda2ee393a18924acb59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
