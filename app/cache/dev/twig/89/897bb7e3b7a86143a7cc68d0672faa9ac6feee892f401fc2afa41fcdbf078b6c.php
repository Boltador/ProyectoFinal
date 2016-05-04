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
        $__internal_7d672e99385e71624526b58eaff720068363b003242702912fa71182661543b1 = $this->env->getExtension("native_profiler");
        $__internal_7d672e99385e71624526b58eaff720068363b003242702912fa71182661543b1->enter($__internal_7d672e99385e71624526b58eaff720068363b003242702912fa71182661543b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d672e99385e71624526b58eaff720068363b003242702912fa71182661543b1->leave($__internal_7d672e99385e71624526b58eaff720068363b003242702912fa71182661543b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d8015b1cda123aee6e7fac5e397c5cdd0ee24f44641ed256948414ae9653941 = $this->env->getExtension("native_profiler");
        $__internal_0d8015b1cda123aee6e7fac5e397c5cdd0ee24f44641ed256948414ae9653941->enter($__internal_0d8015b1cda123aee6e7fac5e397c5cdd0ee24f44641ed256948414ae9653941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d8015b1cda123aee6e7fac5e397c5cdd0ee24f44641ed256948414ae9653941->leave($__internal_0d8015b1cda123aee6e7fac5e397c5cdd0ee24f44641ed256948414ae9653941_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac07b26e951327ee9175a745025717750e978643a144a9500ee6a6bff4d3baa9 = $this->env->getExtension("native_profiler");
        $__internal_ac07b26e951327ee9175a745025717750e978643a144a9500ee6a6bff4d3baa9->enter($__internal_ac07b26e951327ee9175a745025717750e978643a144a9500ee6a6bff4d3baa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac07b26e951327ee9175a745025717750e978643a144a9500ee6a6bff4d3baa9->leave($__internal_ac07b26e951327ee9175a745025717750e978643a144a9500ee6a6bff4d3baa9_prof);

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
