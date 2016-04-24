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
        $__internal_3ae818d268704df74a907ac6f9dfd143f998c8a2e5f74ae2ae5cfa16986dd01d = $this->env->getExtension("native_profiler");
        $__internal_3ae818d268704df74a907ac6f9dfd143f998c8a2e5f74ae2ae5cfa16986dd01d->enter($__internal_3ae818d268704df74a907ac6f9dfd143f998c8a2e5f74ae2ae5cfa16986dd01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3ae818d268704df74a907ac6f9dfd143f998c8a2e5f74ae2ae5cfa16986dd01d->leave($__internal_3ae818d268704df74a907ac6f9dfd143f998c8a2e5f74ae2ae5cfa16986dd01d_prof);

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
