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
        $__internal_cdc4c3bc88b4875a098c5acdb4cfefa2211de78500ca81d2198d9e60422e1680 = $this->env->getExtension("native_profiler");
        $__internal_cdc4c3bc88b4875a098c5acdb4cfefa2211de78500ca81d2198d9e60422e1680->enter($__internal_cdc4c3bc88b4875a098c5acdb4cfefa2211de78500ca81d2198d9e60422e1680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":periodos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc4c3bc88b4875a098c5acdb4cfefa2211de78500ca81d2198d9e60422e1680->leave($__internal_cdc4c3bc88b4875a098c5acdb4cfefa2211de78500ca81d2198d9e60422e1680_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_414402532f4060d9fe0ccdc867888d3f9e6da42cf2767c2fb067a0f7847523bc = $this->env->getExtension("native_profiler");
        $__internal_414402532f4060d9fe0ccdc867888d3f9e6da42cf2767c2fb067a0f7847523bc->enter($__internal_414402532f4060d9fe0ccdc867888d3f9e6da42cf2767c2fb067a0f7847523bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_414402532f4060d9fe0ccdc867888d3f9e6da42cf2767c2fb067a0f7847523bc->leave($__internal_414402532f4060d9fe0ccdc867888d3f9e6da42cf2767c2fb067a0f7847523bc_prof);

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
