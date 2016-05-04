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
        $__internal_26b8e6ba3fa224b15c2aacaaae643d898602abefd50d631d45a5e90dde2df915 = $this->env->getExtension("native_profiler");
        $__internal_26b8e6ba3fa224b15c2aacaaae643d898602abefd50d631d45a5e90dde2df915->enter($__internal_26b8e6ba3fa224b15c2aacaaae643d898602abefd50d631d45a5e90dde2df915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26b8e6ba3fa224b15c2aacaaae643d898602abefd50d631d45a5e90dde2df915->leave($__internal_26b8e6ba3fa224b15c2aacaaae643d898602abefd50d631d45a5e90dde2df915_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e84e0ebb4844045e6d0fbbb7a1445ca22c8a057a3753625032bd83ba759c3266 = $this->env->getExtension("native_profiler");
        $__internal_e84e0ebb4844045e6d0fbbb7a1445ca22c8a057a3753625032bd83ba759c3266->enter($__internal_e84e0ebb4844045e6d0fbbb7a1445ca22c8a057a3753625032bd83ba759c3266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e84e0ebb4844045e6d0fbbb7a1445ca22c8a057a3753625032bd83ba759c3266->leave($__internal_e84e0ebb4844045e6d0fbbb7a1445ca22c8a057a3753625032bd83ba759c3266_prof);

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
