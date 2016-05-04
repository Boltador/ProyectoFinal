<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_315a2d217789a1a46f8a2a3d44c9e5b69ba4556690534578fbd1a650f64ff3b6 extends Twig_Template
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
        $__internal_912adc6592d8cecac7a6c21f2b187c1ba2d8b4fc94c75f24d02f9d9adb2a81c5 = $this->env->getExtension("native_profiler");
        $__internal_912adc6592d8cecac7a6c21f2b187c1ba2d8b4fc94c75f24d02f9d9adb2a81c5->enter($__internal_912adc6592d8cecac7a6c21f2b187c1ba2d8b4fc94c75f24d02f9d9adb2a81c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_912adc6592d8cecac7a6c21f2b187c1ba2d8b4fc94c75f24d02f9d9adb2a81c5->leave($__internal_912adc6592d8cecac7a6c21f2b187c1ba2d8b4fc94c75f24d02f9d9adb2a81c5_prof);

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
