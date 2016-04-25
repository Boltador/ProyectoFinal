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
        $__internal_fb414d283fbedf1c20f26972fd8118a8fc8820d373c85c2d16fedf1ca0006ae3 = $this->env->getExtension("native_profiler");
        $__internal_fb414d283fbedf1c20f26972fd8118a8fc8820d373c85c2d16fedf1ca0006ae3->enter($__internal_fb414d283fbedf1c20f26972fd8118a8fc8820d373c85c2d16fedf1ca0006ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb414d283fbedf1c20f26972fd8118a8fc8820d373c85c2d16fedf1ca0006ae3->leave($__internal_fb414d283fbedf1c20f26972fd8118a8fc8820d373c85c2d16fedf1ca0006ae3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd44b56b228c8f1d71d7150bb821e9c8af6ae973ec23c11e259e860224a5b13c = $this->env->getExtension("native_profiler");
        $__internal_fd44b56b228c8f1d71d7150bb821e9c8af6ae973ec23c11e259e860224a5b13c->enter($__internal_fd44b56b228c8f1d71d7150bb821e9c8af6ae973ec23c11e259e860224a5b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fd44b56b228c8f1d71d7150bb821e9c8af6ae973ec23c11e259e860224a5b13c->leave($__internal_fd44b56b228c8f1d71d7150bb821e9c8af6ae973ec23c11e259e860224a5b13c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a46d18626cac4601cc8a53dd956304345621a9390a139a03266ee20b037d56a8 = $this->env->getExtension("native_profiler");
        $__internal_a46d18626cac4601cc8a53dd956304345621a9390a139a03266ee20b037d56a8->enter($__internal_a46d18626cac4601cc8a53dd956304345621a9390a139a03266ee20b037d56a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a46d18626cac4601cc8a53dd956304345621a9390a139a03266ee20b037d56a8->leave($__internal_a46d18626cac4601cc8a53dd956304345621a9390a139a03266ee20b037d56a8_prof);

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
