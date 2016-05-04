<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dcc0f0de29c0ab8ac1f311967f4c0f979906e0c17e40830723ec4a6299d87bc5 extends Twig_Template
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
        $__internal_149cdfa4fb304c946e109107f2490ce48d3de50589cbbf5edbc2bdc30965d7ba = $this->env->getExtension("native_profiler");
        $__internal_149cdfa4fb304c946e109107f2490ce48d3de50589cbbf5edbc2bdc30965d7ba->enter($__internal_149cdfa4fb304c946e109107f2490ce48d3de50589cbbf5edbc2bdc30965d7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_149cdfa4fb304c946e109107f2490ce48d3de50589cbbf5edbc2bdc30965d7ba->leave($__internal_149cdfa4fb304c946e109107f2490ce48d3de50589cbbf5edbc2bdc30965d7ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
