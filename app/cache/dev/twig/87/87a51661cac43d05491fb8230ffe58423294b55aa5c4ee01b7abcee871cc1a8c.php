<?php

/* estudiantes/new.html.twig */
class __TwigTemplate_430cb9f99125df3ba288ba39fb70c27e1d014deb8ea75a2848a0ed711cd7d7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/new.html.twig", 1);
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
        $__internal_db8beb9dddc62832b97ac68f6b58b2021f7bdbfe61e5799d91c57966259e60cf = $this->env->getExtension("native_profiler");
        $__internal_db8beb9dddc62832b97ac68f6b58b2021f7bdbfe61e5799d91c57966259e60cf->enter($__internal_db8beb9dddc62832b97ac68f6b58b2021f7bdbfe61e5799d91c57966259e60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8beb9dddc62832b97ac68f6b58b2021f7bdbfe61e5799d91c57966259e60cf->leave($__internal_db8beb9dddc62832b97ac68f6b58b2021f7bdbfe61e5799d91c57966259e60cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25df4a094823af9981ea5415b7dd0043d43d35aaa9cb2ac9ef0004f1f40f3c43 = $this->env->getExtension("native_profiler");
        $__internal_25df4a094823af9981ea5415b7dd0043d43d35aaa9cb2ac9ef0004f1f40f3c43->enter($__internal_25df4a094823af9981ea5415b7dd0043d43d35aaa9cb2ac9ef0004f1f40f3c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_25df4a094823af9981ea5415b7dd0043d43d35aaa9cb2ac9ef0004f1f40f3c43->leave($__internal_25df4a094823af9981ea5415b7dd0043d43d35aaa9cb2ac9ef0004f1f40f3c43_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
