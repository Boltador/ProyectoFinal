<?php

/* asignaciones/new.html.twig */
class __TwigTemplate_b6d3553c49cb539dbe1d19cb2317ed1b9379bbb4edb2dce5ee94330f56a0d7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaciones/new.html.twig", 1);
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
        $__internal_78d0266e027081709cf1730db1335e7ccb57baa0bcbed50de396ca2a386ce6a2 = $this->env->getExtension("native_profiler");
        $__internal_78d0266e027081709cf1730db1335e7ccb57baa0bcbed50de396ca2a386ce6a2->enter($__internal_78d0266e027081709cf1730db1335e7ccb57baa0bcbed50de396ca2a386ce6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaciones/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d0266e027081709cf1730db1335e7ccb57baa0bcbed50de396ca2a386ce6a2->leave($__internal_78d0266e027081709cf1730db1335e7ccb57baa0bcbed50de396ca2a386ce6a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a36cd86a254aef395fee024673e87e7b8bf75cbd540a11837138928b99421d = $this->env->getExtension("native_profiler");
        $__internal_b8a36cd86a254aef395fee024673e87e7b8bf75cbd540a11837138928b99421d->enter($__internal_b8a36cd86a254aef395fee024673e87e7b8bf75cbd540a11837138928b99421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones creation</h1>

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
        // line 14
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b8a36cd86a254aef395fee024673e87e7b8bf75cbd540a11837138928b99421d->leave($__internal_b8a36cd86a254aef395fee024673e87e7b8bf75cbd540a11837138928b99421d_prof);

    }

    public function getTemplateName()
    {
        return "asignaciones/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Asignaciones creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
