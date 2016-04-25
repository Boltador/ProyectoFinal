<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_528926a9f53c8c48946bf6b0f1c5a69a783e9532d543778e429adf39448d079e extends Twig_Template
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
        $__internal_529df8768666280186a3cff104ff0fa47ba311ee79faa4d2fbf9272c62a56424 = $this->env->getExtension("native_profiler");
        $__internal_529df8768666280186a3cff104ff0fa47ba311ee79faa4d2fbf9272c62a56424->enter($__internal_529df8768666280186a3cff104ff0fa47ba311ee79faa4d2fbf9272c62a56424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_529df8768666280186a3cff104ff0fa47ba311ee79faa4d2fbf9272c62a56424->leave($__internal_529df8768666280186a3cff104ff0fa47ba311ee79faa4d2fbf9272c62a56424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
