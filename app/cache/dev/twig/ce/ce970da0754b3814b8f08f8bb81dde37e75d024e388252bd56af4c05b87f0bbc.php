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
        $__internal_8b22686862c77d337e7a29fe40e706d4e692a95a197c2fda1f2ec09840d52a94 = $this->env->getExtension("native_profiler");
        $__internal_8b22686862c77d337e7a29fe40e706d4e692a95a197c2fda1f2ec09840d52a94->enter($__internal_8b22686862c77d337e7a29fe40e706d4e692a95a197c2fda1f2ec09840d52a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b22686862c77d337e7a29fe40e706d4e692a95a197c2fda1f2ec09840d52a94->leave($__internal_8b22686862c77d337e7a29fe40e706d4e692a95a197c2fda1f2ec09840d52a94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e39096bff15ffe50bf11434c751fb0ad6ef914f9427c5ff39abc8e6305901b = $this->env->getExtension("native_profiler");
        $__internal_f8e39096bff15ffe50bf11434c751fb0ad6ef914f9427c5ff39abc8e6305901b->enter($__internal_f8e39096bff15ffe50bf11434c751fb0ad6ef914f9427c5ff39abc8e6305901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f8e39096bff15ffe50bf11434c751fb0ad6ef914f9427c5ff39abc8e6305901b->leave($__internal_f8e39096bff15ffe50bf11434c751fb0ad6ef914f9427c5ff39abc8e6305901b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_305eb7eb825c3dabb56926715aaf61302049cfebc041f9d1b7feaf7bf9bc223c = $this->env->getExtension("native_profiler");
        $__internal_305eb7eb825c3dabb56926715aaf61302049cfebc041f9d1b7feaf7bf9bc223c->enter($__internal_305eb7eb825c3dabb56926715aaf61302049cfebc041f9d1b7feaf7bf9bc223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_305eb7eb825c3dabb56926715aaf61302049cfebc041f9d1b7feaf7bf9bc223c->leave($__internal_305eb7eb825c3dabb56926715aaf61302049cfebc041f9d1b7feaf7bf9bc223c_prof);

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
