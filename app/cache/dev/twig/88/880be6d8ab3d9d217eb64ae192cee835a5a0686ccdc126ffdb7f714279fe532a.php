<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f63bed8621000d0462c69d4c49e1bf46b5bd6f4562104295765b98cee9ec348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_409a4d369cbf1e0c1854f970ba44b503b57df002ac28d47991701d635cf9d615 = $this->env->getExtension("native_profiler");
        $__internal_409a4d369cbf1e0c1854f970ba44b503b57df002ac28d47991701d635cf9d615->enter($__internal_409a4d369cbf1e0c1854f970ba44b503b57df002ac28d47991701d635cf9d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_409a4d369cbf1e0c1854f970ba44b503b57df002ac28d47991701d635cf9d615->leave($__internal_409a4d369cbf1e0c1854f970ba44b503b57df002ac28d47991701d635cf9d615_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb46302c3b29be6864a3659c1d67fc3c9618c9efe3e7a5e89b9c1ddb7dfa7a20 = $this->env->getExtension("native_profiler");
        $__internal_bb46302c3b29be6864a3659c1d67fc3c9618c9efe3e7a5e89b9c1ddb7dfa7a20->enter($__internal_bb46302c3b29be6864a3659c1d67fc3c9618c9efe3e7a5e89b9c1ddb7dfa7a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb46302c3b29be6864a3659c1d67fc3c9618c9efe3e7a5e89b9c1ddb7dfa7a20->leave($__internal_bb46302c3b29be6864a3659c1d67fc3c9618c9efe3e7a5e89b9c1ddb7dfa7a20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8580c4cbb0b39a02f55ae14f977818624f7a410ef74ed94a5e51f6ba3aa1ce39 = $this->env->getExtension("native_profiler");
        $__internal_8580c4cbb0b39a02f55ae14f977818624f7a410ef74ed94a5e51f6ba3aa1ce39->enter($__internal_8580c4cbb0b39a02f55ae14f977818624f7a410ef74ed94a5e51f6ba3aa1ce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8580c4cbb0b39a02f55ae14f977818624f7a410ef74ed94a5e51f6ba3aa1ce39->leave($__internal_8580c4cbb0b39a02f55ae14f977818624f7a410ef74ed94a5e51f6ba3aa1ce39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_950d7e288bdf72a4454139d1616942e8cb72d670ac103cb93d8ade2b22f7a409 = $this->env->getExtension("native_profiler");
        $__internal_950d7e288bdf72a4454139d1616942e8cb72d670ac103cb93d8ade2b22f7a409->enter($__internal_950d7e288bdf72a4454139d1616942e8cb72d670ac103cb93d8ade2b22f7a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_950d7e288bdf72a4454139d1616942e8cb72d670ac103cb93d8ade2b22f7a409->leave($__internal_950d7e288bdf72a4454139d1616942e8cb72d670ac103cb93d8ade2b22f7a409_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
