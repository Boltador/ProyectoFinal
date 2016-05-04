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
        $__internal_8c6c3a840e61922268c7267f7d56571120732e24166164c38c1a6c1613d8a35b = $this->env->getExtension("native_profiler");
        $__internal_8c6c3a840e61922268c7267f7d56571120732e24166164c38c1a6c1613d8a35b->enter($__internal_8c6c3a840e61922268c7267f7d56571120732e24166164c38c1a6c1613d8a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8c6c3a840e61922268c7267f7d56571120732e24166164c38c1a6c1613d8a35b->leave($__internal_8c6c3a840e61922268c7267f7d56571120732e24166164c38c1a6c1613d8a35b_prof);

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
