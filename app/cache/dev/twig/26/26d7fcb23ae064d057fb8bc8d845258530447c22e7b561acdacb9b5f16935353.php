<?php

/* :temas:edit.html.twig */
class __TwigTemplate_5c3e27597a7eea24c7c0fdd56edcafbd20ee62a01aaa5b526028379c055fc602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":temas:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e6f93c6c55c708e11fbdcf34520c28dc18c89f5484f02539209c58ebae4f83 = $this->env->getExtension("native_profiler");
        $__internal_26e6f93c6c55c708e11fbdcf34520c28dc18c89f5484f02539209c58ebae4f83->enter($__internal_26e6f93c6c55c708e11fbdcf34520c28dc18c89f5484f02539209c58ebae4f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e6f93c6c55c708e11fbdcf34520c28dc18c89f5484f02539209c58ebae4f83->leave($__internal_26e6f93c6c55c708e11fbdcf34520c28dc18c89f5484f02539209c58ebae4f83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5791a0dcd175d7f9fc11390b7c56ebfcf7ba7ef105357a52dbe58af7032e01 = $this->env->getExtension("native_profiler");
        $__internal_6e5791a0dcd175d7f9fc11390b7c56ebfcf7ba7ef105357a52dbe58af7032e01->enter($__internal_6e5791a0dcd175d7f9fc11390b7c56ebfcf7ba7ef105357a52dbe58af7032e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("temas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6e5791a0dcd175d7f9fc11390b7c56ebfcf7ba7ef105357a52dbe58af7032e01->leave($__internal_6e5791a0dcd175d7f9fc11390b7c56ebfcf7ba7ef105357a52dbe58af7032e01_prof);

    }

    public function getTemplateName()
    {
        return ":temas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Temas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
