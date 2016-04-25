<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7802285157b892da4ef44227bb6945a293f6632f141d864a0041b7267671a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_cfccf4b752e2ddeaf9c296c48ee543a6238831fa03467b04b81b08863c8799fe = $this->env->getExtension("native_profiler");
        $__internal_cfccf4b752e2ddeaf9c296c48ee543a6238831fa03467b04b81b08863c8799fe->enter($__internal_cfccf4b752e2ddeaf9c296c48ee543a6238831fa03467b04b81b08863c8799fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfccf4b752e2ddeaf9c296c48ee543a6238831fa03467b04b81b08863c8799fe->leave($__internal_cfccf4b752e2ddeaf9c296c48ee543a6238831fa03467b04b81b08863c8799fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aeee57d8f041a6e93ffcf15fc1e2eb78a23c2f117a00381e38c9c6173f7ff522 = $this->env->getExtension("native_profiler");
        $__internal_aeee57d8f041a6e93ffcf15fc1e2eb78a23c2f117a00381e38c9c6173f7ff522->enter($__internal_aeee57d8f041a6e93ffcf15fc1e2eb78a23c2f117a00381e38c9c6173f7ff522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aeee57d8f041a6e93ffcf15fc1e2eb78a23c2f117a00381e38c9c6173f7ff522->leave($__internal_aeee57d8f041a6e93ffcf15fc1e2eb78a23c2f117a00381e38c9c6173f7ff522_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4af58ba32dd05b007486e16a09cfbb535ecf277f386e9c0b4e1f90992f800dd = $this->env->getExtension("native_profiler");
        $__internal_b4af58ba32dd05b007486e16a09cfbb535ecf277f386e9c0b4e1f90992f800dd->enter($__internal_b4af58ba32dd05b007486e16a09cfbb535ecf277f386e9c0b4e1f90992f800dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b4af58ba32dd05b007486e16a09cfbb535ecf277f386e9c0b4e1f90992f800dd->leave($__internal_b4af58ba32dd05b007486e16a09cfbb535ecf277f386e9c0b4e1f90992f800dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee0677dc4e80d0328eb277885ff9cac56c865e215dba56fa4ea34a2177a80d3 = $this->env->getExtension("native_profiler");
        $__internal_5ee0677dc4e80d0328eb277885ff9cac56c865e215dba56fa4ea34a2177a80d3->enter($__internal_5ee0677dc4e80d0328eb277885ff9cac56c865e215dba56fa4ea34a2177a80d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5ee0677dc4e80d0328eb277885ff9cac56c865e215dba56fa4ea34a2177a80d3->leave($__internal_5ee0677dc4e80d0328eb277885ff9cac56c865e215dba56fa4ea34a2177a80d3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
