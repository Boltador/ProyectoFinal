<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4829515fcbc3c8c26db2efbdf04b4a137645262028e79b63d54e44e1fd8e9b6 extends Twig_Template
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
        $__internal_154d0954dd627df2e69536d4d3ce6e7d7c8ff1a2e55c1dd4ed9bc67b2e0a93c5 = $this->env->getExtension("native_profiler");
        $__internal_154d0954dd627df2e69536d4d3ce6e7d7c8ff1a2e55c1dd4ed9bc67b2e0a93c5->enter($__internal_154d0954dd627df2e69536d4d3ce6e7d7c8ff1a2e55c1dd4ed9bc67b2e0a93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_154d0954dd627df2e69536d4d3ce6e7d7c8ff1a2e55c1dd4ed9bc67b2e0a93c5->leave($__internal_154d0954dd627df2e69536d4d3ce6e7d7c8ff1a2e55c1dd4ed9bc67b2e0a93c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
