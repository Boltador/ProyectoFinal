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
        $__internal_5053b8f00eae54fef9ea48ac70b2051b3e501b116841cb527713b535dbf3f5d7 = $this->env->getExtension("native_profiler");
        $__internal_5053b8f00eae54fef9ea48ac70b2051b3e501b116841cb527713b535dbf3f5d7->enter($__internal_5053b8f00eae54fef9ea48ac70b2051b3e501b116841cb527713b535dbf3f5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5053b8f00eae54fef9ea48ac70b2051b3e501b116841cb527713b535dbf3f5d7->leave($__internal_5053b8f00eae54fef9ea48ac70b2051b3e501b116841cb527713b535dbf3f5d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3677b2e6ca54f7f74b1a24935dcbbc881748312e8a7c6e916166d86cc27d53a2 = $this->env->getExtension("native_profiler");
        $__internal_3677b2e6ca54f7f74b1a24935dcbbc881748312e8a7c6e916166d86cc27d53a2->enter($__internal_3677b2e6ca54f7f74b1a24935dcbbc881748312e8a7c6e916166d86cc27d53a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3677b2e6ca54f7f74b1a24935dcbbc881748312e8a7c6e916166d86cc27d53a2->leave($__internal_3677b2e6ca54f7f74b1a24935dcbbc881748312e8a7c6e916166d86cc27d53a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff07138724e11c99724c4ff4ebf5e534c1567a9ce1f18822f811edf2cac84790 = $this->env->getExtension("native_profiler");
        $__internal_ff07138724e11c99724c4ff4ebf5e534c1567a9ce1f18822f811edf2cac84790->enter($__internal_ff07138724e11c99724c4ff4ebf5e534c1567a9ce1f18822f811edf2cac84790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff07138724e11c99724c4ff4ebf5e534c1567a9ce1f18822f811edf2cac84790->leave($__internal_ff07138724e11c99724c4ff4ebf5e534c1567a9ce1f18822f811edf2cac84790_prof);

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
