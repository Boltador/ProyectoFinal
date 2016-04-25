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
        $__internal_7e46af034c41c0814b7e9b2f2edb0bb1044b49c7725e3dddba5ed5d237634fbc = $this->env->getExtension("native_profiler");
        $__internal_7e46af034c41c0814b7e9b2f2edb0bb1044b49c7725e3dddba5ed5d237634fbc->enter($__internal_7e46af034c41c0814b7e9b2f2edb0bb1044b49c7725e3dddba5ed5d237634fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e46af034c41c0814b7e9b2f2edb0bb1044b49c7725e3dddba5ed5d237634fbc->leave($__internal_7e46af034c41c0814b7e9b2f2edb0bb1044b49c7725e3dddba5ed5d237634fbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ed5dce4ec141f9d931bd43ff0ebcca289c61274686692a0c791b7d3216dce5b = $this->env->getExtension("native_profiler");
        $__internal_7ed5dce4ec141f9d931bd43ff0ebcca289c61274686692a0c791b7d3216dce5b->enter($__internal_7ed5dce4ec141f9d931bd43ff0ebcca289c61274686692a0c791b7d3216dce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ed5dce4ec141f9d931bd43ff0ebcca289c61274686692a0c791b7d3216dce5b->leave($__internal_7ed5dce4ec141f9d931bd43ff0ebcca289c61274686692a0c791b7d3216dce5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_650ded27d22b243b8024e4340527d052decc596eec6a6dd7c43b1f88662feb9a = $this->env->getExtension("native_profiler");
        $__internal_650ded27d22b243b8024e4340527d052decc596eec6a6dd7c43b1f88662feb9a->enter($__internal_650ded27d22b243b8024e4340527d052decc596eec6a6dd7c43b1f88662feb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_650ded27d22b243b8024e4340527d052decc596eec6a6dd7c43b1f88662feb9a->leave($__internal_650ded27d22b243b8024e4340527d052decc596eec6a6dd7c43b1f88662feb9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb0f19ac5b7b20d4da5d3829d3669d733e59fe92a47a2da858591015ffad26e7 = $this->env->getExtension("native_profiler");
        $__internal_eb0f19ac5b7b20d4da5d3829d3669d733e59fe92a47a2da858591015ffad26e7->enter($__internal_eb0f19ac5b7b20d4da5d3829d3669d733e59fe92a47a2da858591015ffad26e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eb0f19ac5b7b20d4da5d3829d3669d733e59fe92a47a2da858591015ffad26e7->leave($__internal_eb0f19ac5b7b20d4da5d3829d3669d733e59fe92a47a2da858591015ffad26e7_prof);

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
