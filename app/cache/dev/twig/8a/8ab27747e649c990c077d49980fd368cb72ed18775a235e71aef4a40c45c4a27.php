<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_62e4e61f5f95c70b2b0e8901d0aa8a631ad05096c0caec46634c04f4ba6f98a9 extends Twig_Template
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
        $__internal_9202fc9f415ae3f90100b973b09a0727e15c1b15faeda32cddcb5c03c84d52e8 = $this->env->getExtension("native_profiler");
        $__internal_9202fc9f415ae3f90100b973b09a0727e15c1b15faeda32cddcb5c03c84d52e8->enter($__internal_9202fc9f415ae3f90100b973b09a0727e15c1b15faeda32cddcb5c03c84d52e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9202fc9f415ae3f90100b973b09a0727e15c1b15faeda32cddcb5c03c84d52e8->leave($__internal_9202fc9f415ae3f90100b973b09a0727e15c1b15faeda32cddcb5c03c84d52e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
