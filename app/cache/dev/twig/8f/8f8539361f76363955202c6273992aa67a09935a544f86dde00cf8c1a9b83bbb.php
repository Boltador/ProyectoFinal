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
        $__internal_b0dba4ed35e6b28461c353d3ad6636be950cb5834b30085f589788f61ef8e78e = $this->env->getExtension("native_profiler");
        $__internal_b0dba4ed35e6b28461c353d3ad6636be950cb5834b30085f589788f61ef8e78e->enter($__internal_b0dba4ed35e6b28461c353d3ad6636be950cb5834b30085f589788f61ef8e78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0dba4ed35e6b28461c353d3ad6636be950cb5834b30085f589788f61ef8e78e->leave($__internal_b0dba4ed35e6b28461c353d3ad6636be950cb5834b30085f589788f61ef8e78e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f9cd570255629fed384214f6c9a059fcc88c2957abd8ab420b4dd8216472d2a = $this->env->getExtension("native_profiler");
        $__internal_3f9cd570255629fed384214f6c9a059fcc88c2957abd8ab420b4dd8216472d2a->enter($__internal_3f9cd570255629fed384214f6c9a059fcc88c2957abd8ab420b4dd8216472d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f9cd570255629fed384214f6c9a059fcc88c2957abd8ab420b4dd8216472d2a->leave($__internal_3f9cd570255629fed384214f6c9a059fcc88c2957abd8ab420b4dd8216472d2a_prof);

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
