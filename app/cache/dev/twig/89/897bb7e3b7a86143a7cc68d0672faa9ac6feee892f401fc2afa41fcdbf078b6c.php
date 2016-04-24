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
        $__internal_0e639d63ff93994a7e22b2a5223a5a73f6150928f060cf27c3f2e88b99973726 = $this->env->getExtension("native_profiler");
        $__internal_0e639d63ff93994a7e22b2a5223a5a73f6150928f060cf27c3f2e88b99973726->enter($__internal_0e639d63ff93994a7e22b2a5223a5a73f6150928f060cf27c3f2e88b99973726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e639d63ff93994a7e22b2a5223a5a73f6150928f060cf27c3f2e88b99973726->leave($__internal_0e639d63ff93994a7e22b2a5223a5a73f6150928f060cf27c3f2e88b99973726_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c910668b833297f9e202bcc480c4bd401f8db18c0771b5fb4bc868d0653ea3c6 = $this->env->getExtension("native_profiler");
        $__internal_c910668b833297f9e202bcc480c4bd401f8db18c0771b5fb4bc868d0653ea3c6->enter($__internal_c910668b833297f9e202bcc480c4bd401f8db18c0771b5fb4bc868d0653ea3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c910668b833297f9e202bcc480c4bd401f8db18c0771b5fb4bc868d0653ea3c6->leave($__internal_c910668b833297f9e202bcc480c4bd401f8db18c0771b5fb4bc868d0653ea3c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8604fbc8794a2516cfc7c3f88bd26b31dd11fb3ff13cb0ff5ea1509295f6d5d9 = $this->env->getExtension("native_profiler");
        $__internal_8604fbc8794a2516cfc7c3f88bd26b31dd11fb3ff13cb0ff5ea1509295f6d5d9->enter($__internal_8604fbc8794a2516cfc7c3f88bd26b31dd11fb3ff13cb0ff5ea1509295f6d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8604fbc8794a2516cfc7c3f88bd26b31dd11fb3ff13cb0ff5ea1509295f6d5d9->leave($__internal_8604fbc8794a2516cfc7c3f88bd26b31dd11fb3ff13cb0ff5ea1509295f6d5d9_prof);

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
