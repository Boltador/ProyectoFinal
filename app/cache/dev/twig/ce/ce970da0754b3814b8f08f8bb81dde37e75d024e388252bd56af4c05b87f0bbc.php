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
        $__internal_262956fa25377165e409ef622a06943cc550ce4bba34a02a0a6cae325a66dd6d = $this->env->getExtension("native_profiler");
        $__internal_262956fa25377165e409ef622a06943cc550ce4bba34a02a0a6cae325a66dd6d->enter($__internal_262956fa25377165e409ef622a06943cc550ce4bba34a02a0a6cae325a66dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262956fa25377165e409ef622a06943cc550ce4bba34a02a0a6cae325a66dd6d->leave($__internal_262956fa25377165e409ef622a06943cc550ce4bba34a02a0a6cae325a66dd6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_166f98306310a3fb6edc8951bdca6cd7b33a532bbbcbe32f192fa9bfce7afd32 = $this->env->getExtension("native_profiler");
        $__internal_166f98306310a3fb6edc8951bdca6cd7b33a532bbbcbe32f192fa9bfce7afd32->enter($__internal_166f98306310a3fb6edc8951bdca6cd7b33a532bbbcbe32f192fa9bfce7afd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_166f98306310a3fb6edc8951bdca6cd7b33a532bbbcbe32f192fa9bfce7afd32->leave($__internal_166f98306310a3fb6edc8951bdca6cd7b33a532bbbcbe32f192fa9bfce7afd32_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e599b09c24ce70068a4eb12647605308583bf60bbaeebbb3e594dd42bc550560 = $this->env->getExtension("native_profiler");
        $__internal_e599b09c24ce70068a4eb12647605308583bf60bbaeebbb3e594dd42bc550560->enter($__internal_e599b09c24ce70068a4eb12647605308583bf60bbaeebbb3e594dd42bc550560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e599b09c24ce70068a4eb12647605308583bf60bbaeebbb3e594dd42bc550560->leave($__internal_e599b09c24ce70068a4eb12647605308583bf60bbaeebbb3e594dd42bc550560_prof);

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
