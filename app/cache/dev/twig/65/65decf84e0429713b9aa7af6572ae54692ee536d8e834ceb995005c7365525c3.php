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
        $__internal_11aadb4d6bda98862604cefa94b18cb707695b8c4a086e88cd27e50775d45dc4 = $this->env->getExtension("native_profiler");
        $__internal_11aadb4d6bda98862604cefa94b18cb707695b8c4a086e88cd27e50775d45dc4->enter($__internal_11aadb4d6bda98862604cefa94b18cb707695b8c4a086e88cd27e50775d45dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11aadb4d6bda98862604cefa94b18cb707695b8c4a086e88cd27e50775d45dc4->leave($__internal_11aadb4d6bda98862604cefa94b18cb707695b8c4a086e88cd27e50775d45dc4_prof);

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
