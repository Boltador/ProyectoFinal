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
        $__internal_bd0a464f3f30ddfc788f23bb76cf1f87f48230a08e5d7a5b60283d8e18161394 = $this->env->getExtension("native_profiler");
        $__internal_bd0a464f3f30ddfc788f23bb76cf1f87f48230a08e5d7a5b60283d8e18161394->enter($__internal_bd0a464f3f30ddfc788f23bb76cf1f87f48230a08e5d7a5b60283d8e18161394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bd0a464f3f30ddfc788f23bb76cf1f87f48230a08e5d7a5b60283d8e18161394->leave($__internal_bd0a464f3f30ddfc788f23bb76cf1f87f48230a08e5d7a5b60283d8e18161394_prof);

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
