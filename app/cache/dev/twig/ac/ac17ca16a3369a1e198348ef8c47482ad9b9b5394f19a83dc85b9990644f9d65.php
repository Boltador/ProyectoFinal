<?php

/* :periodos:new.html.twig */
class __TwigTemplate_34ecfd85c6b9fd5ae014a23c86ec39ce4f3c5a49ca6eb3bae394c60919ab3e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":periodos:new.html.twig", 1);
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
        $__internal_31dfae5189bced2d430ff4069b679dd5047f0397a789538d22c74aaf9b1524ea = $this->env->getExtension("native_profiler");
        $__internal_31dfae5189bced2d430ff4069b679dd5047f0397a789538d22c74aaf9b1524ea->enter($__internal_31dfae5189bced2d430ff4069b679dd5047f0397a789538d22c74aaf9b1524ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":periodos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31dfae5189bced2d430ff4069b679dd5047f0397a789538d22c74aaf9b1524ea->leave($__internal_31dfae5189bced2d430ff4069b679dd5047f0397a789538d22c74aaf9b1524ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d352e8e0562bab64f5627c8297d6596ea5dd926f5a2b74284cf9d0b2cb33768 = $this->env->getExtension("native_profiler");
        $__internal_6d352e8e0562bab64f5627c8297d6596ea5dd926f5a2b74284cf9d0b2cb33768->enter($__internal_6d352e8e0562bab64f5627c8297d6596ea5dd926f5a2b74284cf9d0b2cb33768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("periodos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6d352e8e0562bab64f5627c8297d6596ea5dd926f5a2b74284cf9d0b2cb33768->leave($__internal_6d352e8e0562bab64f5627c8297d6596ea5dd926f5a2b74284cf9d0b2cb33768_prof);

    }

    public function getTemplateName()
    {
        return ":periodos:new.html.twig";
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
/*     <h1>Periodos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
