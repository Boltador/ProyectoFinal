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
        $__internal_2d21e190cdee5a144e23c87fff5656e8672433abb26c9a86cc31b1de481f3482 = $this->env->getExtension("native_profiler");
        $__internal_2d21e190cdee5a144e23c87fff5656e8672433abb26c9a86cc31b1de481f3482->enter($__internal_2d21e190cdee5a144e23c87fff5656e8672433abb26c9a86cc31b1de481f3482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2d21e190cdee5a144e23c87fff5656e8672433abb26c9a86cc31b1de481f3482->leave($__internal_2d21e190cdee5a144e23c87fff5656e8672433abb26c9a86cc31b1de481f3482_prof);

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
