<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_897301251735005721341034972ae94b60297b7966fcddb4a40f742bcba2e871 extends Twig_Template
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
        $__internal_2c56f2e83991cb881b23c9bee002c0b3ee5d25a2e355d3a7c262b6c4fd7e9a21 = $this->env->getExtension("native_profiler");
        $__internal_2c56f2e83991cb881b23c9bee002c0b3ee5d25a2e355d3a7c262b6c4fd7e9a21->enter($__internal_2c56f2e83991cb881b23c9bee002c0b3ee5d25a2e355d3a7c262b6c4fd7e9a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2c56f2e83991cb881b23c9bee002c0b3ee5d25a2e355d3a7c262b6c4fd7e9a21->leave($__internal_2c56f2e83991cb881b23c9bee002c0b3ee5d25a2e355d3a7c262b6c4fd7e9a21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
