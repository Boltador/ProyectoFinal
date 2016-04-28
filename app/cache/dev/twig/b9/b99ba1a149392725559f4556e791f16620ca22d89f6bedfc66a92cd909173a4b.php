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
        $__internal_d59589eda9fd3b3c01c3e7e364ac03727688b6ee81edbcb10b27508310b76e54 = $this->env->getExtension("native_profiler");
        $__internal_d59589eda9fd3b3c01c3e7e364ac03727688b6ee81edbcb10b27508310b76e54->enter($__internal_d59589eda9fd3b3c01c3e7e364ac03727688b6ee81edbcb10b27508310b76e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d59589eda9fd3b3c01c3e7e364ac03727688b6ee81edbcb10b27508310b76e54->leave($__internal_d59589eda9fd3b3c01c3e7e364ac03727688b6ee81edbcb10b27508310b76e54_prof);

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
