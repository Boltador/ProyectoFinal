<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e38b1d6d28b283a17f97ce02abeb0f5e37e95df98aa07db7e33c7fb8c3e6088f extends Twig_Template
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
        $__internal_40d3af1f784036ce11b635d021f035a966b7773e807604024a628d80c59121d0 = $this->env->getExtension("native_profiler");
        $__internal_40d3af1f784036ce11b635d021f035a966b7773e807604024a628d80c59121d0->enter($__internal_40d3af1f784036ce11b635d021f035a966b7773e807604024a628d80c59121d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_40d3af1f784036ce11b635d021f035a966b7773e807604024a628d80c59121d0->leave($__internal_40d3af1f784036ce11b635d021f035a966b7773e807604024a628d80c59121d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
