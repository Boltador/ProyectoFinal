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
        $__internal_05b0839e8266ce75a4bf0838ec9b155a7d86ace51483a41e6722efd3ac5b6b3d = $this->env->getExtension("native_profiler");
        $__internal_05b0839e8266ce75a4bf0838ec9b155a7d86ace51483a41e6722efd3ac5b6b3d->enter($__internal_05b0839e8266ce75a4bf0838ec9b155a7d86ace51483a41e6722efd3ac5b6b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b0839e8266ce75a4bf0838ec9b155a7d86ace51483a41e6722efd3ac5b6b3d->leave($__internal_05b0839e8266ce75a4bf0838ec9b155a7d86ace51483a41e6722efd3ac5b6b3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_998cc563e1846b9fe78c6f8662c9ea1b4c30fe965357a69f9d98ee9b0cd92daa = $this->env->getExtension("native_profiler");
        $__internal_998cc563e1846b9fe78c6f8662c9ea1b4c30fe965357a69f9d98ee9b0cd92daa->enter($__internal_998cc563e1846b9fe78c6f8662c9ea1b4c30fe965357a69f9d98ee9b0cd92daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_998cc563e1846b9fe78c6f8662c9ea1b4c30fe965357a69f9d98ee9b0cd92daa->leave($__internal_998cc563e1846b9fe78c6f8662c9ea1b4c30fe965357a69f9d98ee9b0cd92daa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf6d5fc61ca66a138fba73a4436c710e10997d121016e802434bd14ee7388f2 = $this->env->getExtension("native_profiler");
        $__internal_5bf6d5fc61ca66a138fba73a4436c710e10997d121016e802434bd14ee7388f2->enter($__internal_5bf6d5fc61ca66a138fba73a4436c710e10997d121016e802434bd14ee7388f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5bf6d5fc61ca66a138fba73a4436c710e10997d121016e802434bd14ee7388f2->leave($__internal_5bf6d5fc61ca66a138fba73a4436c710e10997d121016e802434bd14ee7388f2_prof);

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
