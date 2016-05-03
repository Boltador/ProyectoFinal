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
        $__internal_05dd7636fda4e391de4891e3bb1ed09e31b2b87a106de5bfe8054c73f1f0fa44 = $this->env->getExtension("native_profiler");
        $__internal_05dd7636fda4e391de4891e3bb1ed09e31b2b87a106de5bfe8054c73f1f0fa44->enter($__internal_05dd7636fda4e391de4891e3bb1ed09e31b2b87a106de5bfe8054c73f1f0fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05dd7636fda4e391de4891e3bb1ed09e31b2b87a106de5bfe8054c73f1f0fa44->leave($__internal_05dd7636fda4e391de4891e3bb1ed09e31b2b87a106de5bfe8054c73f1f0fa44_prof);

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
