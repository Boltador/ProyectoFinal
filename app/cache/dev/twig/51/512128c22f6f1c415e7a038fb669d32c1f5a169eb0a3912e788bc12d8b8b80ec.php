<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_031693fb676e14ea6ac7bc2881dccac91d0d8a70f113a14a329cdcf9526a4873 extends Twig_Template
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
        $__internal_f58bb473b89e5d380c7a82634bd488409c579fab62c2bc9e9ef0296284777fa6 = $this->env->getExtension("native_profiler");
        $__internal_f58bb473b89e5d380c7a82634bd488409c579fab62c2bc9e9ef0296284777fa6->enter($__internal_f58bb473b89e5d380c7a82634bd488409c579fab62c2bc9e9ef0296284777fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f58bb473b89e5d380c7a82634bd488409c579fab62c2bc9e9ef0296284777fa6->leave($__internal_f58bb473b89e5d380c7a82634bd488409c579fab62c2bc9e9ef0296284777fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
