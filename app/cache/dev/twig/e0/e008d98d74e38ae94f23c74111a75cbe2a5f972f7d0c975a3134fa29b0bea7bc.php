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
        $__internal_37eea65272da2ee5b211f7e66c23816814ae8cbf5afe342658875eefa9808a7c = $this->env->getExtension("native_profiler");
        $__internal_37eea65272da2ee5b211f7e66c23816814ae8cbf5afe342658875eefa9808a7c->enter($__internal_37eea65272da2ee5b211f7e66c23816814ae8cbf5afe342658875eefa9808a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37eea65272da2ee5b211f7e66c23816814ae8cbf5afe342658875eefa9808a7c->leave($__internal_37eea65272da2ee5b211f7e66c23816814ae8cbf5afe342658875eefa9808a7c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1035053e88a6fad6a38416b56e2da6d00e53eb5fa88a9f97515e1a25de4917 = $this->env->getExtension("native_profiler");
        $__internal_0a1035053e88a6fad6a38416b56e2da6d00e53eb5fa88a9f97515e1a25de4917->enter($__internal_0a1035053e88a6fad6a38416b56e2da6d00e53eb5fa88a9f97515e1a25de4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a1035053e88a6fad6a38416b56e2da6d00e53eb5fa88a9f97515e1a25de4917->leave($__internal_0a1035053e88a6fad6a38416b56e2da6d00e53eb5fa88a9f97515e1a25de4917_prof);

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
