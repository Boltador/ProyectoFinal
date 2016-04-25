<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_001f1294b7ac6b0abbbcfd02923e8feef5099fc8774a2dafcb228444ba3741f1 extends Twig_Template
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
        $__internal_1bf7f23761d4bd36c1a904f806f589726eb97b69ed82987aa45c06d18d853f39 = $this->env->getExtension("native_profiler");
        $__internal_1bf7f23761d4bd36c1a904f806f589726eb97b69ed82987aa45c06d18d853f39->enter($__internal_1bf7f23761d4bd36c1a904f806f589726eb97b69ed82987aa45c06d18d853f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1bf7f23761d4bd36c1a904f806f589726eb97b69ed82987aa45c06d18d853f39->leave($__internal_1bf7f23761d4bd36c1a904f806f589726eb97b69ed82987aa45c06d18d853f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
