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
        $__internal_2c63aff989b68c53fd23a1d7bcd0fec28ef39f7980d373a062a8221a1b10290e = $this->env->getExtension("native_profiler");
        $__internal_2c63aff989b68c53fd23a1d7bcd0fec28ef39f7980d373a062a8221a1b10290e->enter($__internal_2c63aff989b68c53fd23a1d7bcd0fec28ef39f7980d373a062a8221a1b10290e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c63aff989b68c53fd23a1d7bcd0fec28ef39f7980d373a062a8221a1b10290e->leave($__internal_2c63aff989b68c53fd23a1d7bcd0fec28ef39f7980d373a062a8221a1b10290e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c02141ed26ab1755449b569a9ff6ae0bb122260d005925112ed3f0a0c4e26b57 = $this->env->getExtension("native_profiler");
        $__internal_c02141ed26ab1755449b569a9ff6ae0bb122260d005925112ed3f0a0c4e26b57->enter($__internal_c02141ed26ab1755449b569a9ff6ae0bb122260d005925112ed3f0a0c4e26b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c02141ed26ab1755449b569a9ff6ae0bb122260d005925112ed3f0a0c4e26b57->leave($__internal_c02141ed26ab1755449b569a9ff6ae0bb122260d005925112ed3f0a0c4e26b57_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16de0d284dd10f4ee2748bde02a230f185b66fbb7fb0711cadec6de80a8ed0fd = $this->env->getExtension("native_profiler");
        $__internal_16de0d284dd10f4ee2748bde02a230f185b66fbb7fb0711cadec6de80a8ed0fd->enter($__internal_16de0d284dd10f4ee2748bde02a230f185b66fbb7fb0711cadec6de80a8ed0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16de0d284dd10f4ee2748bde02a230f185b66fbb7fb0711cadec6de80a8ed0fd->leave($__internal_16de0d284dd10f4ee2748bde02a230f185b66fbb7fb0711cadec6de80a8ed0fd_prof);

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
