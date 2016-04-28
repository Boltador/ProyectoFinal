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
        $__internal_7c77f8b49dc63fa0309c1ffd73155820d582a9a601babbfaeb80a31887478c94 = $this->env->getExtension("native_profiler");
        $__internal_7c77f8b49dc63fa0309c1ffd73155820d582a9a601babbfaeb80a31887478c94->enter($__internal_7c77f8b49dc63fa0309c1ffd73155820d582a9a601babbfaeb80a31887478c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7c77f8b49dc63fa0309c1ffd73155820d582a9a601babbfaeb80a31887478c94->leave($__internal_7c77f8b49dc63fa0309c1ffd73155820d582a9a601babbfaeb80a31887478c94_prof);

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
