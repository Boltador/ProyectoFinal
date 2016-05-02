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
        $__internal_b398cf71c51d7798684df9a250d73b42557250315769ffc3e0e82d525ca2c2b8 = $this->env->getExtension("native_profiler");
        $__internal_b398cf71c51d7798684df9a250d73b42557250315769ffc3e0e82d525ca2c2b8->enter($__internal_b398cf71c51d7798684df9a250d73b42557250315769ffc3e0e82d525ca2c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b398cf71c51d7798684df9a250d73b42557250315769ffc3e0e82d525ca2c2b8->leave($__internal_b398cf71c51d7798684df9a250d73b42557250315769ffc3e0e82d525ca2c2b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9890e31d6e0889f3896547fbe0759e93d3eddd7253a185b5d72313c197e0869 = $this->env->getExtension("native_profiler");
        $__internal_c9890e31d6e0889f3896547fbe0759e93d3eddd7253a185b5d72313c197e0869->enter($__internal_c9890e31d6e0889f3896547fbe0759e93d3eddd7253a185b5d72313c197e0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9890e31d6e0889f3896547fbe0759e93d3eddd7253a185b5d72313c197e0869->leave($__internal_c9890e31d6e0889f3896547fbe0759e93d3eddd7253a185b5d72313c197e0869_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e97747d0342a7cb9a57d5a94bc3f7d5058c65ac7a8859320bb1c9752ac88805 = $this->env->getExtension("native_profiler");
        $__internal_8e97747d0342a7cb9a57d5a94bc3f7d5058c65ac7a8859320bb1c9752ac88805->enter($__internal_8e97747d0342a7cb9a57d5a94bc3f7d5058c65ac7a8859320bb1c9752ac88805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e97747d0342a7cb9a57d5a94bc3f7d5058c65ac7a8859320bb1c9752ac88805->leave($__internal_8e97747d0342a7cb9a57d5a94bc3f7d5058c65ac7a8859320bb1c9752ac88805_prof);

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
