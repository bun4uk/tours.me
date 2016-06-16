<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_49c9bf732d2f0971bcfc28b603fef85f1623b65f5936e751bf0cab1ed0364ef8 extends Twig_Template
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
        $__internal_202933d46456bcbd71b77abab1361d2351ade10953faad26784c3de73efa2fcc = $this->env->getExtension("native_profiler");
        $__internal_202933d46456bcbd71b77abab1361d2351ade10953faad26784c3de73efa2fcc->enter($__internal_202933d46456bcbd71b77abab1361d2351ade10953faad26784c3de73efa2fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_202933d46456bcbd71b77abab1361d2351ade10953faad26784c3de73efa2fcc->leave($__internal_202933d46456bcbd71b77abab1361d2351ade10953faad26784c3de73efa2fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
