<?php

/* :matriculas:new.html.twig */
class __TwigTemplate_c74ab37c0e0030d29fb35b5d9811a33a45b3451f05c5a1020a2eb28f9085107f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:new.html.twig", 1);
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
        $__internal_48a5aa3c4c8edea2aea2300fa1da170960a9516ba4c3fecf0461dc95622a2f55 = $this->env->getExtension("native_profiler");
        $__internal_48a5aa3c4c8edea2aea2300fa1da170960a9516ba4c3fecf0461dc95622a2f55->enter($__internal_48a5aa3c4c8edea2aea2300fa1da170960a9516ba4c3fecf0461dc95622a2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a5aa3c4c8edea2aea2300fa1da170960a9516ba4c3fecf0461dc95622a2f55->leave($__internal_48a5aa3c4c8edea2aea2300fa1da170960a9516ba4c3fecf0461dc95622a2f55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9bd437727837e82a11596a7ae0d68db04aeebf2814ffa33edd69dbad5b3abd2 = $this->env->getExtension("native_profiler");
        $__internal_c9bd437727837e82a11596a7ae0d68db04aeebf2814ffa33edd69dbad5b3abd2->enter($__internal_c9bd437727837e82a11596a7ae0d68db04aeebf2814ffa33edd69dbad5b3abd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c9bd437727837e82a11596a7ae0d68db04aeebf2814ffa33edd69dbad5b3abd2->leave($__internal_c9bd437727837e82a11596a7ae0d68db04aeebf2814ffa33edd69dbad5b3abd2_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:new.html.twig";
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
/*     <h1>Matriculas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
