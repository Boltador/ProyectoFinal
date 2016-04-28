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
        $__internal_c0112e936e10891c00d547de92d049d482cb927eb68c610ae54a4e2e5eef2b6a = $this->env->getExtension("native_profiler");
        $__internal_c0112e936e10891c00d547de92d049d482cb927eb68c610ae54a4e2e5eef2b6a->enter($__internal_c0112e936e10891c00d547de92d049d482cb927eb68c610ae54a4e2e5eef2b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c0112e936e10891c00d547de92d049d482cb927eb68c610ae54a4e2e5eef2b6a->leave($__internal_c0112e936e10891c00d547de92d049d482cb927eb68c610ae54a4e2e5eef2b6a_prof);

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
