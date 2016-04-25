<?php

/* :estudiantes:edit.html.twig */
class __TwigTemplate_185cea0211f3f3a811903e08ea8f168b52a21bc5cea5db7abb5d46f639ef71c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estudiantes:edit.html.twig", 1);
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
        $__internal_a1f7bd94d70ae8924e3dae5ef411a5bc726578b5955187a1516fc2d437e42ad0 = $this->env->getExtension("native_profiler");
        $__internal_a1f7bd94d70ae8924e3dae5ef411a5bc726578b5955187a1516fc2d437e42ad0->enter($__internal_a1f7bd94d70ae8924e3dae5ef411a5bc726578b5955187a1516fc2d437e42ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f7bd94d70ae8924e3dae5ef411a5bc726578b5955187a1516fc2d437e42ad0->leave($__internal_a1f7bd94d70ae8924e3dae5ef411a5bc726578b5955187a1516fc2d437e42ad0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d49056148ad6fd06cd492d9080ab5f03bb1e5917c1f69a8666a10938c4c1744 = $this->env->getExtension("native_profiler");
        $__internal_1d49056148ad6fd06cd492d9080ab5f03bb1e5917c1f69a8666a10938c4c1744->enter($__internal_1d49056148ad6fd06cd492d9080ab5f03bb1e5917c1f69a8666a10938c4c1744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d49056148ad6fd06cd492d9080ab5f03bb1e5917c1f69a8666a10938c4c1744->leave($__internal_1d49056148ad6fd06cd492d9080ab5f03bb1e5917c1f69a8666a10938c4c1744_prof);

    }

    public function getTemplateName()
    {
        return ":estudiantes:edit.html.twig";
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
