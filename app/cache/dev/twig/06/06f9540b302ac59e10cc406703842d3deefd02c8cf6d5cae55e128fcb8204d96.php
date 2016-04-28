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
        $__internal_8a7e31580faec3ad3354507fa04349416eb013fbf4f13aaa4bb5e7d4c2b8b69c = $this->env->getExtension("native_profiler");
        $__internal_8a7e31580faec3ad3354507fa04349416eb013fbf4f13aaa4bb5e7d4c2b8b69c->enter($__internal_8a7e31580faec3ad3354507fa04349416eb013fbf4f13aaa4bb5e7d4c2b8b69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7e31580faec3ad3354507fa04349416eb013fbf4f13aaa4bb5e7d4c2b8b69c->leave($__internal_8a7e31580faec3ad3354507fa04349416eb013fbf4f13aaa4bb5e7d4c2b8b69c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_542d5d4df3ff69b8ab35055bc45d8ec80940c733d229fbde643e7a6034390700 = $this->env->getExtension("native_profiler");
        $__internal_542d5d4df3ff69b8ab35055bc45d8ec80940c733d229fbde643e7a6034390700->enter($__internal_542d5d4df3ff69b8ab35055bc45d8ec80940c733d229fbde643e7a6034390700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_542d5d4df3ff69b8ab35055bc45d8ec80940c733d229fbde643e7a6034390700->leave($__internal_542d5d4df3ff69b8ab35055bc45d8ec80940c733d229fbde643e7a6034390700_prof);

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
