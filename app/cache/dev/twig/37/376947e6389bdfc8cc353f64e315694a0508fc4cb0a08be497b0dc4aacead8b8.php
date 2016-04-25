<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_528926a9f53c8c48946bf6b0f1c5a69a783e9532d543778e429adf39448d079e extends Twig_Template
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
        $__internal_fc9978ce5cd6f32ce2b86773a19bd57fd93896dd23124d78f6ad5451188f5b4c = $this->env->getExtension("native_profiler");
        $__internal_fc9978ce5cd6f32ce2b86773a19bd57fd93896dd23124d78f6ad5451188f5b4c->enter($__internal_fc9978ce5cd6f32ce2b86773a19bd57fd93896dd23124d78f6ad5451188f5b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fc9978ce5cd6f32ce2b86773a19bd57fd93896dd23124d78f6ad5451188f5b4c->leave($__internal_fc9978ce5cd6f32ce2b86773a19bd57fd93896dd23124d78f6ad5451188f5b4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
