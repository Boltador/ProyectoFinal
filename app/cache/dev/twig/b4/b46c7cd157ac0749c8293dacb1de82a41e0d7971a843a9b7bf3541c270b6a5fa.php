<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4829515fcbc3c8c26db2efbdf04b4a137645262028e79b63d54e44e1fd8e9b6 extends Twig_Template
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
        $__internal_962a7e0fa2a359a575475ea75cde45cd58fdf3e79b95e7fea89bad8c2f1e344f = $this->env->getExtension("native_profiler");
        $__internal_962a7e0fa2a359a575475ea75cde45cd58fdf3e79b95e7fea89bad8c2f1e344f->enter($__internal_962a7e0fa2a359a575475ea75cde45cd58fdf3e79b95e7fea89bad8c2f1e344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_962a7e0fa2a359a575475ea75cde45cd58fdf3e79b95e7fea89bad8c2f1e344f->leave($__internal_962a7e0fa2a359a575475ea75cde45cd58fdf3e79b95e7fea89bad8c2f1e344f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
