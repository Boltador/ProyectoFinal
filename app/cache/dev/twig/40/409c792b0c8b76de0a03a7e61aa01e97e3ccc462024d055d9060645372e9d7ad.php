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
        $__internal_39b4ae37a0fec8fd5f0b8562ce073681f4ac88a1c2f3c7ad01d4fe00facc4112 = $this->env->getExtension("native_profiler");
        $__internal_39b4ae37a0fec8fd5f0b8562ce073681f4ac88a1c2f3c7ad01d4fe00facc4112->enter($__internal_39b4ae37a0fec8fd5f0b8562ce073681f4ac88a1c2f3c7ad01d4fe00facc4112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_39b4ae37a0fec8fd5f0b8562ce073681f4ac88a1c2f3c7ad01d4fe00facc4112->leave($__internal_39b4ae37a0fec8fd5f0b8562ce073681f4ac88a1c2f3c7ad01d4fe00facc4112_prof);

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
