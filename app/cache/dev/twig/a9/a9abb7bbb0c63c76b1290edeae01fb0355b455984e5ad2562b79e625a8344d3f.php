<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_373334f2fa48f3ea4bfdc7a4e4f4c768fc1e0b790caca1e5428096ae95b61fae extends Twig_Template
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
        $__internal_93172753b2845b84df31ed42f98e9e93bab7ed761df91a4df2e452090a8c6a72 = $this->env->getExtension("native_profiler");
        $__internal_93172753b2845b84df31ed42f98e9e93bab7ed761df91a4df2e452090a8c6a72->enter($__internal_93172753b2845b84df31ed42f98e9e93bab7ed761df91a4df2e452090a8c6a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_93172753b2845b84df31ed42f98e9e93bab7ed761df91a4df2e452090a8c6a72->leave($__internal_93172753b2845b84df31ed42f98e9e93bab7ed761df91a4df2e452090a8c6a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
