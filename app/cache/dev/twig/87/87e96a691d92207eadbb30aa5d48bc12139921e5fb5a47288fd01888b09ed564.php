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
        $__internal_204788422843d7992fc438f8e3164396d9c1295419e5f4fb6c0581c4f2266dfc = $this->env->getExtension("native_profiler");
        $__internal_204788422843d7992fc438f8e3164396d9c1295419e5f4fb6c0581c4f2266dfc->enter($__internal_204788422843d7992fc438f8e3164396d9c1295419e5f4fb6c0581c4f2266dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_204788422843d7992fc438f8e3164396d9c1295419e5f4fb6c0581c4f2266dfc->leave($__internal_204788422843d7992fc438f8e3164396d9c1295419e5f4fb6c0581c4f2266dfc_prof);

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
