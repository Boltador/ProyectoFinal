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
        $__internal_49ad23cc9e20d77a5228f476ae6f65a9773014b9b07ca00d42801c18d3802bc7 = $this->env->getExtension("native_profiler");
        $__internal_49ad23cc9e20d77a5228f476ae6f65a9773014b9b07ca00d42801c18d3802bc7->enter($__internal_49ad23cc9e20d77a5228f476ae6f65a9773014b9b07ca00d42801c18d3802bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_49ad23cc9e20d77a5228f476ae6f65a9773014b9b07ca00d42801c18d3802bc7->leave($__internal_49ad23cc9e20d77a5228f476ae6f65a9773014b9b07ca00d42801c18d3802bc7_prof);

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
