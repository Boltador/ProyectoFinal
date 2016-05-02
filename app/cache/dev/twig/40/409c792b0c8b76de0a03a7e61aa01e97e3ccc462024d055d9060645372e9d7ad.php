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
        $__internal_89a135df99480d969a7a2aa522ebb635e8dc701fc4a7ec7aa930e5728ae66154 = $this->env->getExtension("native_profiler");
        $__internal_89a135df99480d969a7a2aa522ebb635e8dc701fc4a7ec7aa930e5728ae66154->enter($__internal_89a135df99480d969a7a2aa522ebb635e8dc701fc4a7ec7aa930e5728ae66154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_89a135df99480d969a7a2aa522ebb635e8dc701fc4a7ec7aa930e5728ae66154->leave($__internal_89a135df99480d969a7a2aa522ebb635e8dc701fc4a7ec7aa930e5728ae66154_prof);

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
