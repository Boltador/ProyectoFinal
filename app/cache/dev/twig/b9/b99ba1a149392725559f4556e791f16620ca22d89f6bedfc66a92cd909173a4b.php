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
        $__internal_eb2bb68b47f3f8d2764eceac8e194fab53e4bc5d47bc24e6312a9edd3724cf2b = $this->env->getExtension("native_profiler");
        $__internal_eb2bb68b47f3f8d2764eceac8e194fab53e4bc5d47bc24e6312a9edd3724cf2b->enter($__internal_eb2bb68b47f3f8d2764eceac8e194fab53e4bc5d47bc24e6312a9edd3724cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eb2bb68b47f3f8d2764eceac8e194fab53e4bc5d47bc24e6312a9edd3724cf2b->leave($__internal_eb2bb68b47f3f8d2764eceac8e194fab53e4bc5d47bc24e6312a9edd3724cf2b_prof);

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
