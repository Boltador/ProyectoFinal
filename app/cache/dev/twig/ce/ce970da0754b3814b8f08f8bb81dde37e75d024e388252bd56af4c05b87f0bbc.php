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
        $__internal_07a7a9463c7475f424bf4add4dbb7cb7aa6cad48e0c26960daed172af1acd8bc = $this->env->getExtension("native_profiler");
        $__internal_07a7a9463c7475f424bf4add4dbb7cb7aa6cad48e0c26960daed172af1acd8bc->enter($__internal_07a7a9463c7475f424bf4add4dbb7cb7aa6cad48e0c26960daed172af1acd8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a7a9463c7475f424bf4add4dbb7cb7aa6cad48e0c26960daed172af1acd8bc->leave($__internal_07a7a9463c7475f424bf4add4dbb7cb7aa6cad48e0c26960daed172af1acd8bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f20b47b6930eadd8aaad44c1732b80d98aea557303b3e9b8c216898006c47778 = $this->env->getExtension("native_profiler");
        $__internal_f20b47b6930eadd8aaad44c1732b80d98aea557303b3e9b8c216898006c47778->enter($__internal_f20b47b6930eadd8aaad44c1732b80d98aea557303b3e9b8c216898006c47778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f20b47b6930eadd8aaad44c1732b80d98aea557303b3e9b8c216898006c47778->leave($__internal_f20b47b6930eadd8aaad44c1732b80d98aea557303b3e9b8c216898006c47778_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a7634122069b0cc675f822473d3f3ccb18d107ef0426f129494c27d617f735d = $this->env->getExtension("native_profiler");
        $__internal_8a7634122069b0cc675f822473d3f3ccb18d107ef0426f129494c27d617f735d->enter($__internal_8a7634122069b0cc675f822473d3f3ccb18d107ef0426f129494c27d617f735d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a7634122069b0cc675f822473d3f3ccb18d107ef0426f129494c27d617f735d->leave($__internal_8a7634122069b0cc675f822473d3f3ccb18d107ef0426f129494c27d617f735d_prof);

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
