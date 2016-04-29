<?php

/* planeadores/new.html.twig */
class __TwigTemplate_b92bbf76dba7b3f0cf4e5d8764be9a30d66d19972af2a33da4338afc03ef8ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/new.html.twig", 1);
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
        $__internal_51b7edaf01a61f6ed87fa1fce428f4ecd3efd1826f22614ca379859caef9dbb4 = $this->env->getExtension("native_profiler");
        $__internal_51b7edaf01a61f6ed87fa1fce428f4ecd3efd1826f22614ca379859caef9dbb4->enter($__internal_51b7edaf01a61f6ed87fa1fce428f4ecd3efd1826f22614ca379859caef9dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b7edaf01a61f6ed87fa1fce428f4ecd3efd1826f22614ca379859caef9dbb4->leave($__internal_51b7edaf01a61f6ed87fa1fce428f4ecd3efd1826f22614ca379859caef9dbb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa274e1cfdcb2024f89b25e825bd9c943e894a4877b15208e7d7e4c66973205a = $this->env->getExtension("native_profiler");
        $__internal_fa274e1cfdcb2024f89b25e825bd9c943e894a4877b15208e7d7e4c66973205a->enter($__internal_fa274e1cfdcb2024f89b25e825bd9c943e894a4877b15208e7d7e4c66973205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fa274e1cfdcb2024f89b25e825bd9c943e894a4877b15208e7d7e4c66973205a->leave($__internal_fa274e1cfdcb2024f89b25e825bd9c943e894a4877b15208e7d7e4c66973205a_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/new.html.twig";
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
/*     <h1>Planeadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
