<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b56b5fee7109cfaeecbbfaf1fe985b3485f508de6be509da446e05349daa0e23 extends Twig_Template
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
        $__internal_88aef6fc47e4907fbd709fd9c25e3efa71f62df1081ef3a0d425b38a4d10c8fe = $this->env->getExtension("native_profiler");
        $__internal_88aef6fc47e4907fbd709fd9c25e3efa71f62df1081ef3a0d425b38a4d10c8fe->enter($__internal_88aef6fc47e4907fbd709fd9c25e3efa71f62df1081ef3a0d425b38a4d10c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_88aef6fc47e4907fbd709fd9c25e3efa71f62df1081ef3a0d425b38a4d10c8fe->leave($__internal_88aef6fc47e4907fbd709fd9c25e3efa71f62df1081ef3a0d425b38a4d10c8fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
