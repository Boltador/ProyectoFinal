<?php

/* acudientes/new.html.twig */
class __TwigTemplate_34b8803d2fc9e500fed37006125008d72ed4ff75bcacb6e8fb1118f84123d02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acudientes/new.html.twig", 1);
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
        $__internal_121946f8121952ad8809610b29176622569b395ee63e304a980d6d3c90f9f58d = $this->env->getExtension("native_profiler");
        $__internal_121946f8121952ad8809610b29176622569b395ee63e304a980d6d3c90f9f58d->enter($__internal_121946f8121952ad8809610b29176622569b395ee63e304a980d6d3c90f9f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121946f8121952ad8809610b29176622569b395ee63e304a980d6d3c90f9f58d->leave($__internal_121946f8121952ad8809610b29176622569b395ee63e304a980d6d3c90f9f58d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e6cf1dee2b993e656b4fac5f3285e5acbba170b487f68846bcef0b67e7df91 = $this->env->getExtension("native_profiler");
        $__internal_b6e6cf1dee2b993e656b4fac5f3285e5acbba170b487f68846bcef0b67e7df91->enter($__internal_b6e6cf1dee2b993e656b4fac5f3285e5acbba170b487f68846bcef0b67e7df91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b6e6cf1dee2b993e656b4fac5f3285e5acbba170b487f68846bcef0b67e7df91->leave($__internal_b6e6cf1dee2b993e656b4fac5f3285e5acbba170b487f68846bcef0b67e7df91_prof);

    }

    public function getTemplateName()
    {
        return "acudientes/new.html.twig";
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
/*     <h1>Acudientes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
