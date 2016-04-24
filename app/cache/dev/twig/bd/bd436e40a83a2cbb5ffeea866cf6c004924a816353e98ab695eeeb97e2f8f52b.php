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
        $__internal_9505dc26e6616815328442de454ae38ce0691b243034d959c31080fe49a892cc = $this->env->getExtension("native_profiler");
        $__internal_9505dc26e6616815328442de454ae38ce0691b243034d959c31080fe49a892cc->enter($__internal_9505dc26e6616815328442de454ae38ce0691b243034d959c31080fe49a892cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaciones/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9505dc26e6616815328442de454ae38ce0691b243034d959c31080fe49a892cc->leave($__internal_9505dc26e6616815328442de454ae38ce0691b243034d959c31080fe49a892cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdc43600d03bc4947f6177e5cebd213340fc1d5748fa78d0f053de275f9ac6cb = $this->env->getExtension("native_profiler");
        $__internal_bdc43600d03bc4947f6177e5cebd213340fc1d5748fa78d0f053de275f9ac6cb->enter($__internal_bdc43600d03bc4947f6177e5cebd213340fc1d5748fa78d0f053de275f9ac6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bdc43600d03bc4947f6177e5cebd213340fc1d5748fa78d0f053de275f9ac6cb->leave($__internal_bdc43600d03bc4947f6177e5cebd213340fc1d5748fa78d0f053de275f9ac6cb_prof);

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
