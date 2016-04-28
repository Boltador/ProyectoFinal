<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0b224a33b79ce05c36ebd3ab5acd7504abad5f46f7cfb6ef89b6c4a929c5a2ca extends Twig_Template
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
        $__internal_546a6d14ef739aaf1f38ce25308870d60dd98974bbb7ad522dcbc14d682591be = $this->env->getExtension("native_profiler");
        $__internal_546a6d14ef739aaf1f38ce25308870d60dd98974bbb7ad522dcbc14d682591be->enter($__internal_546a6d14ef739aaf1f38ce25308870d60dd98974bbb7ad522dcbc14d682591be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_546a6d14ef739aaf1f38ce25308870d60dd98974bbb7ad522dcbc14d682591be->leave($__internal_546a6d14ef739aaf1f38ce25308870d60dd98974bbb7ad522dcbc14d682591be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
