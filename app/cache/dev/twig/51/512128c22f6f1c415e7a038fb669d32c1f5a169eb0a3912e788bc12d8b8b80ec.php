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
        $__internal_6916d351f328c23ae9404b1ad0e5da3c3566bff0738b4ea2b2aac9efa21a0969 = $this->env->getExtension("native_profiler");
        $__internal_6916d351f328c23ae9404b1ad0e5da3c3566bff0738b4ea2b2aac9efa21a0969->enter($__internal_6916d351f328c23ae9404b1ad0e5da3c3566bff0738b4ea2b2aac9efa21a0969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6916d351f328c23ae9404b1ad0e5da3c3566bff0738b4ea2b2aac9efa21a0969->leave($__internal_6916d351f328c23ae9404b1ad0e5da3c3566bff0738b4ea2b2aac9efa21a0969_prof);

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
