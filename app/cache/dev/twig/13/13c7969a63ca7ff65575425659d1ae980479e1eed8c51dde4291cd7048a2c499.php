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
        $__internal_93723fd4c6a6ebb00f00326b791679a173869475c164aa50dc2afaf3eeacdcea = $this->env->getExtension("native_profiler");
        $__internal_93723fd4c6a6ebb00f00326b791679a173869475c164aa50dc2afaf3eeacdcea->enter($__internal_93723fd4c6a6ebb00f00326b791679a173869475c164aa50dc2afaf3eeacdcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_93723fd4c6a6ebb00f00326b791679a173869475c164aa50dc2afaf3eeacdcea->leave($__internal_93723fd4c6a6ebb00f00326b791679a173869475c164aa50dc2afaf3eeacdcea_prof);

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
