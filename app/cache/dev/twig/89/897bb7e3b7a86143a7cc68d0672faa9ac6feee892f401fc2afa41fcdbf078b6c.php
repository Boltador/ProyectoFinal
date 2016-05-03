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
        $__internal_7753217a4e731185765ac4a443cea279187a39afa031ca0e7a708ff6a2ac7d3e = $this->env->getExtension("native_profiler");
        $__internal_7753217a4e731185765ac4a443cea279187a39afa031ca0e7a708ff6a2ac7d3e->enter($__internal_7753217a4e731185765ac4a443cea279187a39afa031ca0e7a708ff6a2ac7d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7753217a4e731185765ac4a443cea279187a39afa031ca0e7a708ff6a2ac7d3e->leave($__internal_7753217a4e731185765ac4a443cea279187a39afa031ca0e7a708ff6a2ac7d3e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0617ebc426b888bbc15d2c232825491847eb72458fdad5bf146c48dd25f3276c = $this->env->getExtension("native_profiler");
        $__internal_0617ebc426b888bbc15d2c232825491847eb72458fdad5bf146c48dd25f3276c->enter($__internal_0617ebc426b888bbc15d2c232825491847eb72458fdad5bf146c48dd25f3276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0617ebc426b888bbc15d2c232825491847eb72458fdad5bf146c48dd25f3276c->leave($__internal_0617ebc426b888bbc15d2c232825491847eb72458fdad5bf146c48dd25f3276c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52f2980b7b3330e1caf13c4ce50eeeb9fd44beafe6f53a69eb22a06ed96f01c8 = $this->env->getExtension("native_profiler");
        $__internal_52f2980b7b3330e1caf13c4ce50eeeb9fd44beafe6f53a69eb22a06ed96f01c8->enter($__internal_52f2980b7b3330e1caf13c4ce50eeeb9fd44beafe6f53a69eb22a06ed96f01c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52f2980b7b3330e1caf13c4ce50eeeb9fd44beafe6f53a69eb22a06ed96f01c8->leave($__internal_52f2980b7b3330e1caf13c4ce50eeeb9fd44beafe6f53a69eb22a06ed96f01c8_prof);

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
