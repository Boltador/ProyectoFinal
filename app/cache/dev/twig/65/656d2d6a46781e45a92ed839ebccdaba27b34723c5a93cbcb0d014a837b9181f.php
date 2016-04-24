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
        $__internal_c69528c8e8ca4f53c48d4ad0d50c62a5ba0d48491b08f2a791d6ec2c02be5428 = $this->env->getExtension("native_profiler");
        $__internal_c69528c8e8ca4f53c48d4ad0d50c62a5ba0d48491b08f2a791d6ec2c02be5428->enter($__internal_c69528c8e8ca4f53c48d4ad0d50c62a5ba0d48491b08f2a791d6ec2c02be5428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c69528c8e8ca4f53c48d4ad0d50c62a5ba0d48491b08f2a791d6ec2c02be5428->leave($__internal_c69528c8e8ca4f53c48d4ad0d50c62a5ba0d48491b08f2a791d6ec2c02be5428_prof);

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
