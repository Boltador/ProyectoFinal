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
        $__internal_6c1d6bb92984c2a27dee6c6eea945b478f6b0055c76679884ed4c4f86c132ac9 = $this->env->getExtension("native_profiler");
        $__internal_6c1d6bb92984c2a27dee6c6eea945b478f6b0055c76679884ed4c4f86c132ac9->enter($__internal_6c1d6bb92984c2a27dee6c6eea945b478f6b0055c76679884ed4c4f86c132ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1d6bb92984c2a27dee6c6eea945b478f6b0055c76679884ed4c4f86c132ac9->leave($__internal_6c1d6bb92984c2a27dee6c6eea945b478f6b0055c76679884ed4c4f86c132ac9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6966578bae4dce36560f52f23ed0d4e3356ebbaf3f03128a302c5fc5b7043f63 = $this->env->getExtension("native_profiler");
        $__internal_6966578bae4dce36560f52f23ed0d4e3356ebbaf3f03128a302c5fc5b7043f63->enter($__internal_6966578bae4dce36560f52f23ed0d4e3356ebbaf3f03128a302c5fc5b7043f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6966578bae4dce36560f52f23ed0d4e3356ebbaf3f03128a302c5fc5b7043f63->leave($__internal_6966578bae4dce36560f52f23ed0d4e3356ebbaf3f03128a302c5fc5b7043f63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12fb25feaee8b6c7b94e85871545c89abfc69eb790988309dedb377a005078cd = $this->env->getExtension("native_profiler");
        $__internal_12fb25feaee8b6c7b94e85871545c89abfc69eb790988309dedb377a005078cd->enter($__internal_12fb25feaee8b6c7b94e85871545c89abfc69eb790988309dedb377a005078cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12fb25feaee8b6c7b94e85871545c89abfc69eb790988309dedb377a005078cd->leave($__internal_12fb25feaee8b6c7b94e85871545c89abfc69eb790988309dedb377a005078cd_prof);

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
