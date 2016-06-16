<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ee91eeb3326d56f50765e97a0dd8d3dec0fc2522d3140e3b7cbcdb3e61f8687b extends Twig_Template
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
        $__internal_0385dd556a9eb73eff8e02787367f939455e390a1bc7d4f901f043bccd955d03 = $this->env->getExtension("native_profiler");
        $__internal_0385dd556a9eb73eff8e02787367f939455e390a1bc7d4f901f043bccd955d03->enter($__internal_0385dd556a9eb73eff8e02787367f939455e390a1bc7d4f901f043bccd955d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0385dd556a9eb73eff8e02787367f939455e390a1bc7d4f901f043bccd955d03->leave($__internal_0385dd556a9eb73eff8e02787367f939455e390a1bc7d4f901f043bccd955d03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
