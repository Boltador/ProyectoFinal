<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6103f88e7e1209116243160a7edbf8ce95c5972bf34b412d04901aae36883de4 extends Twig_Template
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
        $__internal_d4b51ce4f5600e6be246cad493f5745166fdc82b8c12c3e31a8180c8aeeea6e5 = $this->env->getExtension("native_profiler");
        $__internal_d4b51ce4f5600e6be246cad493f5745166fdc82b8c12c3e31a8180c8aeeea6e5->enter($__internal_d4b51ce4f5600e6be246cad493f5745166fdc82b8c12c3e31a8180c8aeeea6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d4b51ce4f5600e6be246cad493f5745166fdc82b8c12c3e31a8180c8aeeea6e5->leave($__internal_d4b51ce4f5600e6be246cad493f5745166fdc82b8c12c3e31a8180c8aeeea6e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
