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
        $__internal_db620b13f7bf5ee7cfda6ab22615ace66a8f3cf074a7a334c6ecf89c40631d03 = $this->env->getExtension("native_profiler");
        $__internal_db620b13f7bf5ee7cfda6ab22615ace66a8f3cf074a7a334c6ecf89c40631d03->enter($__internal_db620b13f7bf5ee7cfda6ab22615ace66a8f3cf074a7a334c6ecf89c40631d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db620b13f7bf5ee7cfda6ab22615ace66a8f3cf074a7a334c6ecf89c40631d03->leave($__internal_db620b13f7bf5ee7cfda6ab22615ace66a8f3cf074a7a334c6ecf89c40631d03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b48669d6e3652d40e8ba5b6a03d0df1dd6f968e9282bf779b53b8712a487c9a = $this->env->getExtension("native_profiler");
        $__internal_1b48669d6e3652d40e8ba5b6a03d0df1dd6f968e9282bf779b53b8712a487c9a->enter($__internal_1b48669d6e3652d40e8ba5b6a03d0df1dd6f968e9282bf779b53b8712a487c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1b48669d6e3652d40e8ba5b6a03d0df1dd6f968e9282bf779b53b8712a487c9a->leave($__internal_1b48669d6e3652d40e8ba5b6a03d0df1dd6f968e9282bf779b53b8712a487c9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eda03b8af03ec81932d717921d8161e72dc20bfd51c89590f52eae8db5de1fe6 = $this->env->getExtension("native_profiler");
        $__internal_eda03b8af03ec81932d717921d8161e72dc20bfd51c89590f52eae8db5de1fe6->enter($__internal_eda03b8af03ec81932d717921d8161e72dc20bfd51c89590f52eae8db5de1fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eda03b8af03ec81932d717921d8161e72dc20bfd51c89590f52eae8db5de1fe6->leave($__internal_eda03b8af03ec81932d717921d8161e72dc20bfd51c89590f52eae8db5de1fe6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b20318b4b8ef2d2c41ea26d088aea1061908555b1d73eec7dfa18636f1464d17 = $this->env->getExtension("native_profiler");
        $__internal_b20318b4b8ef2d2c41ea26d088aea1061908555b1d73eec7dfa18636f1464d17->enter($__internal_b20318b4b8ef2d2c41ea26d088aea1061908555b1d73eec7dfa18636f1464d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b20318b4b8ef2d2c41ea26d088aea1061908555b1d73eec7dfa18636f1464d17->leave($__internal_b20318b4b8ef2d2c41ea26d088aea1061908555b1d73eec7dfa18636f1464d17_prof);

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
