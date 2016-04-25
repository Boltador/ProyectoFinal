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
        $__internal_0a83948bfc326a204d94bd97e7086f2aa993f0acbd11b5f6bc940b8acb09222f = $this->env->getExtension("native_profiler");
        $__internal_0a83948bfc326a204d94bd97e7086f2aa993f0acbd11b5f6bc940b8acb09222f->enter($__internal_0a83948bfc326a204d94bd97e7086f2aa993f0acbd11b5f6bc940b8acb09222f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0a83948bfc326a204d94bd97e7086f2aa993f0acbd11b5f6bc940b8acb09222f->leave($__internal_0a83948bfc326a204d94bd97e7086f2aa993f0acbd11b5f6bc940b8acb09222f_prof);

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
