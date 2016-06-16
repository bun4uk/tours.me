<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_164404d14cbefca43ab752c0361b979886f8645432c70d94d1ff709dd49cd225 extends Twig_Template
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
        $__internal_bc04f0b80150990fde88672e61dbc253497d7ba40a3be71b2849cfa9a9f1a822 = $this->env->getExtension("native_profiler");
        $__internal_bc04f0b80150990fde88672e61dbc253497d7ba40a3be71b2849cfa9a9f1a822->enter($__internal_bc04f0b80150990fde88672e61dbc253497d7ba40a3be71b2849cfa9a9f1a822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_bc04f0b80150990fde88672e61dbc253497d7ba40a3be71b2849cfa9a9f1a822->leave($__internal_bc04f0b80150990fde88672e61dbc253497d7ba40a3be71b2849cfa9a9f1a822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
