<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b5f92d409ccc4e2c68312b855c08a3995a1b7a57f014d5bad45c1909b4e03b05 extends Twig_Template
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
        $__internal_10515b01fc68fe01e24c723690b469c6fa450a239e8e00a4bfe19a18fee6bf9d = $this->env->getExtension("native_profiler");
        $__internal_10515b01fc68fe01e24c723690b469c6fa450a239e8e00a4bfe19a18fee6bf9d->enter($__internal_10515b01fc68fe01e24c723690b469c6fa450a239e8e00a4bfe19a18fee6bf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_10515b01fc68fe01e24c723690b469c6fa450a239e8e00a4bfe19a18fee6bf9d->leave($__internal_10515b01fc68fe01e24c723690b469c6fa450a239e8e00a4bfe19a18fee6bf9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
