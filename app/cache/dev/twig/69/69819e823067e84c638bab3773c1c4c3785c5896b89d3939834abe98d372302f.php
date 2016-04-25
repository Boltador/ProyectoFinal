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
        $__internal_32949fc852f01a3d436d54d51bc1951441654fb0cb7881f19d5b61f7ef082869 = $this->env->getExtension("native_profiler");
        $__internal_32949fc852f01a3d436d54d51bc1951441654fb0cb7881f19d5b61f7ef082869->enter($__internal_32949fc852f01a3d436d54d51bc1951441654fb0cb7881f19d5b61f7ef082869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_32949fc852f01a3d436d54d51bc1951441654fb0cb7881f19d5b61f7ef082869->leave($__internal_32949fc852f01a3d436d54d51bc1951441654fb0cb7881f19d5b61f7ef082869_prof);

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
