<?php

/* :grados:new.html.twig */
class __TwigTemplate_56fbe1c41187dc599f83550b7e2f18aa8938d0572ec96f6fa07db60abdb8811d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grados:new.html.twig", 1);
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
        $__internal_de8429e8d6cd0a8552ab2c2d6eaafd612adce83c35ea6cbd8f910f83260e4200 = $this->env->getExtension("native_profiler");
        $__internal_de8429e8d6cd0a8552ab2c2d6eaafd612adce83c35ea6cbd8f910f83260e4200->enter($__internal_de8429e8d6cd0a8552ab2c2d6eaafd612adce83c35ea6cbd8f910f83260e4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de8429e8d6cd0a8552ab2c2d6eaafd612adce83c35ea6cbd8f910f83260e4200->leave($__internal_de8429e8d6cd0a8552ab2c2d6eaafd612adce83c35ea6cbd8f910f83260e4200_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1694f31ec8ddc2b1d3dea67ecef8ef5f4794d6cecfbd6ff531bd6c8b2767fa4f = $this->env->getExtension("native_profiler");
        $__internal_1694f31ec8ddc2b1d3dea67ecef8ef5f4794d6cecfbd6ff531bd6c8b2767fa4f->enter($__internal_1694f31ec8ddc2b1d3dea67ecef8ef5f4794d6cecfbd6ff531bd6c8b2767fa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grados_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1694f31ec8ddc2b1d3dea67ecef8ef5f4794d6cecfbd6ff531bd6c8b2767fa4f->leave($__internal_1694f31ec8ddc2b1d3dea67ecef8ef5f4794d6cecfbd6ff531bd6c8b2767fa4f_prof);

    }

    public function getTemplateName()
    {
        return ":grados:new.html.twig";
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
/*     <h1>Grados creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
