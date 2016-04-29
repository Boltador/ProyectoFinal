<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_11e657241d1257e296735af8a1307851ac1a5582c90a3f03388a04f1819f799a extends Twig_Template
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
        $__internal_bac0de383b3cb5f3f9dd2255562c41836d5aeac62d440d04254749d5d9a62a3b = $this->env->getExtension("native_profiler");
        $__internal_bac0de383b3cb5f3f9dd2255562c41836d5aeac62d440d04254749d5d9a62a3b->enter($__internal_bac0de383b3cb5f3f9dd2255562c41836d5aeac62d440d04254749d5d9a62a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bac0de383b3cb5f3f9dd2255562c41836d5aeac62d440d04254749d5d9a62a3b->leave($__internal_bac0de383b3cb5f3f9dd2255562c41836d5aeac62d440d04254749d5d9a62a3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
