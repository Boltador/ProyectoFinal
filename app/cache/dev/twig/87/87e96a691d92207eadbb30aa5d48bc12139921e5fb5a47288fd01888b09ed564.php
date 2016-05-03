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
        $__internal_0ed8cc577b88812e1a1119cede64f01747d61526f40034f78c47d3c77402338c = $this->env->getExtension("native_profiler");
        $__internal_0ed8cc577b88812e1a1119cede64f01747d61526f40034f78c47d3c77402338c->enter($__internal_0ed8cc577b88812e1a1119cede64f01747d61526f40034f78c47d3c77402338c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0ed8cc577b88812e1a1119cede64f01747d61526f40034f78c47d3c77402338c->leave($__internal_0ed8cc577b88812e1a1119cede64f01747d61526f40034f78c47d3c77402338c_prof);

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
