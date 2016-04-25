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
        $__internal_c846965c501e12283a374a38fc17a21252c137fbe4c3104506c39046d36346cc = $this->env->getExtension("native_profiler");
        $__internal_c846965c501e12283a374a38fc17a21252c137fbe4c3104506c39046d36346cc->enter($__internal_c846965c501e12283a374a38fc17a21252c137fbe4c3104506c39046d36346cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c846965c501e12283a374a38fc17a21252c137fbe4c3104506c39046d36346cc->leave($__internal_c846965c501e12283a374a38fc17a21252c137fbe4c3104506c39046d36346cc_prof);

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
