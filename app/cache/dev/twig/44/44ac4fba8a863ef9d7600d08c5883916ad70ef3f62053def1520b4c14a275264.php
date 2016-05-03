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
        $__internal_086ade760c6811d2724a55f86af518d1497d1eacddcfccc5287534288ac2d9dc = $this->env->getExtension("native_profiler");
        $__internal_086ade760c6811d2724a55f86af518d1497d1eacddcfccc5287534288ac2d9dc->enter($__internal_086ade760c6811d2724a55f86af518d1497d1eacddcfccc5287534288ac2d9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086ade760c6811d2724a55f86af518d1497d1eacddcfccc5287534288ac2d9dc->leave($__internal_086ade760c6811d2724a55f86af518d1497d1eacddcfccc5287534288ac2d9dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecb06947e4e3ad24e1265ba7ccbd9faf7077d9cd1889f1458129a684caa57139 = $this->env->getExtension("native_profiler");
        $__internal_ecb06947e4e3ad24e1265ba7ccbd9faf7077d9cd1889f1458129a684caa57139->enter($__internal_ecb06947e4e3ad24e1265ba7ccbd9faf7077d9cd1889f1458129a684caa57139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ecb06947e4e3ad24e1265ba7ccbd9faf7077d9cd1889f1458129a684caa57139->leave($__internal_ecb06947e4e3ad24e1265ba7ccbd9faf7077d9cd1889f1458129a684caa57139_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d15f9929a4cf33f332ed661fbf410b123d1f3dc2e752522f7995c9d8209a77 = $this->env->getExtension("native_profiler");
        $__internal_40d15f9929a4cf33f332ed661fbf410b123d1f3dc2e752522f7995c9d8209a77->enter($__internal_40d15f9929a4cf33f332ed661fbf410b123d1f3dc2e752522f7995c9d8209a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40d15f9929a4cf33f332ed661fbf410b123d1f3dc2e752522f7995c9d8209a77->leave($__internal_40d15f9929a4cf33f332ed661fbf410b123d1f3dc2e752522f7995c9d8209a77_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b2b67b27ccc5662acbc86c03de4decce4a4e45b0390c7d9a835583e611ab1f = $this->env->getExtension("native_profiler");
        $__internal_78b2b67b27ccc5662acbc86c03de4decce4a4e45b0390c7d9a835583e611ab1f->enter($__internal_78b2b67b27ccc5662acbc86c03de4decce4a4e45b0390c7d9a835583e611ab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_78b2b67b27ccc5662acbc86c03de4decce4a4e45b0390c7d9a835583e611ab1f->leave($__internal_78b2b67b27ccc5662acbc86c03de4decce4a4e45b0390c7d9a835583e611ab1f_prof);

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
