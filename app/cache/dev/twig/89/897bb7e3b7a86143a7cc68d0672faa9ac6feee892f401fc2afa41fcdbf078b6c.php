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
        $__internal_b7d94454804cf86ef120399c41c33f9e12c9a465ecedea055c0f78bc9af0e3e5 = $this->env->getExtension("native_profiler");
        $__internal_b7d94454804cf86ef120399c41c33f9e12c9a465ecedea055c0f78bc9af0e3e5->enter($__internal_b7d94454804cf86ef120399c41c33f9e12c9a465ecedea055c0f78bc9af0e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d94454804cf86ef120399c41c33f9e12c9a465ecedea055c0f78bc9af0e3e5->leave($__internal_b7d94454804cf86ef120399c41c33f9e12c9a465ecedea055c0f78bc9af0e3e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05eb3606d748568d799c38e609ca8545ac14497c269c48b33c83fceb46c2a279 = $this->env->getExtension("native_profiler");
        $__internal_05eb3606d748568d799c38e609ca8545ac14497c269c48b33c83fceb46c2a279->enter($__internal_05eb3606d748568d799c38e609ca8545ac14497c269c48b33c83fceb46c2a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_05eb3606d748568d799c38e609ca8545ac14497c269c48b33c83fceb46c2a279->leave($__internal_05eb3606d748568d799c38e609ca8545ac14497c269c48b33c83fceb46c2a279_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_268905990f53a29d96bb5a2120b616fbfc89cb602e5eaaf51a38c59efa2539f4 = $this->env->getExtension("native_profiler");
        $__internal_268905990f53a29d96bb5a2120b616fbfc89cb602e5eaaf51a38c59efa2539f4->enter($__internal_268905990f53a29d96bb5a2120b616fbfc89cb602e5eaaf51a38c59efa2539f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_268905990f53a29d96bb5a2120b616fbfc89cb602e5eaaf51a38c59efa2539f4->leave($__internal_268905990f53a29d96bb5a2120b616fbfc89cb602e5eaaf51a38c59efa2539f4_prof);

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
