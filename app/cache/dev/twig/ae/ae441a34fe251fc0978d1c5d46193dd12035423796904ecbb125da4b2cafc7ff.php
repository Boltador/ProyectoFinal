<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_62b0557f996d90dee88a146c437411820e28bc8eea4c4c464f4c407ceafc9910 extends Twig_Template
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
        $__internal_6badb0b3479c6b999ee8df9936fb58b5871a37fcbe1e60659c0890acd1e431b1 = $this->env->getExtension("native_profiler");
        $__internal_6badb0b3479c6b999ee8df9936fb58b5871a37fcbe1e60659c0890acd1e431b1->enter($__internal_6badb0b3479c6b999ee8df9936fb58b5871a37fcbe1e60659c0890acd1e431b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6badb0b3479c6b999ee8df9936fb58b5871a37fcbe1e60659c0890acd1e431b1->leave($__internal_6badb0b3479c6b999ee8df9936fb58b5871a37fcbe1e60659c0890acd1e431b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */