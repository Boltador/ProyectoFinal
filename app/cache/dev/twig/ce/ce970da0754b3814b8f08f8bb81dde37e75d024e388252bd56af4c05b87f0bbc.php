<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6af1e5dd6ccb345b7ff7abd7935e4f85c583e891a964e77576ec8b929418f4b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8440c7159e033c9e036cf9568b7cd3c30018e3a5592f9d75bc10db9afde44bbe = $this->env->getExtension("native_profiler");
        $__internal_8440c7159e033c9e036cf9568b7cd3c30018e3a5592f9d75bc10db9afde44bbe->enter($__internal_8440c7159e033c9e036cf9568b7cd3c30018e3a5592f9d75bc10db9afde44bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8440c7159e033c9e036cf9568b7cd3c30018e3a5592f9d75bc10db9afde44bbe->leave($__internal_8440c7159e033c9e036cf9568b7cd3c30018e3a5592f9d75bc10db9afde44bbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1adc2aaafa2f713ea73aa50814085023541a35e54ffdfc7bfbbb90d9e7ddea53 = $this->env->getExtension("native_profiler");
        $__internal_1adc2aaafa2f713ea73aa50814085023541a35e54ffdfc7bfbbb90d9e7ddea53->enter($__internal_1adc2aaafa2f713ea73aa50814085023541a35e54ffdfc7bfbbb90d9e7ddea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1adc2aaafa2f713ea73aa50814085023541a35e54ffdfc7bfbbb90d9e7ddea53->leave($__internal_1adc2aaafa2f713ea73aa50814085023541a35e54ffdfc7bfbbb90d9e7ddea53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_edea47b272c915a401e751b388975a1ec5f5b12cd1f2a5ccca11be4c920e30ef = $this->env->getExtension("native_profiler");
        $__internal_edea47b272c915a401e751b388975a1ec5f5b12cd1f2a5ccca11be4c920e30ef->enter($__internal_edea47b272c915a401e751b388975a1ec5f5b12cd1f2a5ccca11be4c920e30ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_edea47b272c915a401e751b388975a1ec5f5b12cd1f2a5ccca11be4c920e30ef->leave($__internal_edea47b272c915a401e751b388975a1ec5f5b12cd1f2a5ccca11be4c920e30ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
