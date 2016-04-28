<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_892e0b7304fa2ad999e94c05dc87f0f694ab94d5189108ea5afe1b1cc434b314 extends Twig_Template
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
        $__internal_19a771f040903b64249fca2ae0f1d52aaadbf882b41eab9f48f8b0c557268a0e = $this->env->getExtension("native_profiler");
        $__internal_19a771f040903b64249fca2ae0f1d52aaadbf882b41eab9f48f8b0c557268a0e->enter($__internal_19a771f040903b64249fca2ae0f1d52aaadbf882b41eab9f48f8b0c557268a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_19a771f040903b64249fca2ae0f1d52aaadbf882b41eab9f48f8b0c557268a0e->leave($__internal_19a771f040903b64249fca2ae0f1d52aaadbf882b41eab9f48f8b0c557268a0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
