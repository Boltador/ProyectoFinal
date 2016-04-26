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
        $__internal_68f1179a1f1a92a738cf701d1eeea9546755a1a2bb8734b770ca06092d078e1d = $this->env->getExtension("native_profiler");
        $__internal_68f1179a1f1a92a738cf701d1eeea9546755a1a2bb8734b770ca06092d078e1d->enter($__internal_68f1179a1f1a92a738cf701d1eeea9546755a1a2bb8734b770ca06092d078e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_68f1179a1f1a92a738cf701d1eeea9546755a1a2bb8734b770ca06092d078e1d->leave($__internal_68f1179a1f1a92a738cf701d1eeea9546755a1a2bb8734b770ca06092d078e1d_prof);

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
