<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_373334f2fa48f3ea4bfdc7a4e4f4c768fc1e0b790caca1e5428096ae95b61fae extends Twig_Template
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
        $__internal_6ae96cb91a7757009beaad23b3b1ee96ec11ae1003538a79eb6f91d4ca51c52b = $this->env->getExtension("native_profiler");
        $__internal_6ae96cb91a7757009beaad23b3b1ee96ec11ae1003538a79eb6f91d4ca51c52b->enter($__internal_6ae96cb91a7757009beaad23b3b1ee96ec11ae1003538a79eb6f91d4ca51c52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6ae96cb91a7757009beaad23b3b1ee96ec11ae1003538a79eb6f91d4ca51c52b->leave($__internal_6ae96cb91a7757009beaad23b3b1ee96ec11ae1003538a79eb6f91d4ca51c52b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
