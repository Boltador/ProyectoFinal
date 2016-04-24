<?php

/* asignaturas/edit.html.twig */
class __TwigTemplate_192a88b86b9acf93c4793889f45584799fa2a0daefdf5919feea687b41c3acc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaturas/edit.html.twig", 1);
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
        $__internal_dde2042b0a9da00328d87720de5bd9c6a25904890afbe310f26e2bdedb9eb9fb = $this->env->getExtension("native_profiler");
        $__internal_dde2042b0a9da00328d87720de5bd9c6a25904890afbe310f26e2bdedb9eb9fb->enter($__internal_dde2042b0a9da00328d87720de5bd9c6a25904890afbe310f26e2bdedb9eb9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaturas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde2042b0a9da00328d87720de5bd9c6a25904890afbe310f26e2bdedb9eb9fb->leave($__internal_dde2042b0a9da00328d87720de5bd9c6a25904890afbe310f26e2bdedb9eb9fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b88b4060db039322e10497daebbb2869696c08a857601f79270031f7b42df428 = $this->env->getExtension("native_profiler");
        $__internal_b88b4060db039322e10497daebbb2869696c08a857601f79270031f7b42df428->enter($__internal_b88b4060db039322e10497daebbb2869696c08a857601f79270031f7b42df428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaturas_index");
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
        
        $__internal_b88b4060db039322e10497daebbb2869696c08a857601f79270031f7b42df428->leave($__internal_b88b4060db039322e10497daebbb2869696c08a857601f79270031f7b42df428_prof);

    }

    public function getTemplateName()
    {
        return "asignaturas/edit.html.twig";
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
/*     <h1>Asignaturas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
