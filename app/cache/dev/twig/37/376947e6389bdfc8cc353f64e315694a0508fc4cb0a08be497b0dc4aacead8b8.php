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
        $__internal_fdc2158b3daa4d95a477f654577e2473f34dbfb21e5ba39dd89c0cfa90c8adeb = $this->env->getExtension("native_profiler");
        $__internal_fdc2158b3daa4d95a477f654577e2473f34dbfb21e5ba39dd89c0cfa90c8adeb->enter($__internal_fdc2158b3daa4d95a477f654577e2473f34dbfb21e5ba39dd89c0cfa90c8adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fdc2158b3daa4d95a477f654577e2473f34dbfb21e5ba39dd89c0cfa90c8adeb->leave($__internal_fdc2158b3daa4d95a477f654577e2473f34dbfb21e5ba39dd89c0cfa90c8adeb_prof);

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
