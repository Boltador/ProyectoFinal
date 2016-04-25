<?php

/* docentes/new.html.twig */
class __TwigTemplate_ad2f83422b02b610eaead8a996cc3962b1d5bc203234c079dd3be76da5947110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "docentes/new.html.twig", 1);
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
        $__internal_0ac621b094560c6b09fa609a660d1fe73de02f3b95580a657584d25930382cf5 = $this->env->getExtension("native_profiler");
        $__internal_0ac621b094560c6b09fa609a660d1fe73de02f3b95580a657584d25930382cf5->enter($__internal_0ac621b094560c6b09fa609a660d1fe73de02f3b95580a657584d25930382cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ac621b094560c6b09fa609a660d1fe73de02f3b95580a657584d25930382cf5->leave($__internal_0ac621b094560c6b09fa609a660d1fe73de02f3b95580a657584d25930382cf5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f1e96a2d386075773fc33546f2538f8109f0a5826eae2146cc0bdf9cc89224 = $this->env->getExtension("native_profiler");
        $__internal_40f1e96a2d386075773fc33546f2538f8109f0a5826eae2146cc0bdf9cc89224->enter($__internal_40f1e96a2d386075773fc33546f2538f8109f0a5826eae2146cc0bdf9cc89224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("docentes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_40f1e96a2d386075773fc33546f2538f8109f0a5826eae2146cc0bdf9cc89224->leave($__internal_40f1e96a2d386075773fc33546f2538f8109f0a5826eae2146cc0bdf9cc89224_prof);

    }

    public function getTemplateName()
    {
        return "docentes/new.html.twig";
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
/*     <h1>Docentes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
