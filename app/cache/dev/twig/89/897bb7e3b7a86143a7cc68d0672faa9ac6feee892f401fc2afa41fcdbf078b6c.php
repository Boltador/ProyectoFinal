<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4653752ba5cfaf81562fec53deb09068629d3b907efda74fec06686e818e1803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_df30d425a2ffc1272dc46cccbd00df22296e15eab19f71d0d237c91ea4bae306 = $this->env->getExtension("native_profiler");
        $__internal_df30d425a2ffc1272dc46cccbd00df22296e15eab19f71d0d237c91ea4bae306->enter($__internal_df30d425a2ffc1272dc46cccbd00df22296e15eab19f71d0d237c91ea4bae306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df30d425a2ffc1272dc46cccbd00df22296e15eab19f71d0d237c91ea4bae306->leave($__internal_df30d425a2ffc1272dc46cccbd00df22296e15eab19f71d0d237c91ea4bae306_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_181a109e0c02c2a70202df88e6c81b793fc0cd6ea87c40340725ebdbe29f6d6f = $this->env->getExtension("native_profiler");
        $__internal_181a109e0c02c2a70202df88e6c81b793fc0cd6ea87c40340725ebdbe29f6d6f->enter($__internal_181a109e0c02c2a70202df88e6c81b793fc0cd6ea87c40340725ebdbe29f6d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_181a109e0c02c2a70202df88e6c81b793fc0cd6ea87c40340725ebdbe29f6d6f->leave($__internal_181a109e0c02c2a70202df88e6c81b793fc0cd6ea87c40340725ebdbe29f6d6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30866a25964cbe838b517736edfc902a587765a27dbc6e58743face5c686a963 = $this->env->getExtension("native_profiler");
        $__internal_30866a25964cbe838b517736edfc902a587765a27dbc6e58743face5c686a963->enter($__internal_30866a25964cbe838b517736edfc902a587765a27dbc6e58743face5c686a963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30866a25964cbe838b517736edfc902a587765a27dbc6e58743face5c686a963->leave($__internal_30866a25964cbe838b517736edfc902a587765a27dbc6e58743face5c686a963_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
