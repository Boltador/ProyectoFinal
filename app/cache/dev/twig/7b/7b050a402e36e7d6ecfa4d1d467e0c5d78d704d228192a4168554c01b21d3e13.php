<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_da4fdfb277465762ffc60ca6a5bc22ef959afc6845abf29fb608a0c556cdcab2 extends Twig_Template
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
        $__internal_b0d2377d3523e276d425f75fc2df6f39837b1304f803d4028a4d9c877aaff6ac = $this->env->getExtension("native_profiler");
        $__internal_b0d2377d3523e276d425f75fc2df6f39837b1304f803d4028a4d9c877aaff6ac->enter($__internal_b0d2377d3523e276d425f75fc2df6f39837b1304f803d4028a4d9c877aaff6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b0d2377d3523e276d425f75fc2df6f39837b1304f803d4028a4d9c877aaff6ac->leave($__internal_b0d2377d3523e276d425f75fc2df6f39837b1304f803d4028a4d9c877aaff6ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
