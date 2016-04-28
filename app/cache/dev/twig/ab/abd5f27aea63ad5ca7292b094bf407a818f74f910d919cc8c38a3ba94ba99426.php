<?php

/* asignaturas/new.html.twig */
class __TwigTemplate_1b61d23b800c9e246287799ae9815aa1b56d164c858fceb26a178eb871048439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaturas/new.html.twig", 1);
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
        $__internal_f7f1615bf9e688983e9c3d56ea53f786c5c2effcf7f7188dde9282326464337d = $this->env->getExtension("native_profiler");
        $__internal_f7f1615bf9e688983e9c3d56ea53f786c5c2effcf7f7188dde9282326464337d->enter($__internal_f7f1615bf9e688983e9c3d56ea53f786c5c2effcf7f7188dde9282326464337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaturas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f1615bf9e688983e9c3d56ea53f786c5c2effcf7f7188dde9282326464337d->leave($__internal_f7f1615bf9e688983e9c3d56ea53f786c5c2effcf7f7188dde9282326464337d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0430a9a5cd6570955a99527e62d05b70b41305567e63410c3d4f922c7b5516b1 = $this->env->getExtension("native_profiler");
        $__internal_0430a9a5cd6570955a99527e62d05b70b41305567e63410c3d4f922c7b5516b1->enter($__internal_0430a9a5cd6570955a99527e62d05b70b41305567e63410c3d4f922c7b5516b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaturas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0430a9a5cd6570955a99527e62d05b70b41305567e63410c3d4f922c7b5516b1->leave($__internal_0430a9a5cd6570955a99527e62d05b70b41305567e63410c3d4f922c7b5516b1_prof);

    }

    public function getTemplateName()
    {
        return "asignaturas/new.html.twig";
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
/*     <h1>Asignaturas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
