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
        $__internal_55737db059a4d24cd7ef9f6c4511a1c3e27da1cad1a4c6d10efe1ee824c4923b = $this->env->getExtension("native_profiler");
        $__internal_55737db059a4d24cd7ef9f6c4511a1c3e27da1cad1a4c6d10efe1ee824c4923b->enter($__internal_55737db059a4d24cd7ef9f6c4511a1c3e27da1cad1a4c6d10efe1ee824c4923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55737db059a4d24cd7ef9f6c4511a1c3e27da1cad1a4c6d10efe1ee824c4923b->leave($__internal_55737db059a4d24cd7ef9f6c4511a1c3e27da1cad1a4c6d10efe1ee824c4923b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e80346375dceff4a671ecbab62d7dc4f1609bed8f6065c3a3f1eb8d9192dadd0 = $this->env->getExtension("native_profiler");
        $__internal_e80346375dceff4a671ecbab62d7dc4f1609bed8f6065c3a3f1eb8d9192dadd0->enter($__internal_e80346375dceff4a671ecbab62d7dc4f1609bed8f6065c3a3f1eb8d9192dadd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e80346375dceff4a671ecbab62d7dc4f1609bed8f6065c3a3f1eb8d9192dadd0->leave($__internal_e80346375dceff4a671ecbab62d7dc4f1609bed8f6065c3a3f1eb8d9192dadd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7053fd9e14283e3bf6f5ab8ec56f6caf657fdb12895bb68ab17422f716217901 = $this->env->getExtension("native_profiler");
        $__internal_7053fd9e14283e3bf6f5ab8ec56f6caf657fdb12895bb68ab17422f716217901->enter($__internal_7053fd9e14283e3bf6f5ab8ec56f6caf657fdb12895bb68ab17422f716217901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7053fd9e14283e3bf6f5ab8ec56f6caf657fdb12895bb68ab17422f716217901->leave($__internal_7053fd9e14283e3bf6f5ab8ec56f6caf657fdb12895bb68ab17422f716217901_prof);

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
