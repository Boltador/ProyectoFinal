<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_031693fb676e14ea6ac7bc2881dccac91d0d8a70f113a14a329cdcf9526a4873 extends Twig_Template
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
        $__internal_4a8de94bd5b7686788df779d5c7df1a559fd782cf59e6aaa5ab1e7bce7921ded = $this->env->getExtension("native_profiler");
        $__internal_4a8de94bd5b7686788df779d5c7df1a559fd782cf59e6aaa5ab1e7bce7921ded->enter($__internal_4a8de94bd5b7686788df779d5c7df1a559fd782cf59e6aaa5ab1e7bce7921ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4a8de94bd5b7686788df779d5c7df1a559fd782cf59e6aaa5ab1e7bce7921ded->leave($__internal_4a8de94bd5b7686788df779d5c7df1a559fd782cf59e6aaa5ab1e7bce7921ded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
