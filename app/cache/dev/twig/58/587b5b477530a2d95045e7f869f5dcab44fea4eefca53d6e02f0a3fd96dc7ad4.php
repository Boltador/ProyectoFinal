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
        $__internal_bdde20c81e78489e1822ac4d71c8e6839ff6a661cbcaf9259ce0d925b3a212b1 = $this->env->getExtension("native_profiler");
        $__internal_bdde20c81e78489e1822ac4d71c8e6839ff6a661cbcaf9259ce0d925b3a212b1->enter($__internal_bdde20c81e78489e1822ac4d71c8e6839ff6a661cbcaf9259ce0d925b3a212b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bdde20c81e78489e1822ac4d71c8e6839ff6a661cbcaf9259ce0d925b3a212b1->leave($__internal_bdde20c81e78489e1822ac4d71c8e6839ff6a661cbcaf9259ce0d925b3a212b1_prof);

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
