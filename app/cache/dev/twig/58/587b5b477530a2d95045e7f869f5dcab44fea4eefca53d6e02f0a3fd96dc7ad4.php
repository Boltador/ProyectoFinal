<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_37b89a9a3e1c3629f7df90ac435ba282f228fb0feab00583debb61acc309fab3 extends Twig_Template
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
        $__internal_4ff47e9eafdf53d44b460625a3cb53e3a312da6c10eba3b990955b6666d81a8a = $this->env->getExtension("native_profiler");
        $__internal_4ff47e9eafdf53d44b460625a3cb53e3a312da6c10eba3b990955b6666d81a8a->enter($__internal_4ff47e9eafdf53d44b460625a3cb53e3a312da6c10eba3b990955b6666d81a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4ff47e9eafdf53d44b460625a3cb53e3a312da6c10eba3b990955b6666d81a8a->leave($__internal_4ff47e9eafdf53d44b460625a3cb53e3a312da6c10eba3b990955b6666d81a8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
