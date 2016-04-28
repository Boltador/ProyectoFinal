<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e30f7f15f20edf32275b784a453f47dc8c506a916684b7b20d3d5bd7e2db35e extends Twig_Template
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
        $__internal_b2f0705d3af4b8580735431e0d7faf6297e3ed8d17f53de626babfad5163bd26 = $this->env->getExtension("native_profiler");
        $__internal_b2f0705d3af4b8580735431e0d7faf6297e3ed8d17f53de626babfad5163bd26->enter($__internal_b2f0705d3af4b8580735431e0d7faf6297e3ed8d17f53de626babfad5163bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b2f0705d3af4b8580735431e0d7faf6297e3ed8d17f53de626babfad5163bd26->leave($__internal_b2f0705d3af4b8580735431e0d7faf6297e3ed8d17f53de626babfad5163bd26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
