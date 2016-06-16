<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6c0cf4f401df17148e0860ff52041fb47f64837c99f72fe9a77e54fded0411bc extends Twig_Template
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
        $__internal_dc5e9d3f419baaed33ed540c49041ca522a749c2397d757a37fc2b2243d6ad91 = $this->env->getExtension("native_profiler");
        $__internal_dc5e9d3f419baaed33ed540c49041ca522a749c2397d757a37fc2b2243d6ad91->enter($__internal_dc5e9d3f419baaed33ed540c49041ca522a749c2397d757a37fc2b2243d6ad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dc5e9d3f419baaed33ed540c49041ca522a749c2397d757a37fc2b2243d6ad91->leave($__internal_dc5e9d3f419baaed33ed540c49041ca522a749c2397d757a37fc2b2243d6ad91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
