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
        $__internal_0967ec8c8fc1021db80196e6260f8bbaa5cfbd1956ab51a079062eb1e8b4348d = $this->env->getExtension("native_profiler");
        $__internal_0967ec8c8fc1021db80196e6260f8bbaa5cfbd1956ab51a079062eb1e8b4348d->enter($__internal_0967ec8c8fc1021db80196e6260f8bbaa5cfbd1956ab51a079062eb1e8b4348d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0967ec8c8fc1021db80196e6260f8bbaa5cfbd1956ab51a079062eb1e8b4348d->leave($__internal_0967ec8c8fc1021db80196e6260f8bbaa5cfbd1956ab51a079062eb1e8b4348d_prof);

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
