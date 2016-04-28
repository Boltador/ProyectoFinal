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
        $__internal_71b341f99019bcbe869d4fd87fa5207ef7a59a2546a665f7a36b25f9120aaacd = $this->env->getExtension("native_profiler");
        $__internal_71b341f99019bcbe869d4fd87fa5207ef7a59a2546a665f7a36b25f9120aaacd->enter($__internal_71b341f99019bcbe869d4fd87fa5207ef7a59a2546a665f7a36b25f9120aaacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_71b341f99019bcbe869d4fd87fa5207ef7a59a2546a665f7a36b25f9120aaacd->leave($__internal_71b341f99019bcbe869d4fd87fa5207ef7a59a2546a665f7a36b25f9120aaacd_prof);

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
