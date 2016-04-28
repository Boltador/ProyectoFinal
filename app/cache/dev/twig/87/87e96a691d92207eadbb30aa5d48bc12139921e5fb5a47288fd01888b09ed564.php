<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1a7382c623046635ca5b21dea57dc204d6d1610d2b11185c4e60804983722a88 extends Twig_Template
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
        $__internal_be774fef234f9b08dcd3f7e78230f794ad55be1fad3b294f14e2d665f75f043d = $this->env->getExtension("native_profiler");
        $__internal_be774fef234f9b08dcd3f7e78230f794ad55be1fad3b294f14e2d665f75f043d->enter($__internal_be774fef234f9b08dcd3f7e78230f794ad55be1fad3b294f14e2d665f75f043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_be774fef234f9b08dcd3f7e78230f794ad55be1fad3b294f14e2d665f75f043d->leave($__internal_be774fef234f9b08dcd3f7e78230f794ad55be1fad3b294f14e2d665f75f043d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
