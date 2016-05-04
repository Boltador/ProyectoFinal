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
        $__internal_cdd6c0621174ffe9bd93ab1b045bb746d6df9c614355fe56978f259e42682ca2 = $this->env->getExtension("native_profiler");
        $__internal_cdd6c0621174ffe9bd93ab1b045bb746d6df9c614355fe56978f259e42682ca2->enter($__internal_cdd6c0621174ffe9bd93ab1b045bb746d6df9c614355fe56978f259e42682ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd6c0621174ffe9bd93ab1b045bb746d6df9c614355fe56978f259e42682ca2->leave($__internal_cdd6c0621174ffe9bd93ab1b045bb746d6df9c614355fe56978f259e42682ca2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b6fdbe19be6de7d178d616de117f348cf824bf57c31f43e2e5121fc0bd70f15 = $this->env->getExtension("native_profiler");
        $__internal_3b6fdbe19be6de7d178d616de117f348cf824bf57c31f43e2e5121fc0bd70f15->enter($__internal_3b6fdbe19be6de7d178d616de117f348cf824bf57c31f43e2e5121fc0bd70f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b6fdbe19be6de7d178d616de117f348cf824bf57c31f43e2e5121fc0bd70f15->leave($__internal_3b6fdbe19be6de7d178d616de117f348cf824bf57c31f43e2e5121fc0bd70f15_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e2ac569a2795fbb7794daa4ceff8efafb1247235a5143f4109c35cc65236fbf = $this->env->getExtension("native_profiler");
        $__internal_4e2ac569a2795fbb7794daa4ceff8efafb1247235a5143f4109c35cc65236fbf->enter($__internal_4e2ac569a2795fbb7794daa4ceff8efafb1247235a5143f4109c35cc65236fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e2ac569a2795fbb7794daa4ceff8efafb1247235a5143f4109c35cc65236fbf->leave($__internal_4e2ac569a2795fbb7794daa4ceff8efafb1247235a5143f4109c35cc65236fbf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4b6ca609dabc7552d991ef7fe3d45026a2be582fd730c92ae92404a4d62a3f5 = $this->env->getExtension("native_profiler");
        $__internal_c4b6ca609dabc7552d991ef7fe3d45026a2be582fd730c92ae92404a4d62a3f5->enter($__internal_c4b6ca609dabc7552d991ef7fe3d45026a2be582fd730c92ae92404a4d62a3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c4b6ca609dabc7552d991ef7fe3d45026a2be582fd730c92ae92404a4d62a3f5->leave($__internal_c4b6ca609dabc7552d991ef7fe3d45026a2be582fd730c92ae92404a4d62a3f5_prof);

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
