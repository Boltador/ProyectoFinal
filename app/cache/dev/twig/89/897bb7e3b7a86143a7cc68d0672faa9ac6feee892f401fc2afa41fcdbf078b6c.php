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
        $__internal_69f4a89cf2f0d6410bbb8c190ea89d68a024e72041be1603af1d7cd5b3e8feee = $this->env->getExtension("native_profiler");
        $__internal_69f4a89cf2f0d6410bbb8c190ea89d68a024e72041be1603af1d7cd5b3e8feee->enter($__internal_69f4a89cf2f0d6410bbb8c190ea89d68a024e72041be1603af1d7cd5b3e8feee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f4a89cf2f0d6410bbb8c190ea89d68a024e72041be1603af1d7cd5b3e8feee->leave($__internal_69f4a89cf2f0d6410bbb8c190ea89d68a024e72041be1603af1d7cd5b3e8feee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e2f46b743184247c17f2b067f873b1894cc53c6243a74c64e4683002f4ba1b = $this->env->getExtension("native_profiler");
        $__internal_94e2f46b743184247c17f2b067f873b1894cc53c6243a74c64e4683002f4ba1b->enter($__internal_94e2f46b743184247c17f2b067f873b1894cc53c6243a74c64e4683002f4ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_94e2f46b743184247c17f2b067f873b1894cc53c6243a74c64e4683002f4ba1b->leave($__internal_94e2f46b743184247c17f2b067f873b1894cc53c6243a74c64e4683002f4ba1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e85aaf07c1754b2410b873c69f9135a77c8fc031326257c04178706e73a753b = $this->env->getExtension("native_profiler");
        $__internal_0e85aaf07c1754b2410b873c69f9135a77c8fc031326257c04178706e73a753b->enter($__internal_0e85aaf07c1754b2410b873c69f9135a77c8fc031326257c04178706e73a753b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e85aaf07c1754b2410b873c69f9135a77c8fc031326257c04178706e73a753b->leave($__internal_0e85aaf07c1754b2410b873c69f9135a77c8fc031326257c04178706e73a753b_prof);

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
