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
        $__internal_119ba5ccfe4f46158c1f3ded4d0dfcd9f51b1f1a7bc9f95765156bfa251f46a6 = $this->env->getExtension("native_profiler");
        $__internal_119ba5ccfe4f46158c1f3ded4d0dfcd9f51b1f1a7bc9f95765156bfa251f46a6->enter($__internal_119ba5ccfe4f46158c1f3ded4d0dfcd9f51b1f1a7bc9f95765156bfa251f46a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119ba5ccfe4f46158c1f3ded4d0dfcd9f51b1f1a7bc9f95765156bfa251f46a6->leave($__internal_119ba5ccfe4f46158c1f3ded4d0dfcd9f51b1f1a7bc9f95765156bfa251f46a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f2a009cf7afd7ed4966c4d6d4358314967c6c8c29cb140b515fe7391aeb6fe8 = $this->env->getExtension("native_profiler");
        $__internal_2f2a009cf7afd7ed4966c4d6d4358314967c6c8c29cb140b515fe7391aeb6fe8->enter($__internal_2f2a009cf7afd7ed4966c4d6d4358314967c6c8c29cb140b515fe7391aeb6fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f2a009cf7afd7ed4966c4d6d4358314967c6c8c29cb140b515fe7391aeb6fe8->leave($__internal_2f2a009cf7afd7ed4966c4d6d4358314967c6c8c29cb140b515fe7391aeb6fe8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_141012184b3de76f083cf881524138efc196b503a9ed8c71bbb8d2579c32daaa = $this->env->getExtension("native_profiler");
        $__internal_141012184b3de76f083cf881524138efc196b503a9ed8c71bbb8d2579c32daaa->enter($__internal_141012184b3de76f083cf881524138efc196b503a9ed8c71bbb8d2579c32daaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_141012184b3de76f083cf881524138efc196b503a9ed8c71bbb8d2579c32daaa->leave($__internal_141012184b3de76f083cf881524138efc196b503a9ed8c71bbb8d2579c32daaa_prof);

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
