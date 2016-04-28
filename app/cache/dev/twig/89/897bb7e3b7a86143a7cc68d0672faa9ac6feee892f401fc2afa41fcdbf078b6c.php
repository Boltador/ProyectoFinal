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
        $__internal_524de21935b9b74e896f81efff3e6eabd43c1e4672913bb043c75c3ff1a2acc2 = $this->env->getExtension("native_profiler");
        $__internal_524de21935b9b74e896f81efff3e6eabd43c1e4672913bb043c75c3ff1a2acc2->enter($__internal_524de21935b9b74e896f81efff3e6eabd43c1e4672913bb043c75c3ff1a2acc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524de21935b9b74e896f81efff3e6eabd43c1e4672913bb043c75c3ff1a2acc2->leave($__internal_524de21935b9b74e896f81efff3e6eabd43c1e4672913bb043c75c3ff1a2acc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e1d948cfaaaabb868803364f3f3244e14b12938e0abf83bafc8c059ccc13478 = $this->env->getExtension("native_profiler");
        $__internal_9e1d948cfaaaabb868803364f3f3244e14b12938e0abf83bafc8c059ccc13478->enter($__internal_9e1d948cfaaaabb868803364f3f3244e14b12938e0abf83bafc8c059ccc13478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9e1d948cfaaaabb868803364f3f3244e14b12938e0abf83bafc8c059ccc13478->leave($__internal_9e1d948cfaaaabb868803364f3f3244e14b12938e0abf83bafc8c059ccc13478_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b3d42229e00c6868674c27a9522e10e8d97648197b7a3eca0b04342b4c86a14 = $this->env->getExtension("native_profiler");
        $__internal_6b3d42229e00c6868674c27a9522e10e8d97648197b7a3eca0b04342b4c86a14->enter($__internal_6b3d42229e00c6868674c27a9522e10e8d97648197b7a3eca0b04342b4c86a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b3d42229e00c6868674c27a9522e10e8d97648197b7a3eca0b04342b4c86a14->leave($__internal_6b3d42229e00c6868674c27a9522e10e8d97648197b7a3eca0b04342b4c86a14_prof);

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
