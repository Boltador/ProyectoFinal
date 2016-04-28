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
        $__internal_07d5b2463d6c556d6ee76b0877c0fcd106a84f31476260e2e6db7161836b0823 = $this->env->getExtension("native_profiler");
        $__internal_07d5b2463d6c556d6ee76b0877c0fcd106a84f31476260e2e6db7161836b0823->enter($__internal_07d5b2463d6c556d6ee76b0877c0fcd106a84f31476260e2e6db7161836b0823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_07d5b2463d6c556d6ee76b0877c0fcd106a84f31476260e2e6db7161836b0823->leave($__internal_07d5b2463d6c556d6ee76b0877c0fcd106a84f31476260e2e6db7161836b0823_prof);

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
