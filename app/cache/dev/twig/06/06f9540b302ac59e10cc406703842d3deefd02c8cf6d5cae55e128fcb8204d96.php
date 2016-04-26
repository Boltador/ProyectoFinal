<?php

/* estudiantes/edit.html.twig */
class __TwigTemplate_75c3e5e1065fc6ee746fd1ca1f6174d583422934b22486541f3e08e30bcc6d8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/edit.html.twig", 1);
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
        $__internal_44a878d0f9202599d751ab94b19900a2d9a9e8e386c09a12abc226d70e4e5515 = $this->env->getExtension("native_profiler");
        $__internal_44a878d0f9202599d751ab94b19900a2d9a9e8e386c09a12abc226d70e4e5515->enter($__internal_44a878d0f9202599d751ab94b19900a2d9a9e8e386c09a12abc226d70e4e5515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a878d0f9202599d751ab94b19900a2d9a9e8e386c09a12abc226d70e4e5515->leave($__internal_44a878d0f9202599d751ab94b19900a2d9a9e8e386c09a12abc226d70e4e5515_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11a61bf05e1e42b6f332900eb04202e28e0ee2428fed218bab6491b78dc32f8 = $this->env->getExtension("native_profiler");
        $__internal_a11a61bf05e1e42b6f332900eb04202e28e0ee2428fed218bab6491b78dc32f8->enter($__internal_a11a61bf05e1e42b6f332900eb04202e28e0ee2428fed218bab6491b78dc32f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
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
        
        $__internal_a11a61bf05e1e42b6f332900eb04202e28e0ee2428fed218bab6491b78dc32f8->leave($__internal_a11a61bf05e1e42b6f332900eb04202e28e0ee2428fed218bab6491b78dc32f8_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/edit.html.twig";
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
/*     <h1>Estudiantes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
