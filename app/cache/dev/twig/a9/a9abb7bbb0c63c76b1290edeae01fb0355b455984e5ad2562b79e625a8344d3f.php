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
        $__internal_5c40209f253b99ce560ca2dbbc7c3e17b7e3c00beddb7ebc0551614b6b52b643 = $this->env->getExtension("native_profiler");
        $__internal_5c40209f253b99ce560ca2dbbc7c3e17b7e3c00beddb7ebc0551614b6b52b643->enter($__internal_5c40209f253b99ce560ca2dbbc7c3e17b7e3c00beddb7ebc0551614b6b52b643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5c40209f253b99ce560ca2dbbc7c3e17b7e3c00beddb7ebc0551614b6b52b643->leave($__internal_5c40209f253b99ce560ca2dbbc7c3e17b7e3c00beddb7ebc0551614b6b52b643_prof);

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
