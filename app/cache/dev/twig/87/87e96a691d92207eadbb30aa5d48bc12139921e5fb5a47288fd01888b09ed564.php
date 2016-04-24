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
        $__internal_ecc9eb7bdafa24a8fcae92e02933ef23d8b000da68d05792904628cdb3a8c193 = $this->env->getExtension("native_profiler");
        $__internal_ecc9eb7bdafa24a8fcae92e02933ef23d8b000da68d05792904628cdb3a8c193->enter($__internal_ecc9eb7bdafa24a8fcae92e02933ef23d8b000da68d05792904628cdb3a8c193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ecc9eb7bdafa24a8fcae92e02933ef23d8b000da68d05792904628cdb3a8c193->leave($__internal_ecc9eb7bdafa24a8fcae92e02933ef23d8b000da68d05792904628cdb3a8c193_prof);

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
