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
        $__internal_84079c3ff0d185e23536ca64c2f1b48d5c9941891a7bdc25e0c2a2d4b2a78ff9 = $this->env->getExtension("native_profiler");
        $__internal_84079c3ff0d185e23536ca64c2f1b48d5c9941891a7bdc25e0c2a2d4b2a78ff9->enter($__internal_84079c3ff0d185e23536ca64c2f1b48d5c9941891a7bdc25e0c2a2d4b2a78ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84079c3ff0d185e23536ca64c2f1b48d5c9941891a7bdc25e0c2a2d4b2a78ff9->leave($__internal_84079c3ff0d185e23536ca64c2f1b48d5c9941891a7bdc25e0c2a2d4b2a78ff9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dfdc8a424212a5eb9ebc0b4586b34ad850541569c1cdf88587fda2a0570f22e = $this->env->getExtension("native_profiler");
        $__internal_8dfdc8a424212a5eb9ebc0b4586b34ad850541569c1cdf88587fda2a0570f22e->enter($__internal_8dfdc8a424212a5eb9ebc0b4586b34ad850541569c1cdf88587fda2a0570f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8dfdc8a424212a5eb9ebc0b4586b34ad850541569c1cdf88587fda2a0570f22e->leave($__internal_8dfdc8a424212a5eb9ebc0b4586b34ad850541569c1cdf88587fda2a0570f22e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_334384d623826fa06cd91e233c0b34130d87e4426289c349ca1ff566e7034ea7 = $this->env->getExtension("native_profiler");
        $__internal_334384d623826fa06cd91e233c0b34130d87e4426289c349ca1ff566e7034ea7->enter($__internal_334384d623826fa06cd91e233c0b34130d87e4426289c349ca1ff566e7034ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_334384d623826fa06cd91e233c0b34130d87e4426289c349ca1ff566e7034ea7->leave($__internal_334384d623826fa06cd91e233c0b34130d87e4426289c349ca1ff566e7034ea7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_180de2f5b063d9951583b8574dd98be4be3476125b5bfd56711cef475b34dde2 = $this->env->getExtension("native_profiler");
        $__internal_180de2f5b063d9951583b8574dd98be4be3476125b5bfd56711cef475b34dde2->enter($__internal_180de2f5b063d9951583b8574dd98be4be3476125b5bfd56711cef475b34dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_180de2f5b063d9951583b8574dd98be4be3476125b5bfd56711cef475b34dde2->leave($__internal_180de2f5b063d9951583b8574dd98be4be3476125b5bfd56711cef475b34dde2_prof);

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
