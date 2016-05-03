<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_233abcde23a1540ab88d9fe7a1a7683da408d612dfcdc4171af642eb2060dd16 extends Twig_Template
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
        $__internal_a4b7d8059e3c8f6d6ab295fd3a2fd5a13b9ca6018e7f92273d7898cdd451f88b = $this->env->getExtension("native_profiler");
        $__internal_a4b7d8059e3c8f6d6ab295fd3a2fd5a13b9ca6018e7f92273d7898cdd451f88b->enter($__internal_a4b7d8059e3c8f6d6ab295fd3a2fd5a13b9ca6018e7f92273d7898cdd451f88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a4b7d8059e3c8f6d6ab295fd3a2fd5a13b9ca6018e7f92273d7898cdd451f88b->leave($__internal_a4b7d8059e3c8f6d6ab295fd3a2fd5a13b9ca6018e7f92273d7898cdd451f88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
