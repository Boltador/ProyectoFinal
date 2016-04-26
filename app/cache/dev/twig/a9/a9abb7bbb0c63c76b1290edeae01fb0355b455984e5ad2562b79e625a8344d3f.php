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
        $__internal_39ad93cd757297eac4d536192187ec3da760bf2d2dd75f09382190db9eed51d9 = $this->env->getExtension("native_profiler");
        $__internal_39ad93cd757297eac4d536192187ec3da760bf2d2dd75f09382190db9eed51d9->enter($__internal_39ad93cd757297eac4d536192187ec3da760bf2d2dd75f09382190db9eed51d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_39ad93cd757297eac4d536192187ec3da760bf2d2dd75f09382190db9eed51d9->leave($__internal_39ad93cd757297eac4d536192187ec3da760bf2d2dd75f09382190db9eed51d9_prof);

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
