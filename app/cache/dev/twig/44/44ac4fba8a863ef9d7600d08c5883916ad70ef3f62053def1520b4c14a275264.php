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
        $__internal_acc969e35aa28365c6c3b0f62e5ef6d3def329986c4d46c517ae51864e2e782d = $this->env->getExtension("native_profiler");
        $__internal_acc969e35aa28365c6c3b0f62e5ef6d3def329986c4d46c517ae51864e2e782d->enter($__internal_acc969e35aa28365c6c3b0f62e5ef6d3def329986c4d46c517ae51864e2e782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc969e35aa28365c6c3b0f62e5ef6d3def329986c4d46c517ae51864e2e782d->leave($__internal_acc969e35aa28365c6c3b0f62e5ef6d3def329986c4d46c517ae51864e2e782d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_592580889b861e3d1df793331a68eb95bce7bf4285b290adfda145497dfae62c = $this->env->getExtension("native_profiler");
        $__internal_592580889b861e3d1df793331a68eb95bce7bf4285b290adfda145497dfae62c->enter($__internal_592580889b861e3d1df793331a68eb95bce7bf4285b290adfda145497dfae62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_592580889b861e3d1df793331a68eb95bce7bf4285b290adfda145497dfae62c->leave($__internal_592580889b861e3d1df793331a68eb95bce7bf4285b290adfda145497dfae62c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4303fec069027f941470258e174b7575a150985d4b10c9efac4ee4aa0fe2a853 = $this->env->getExtension("native_profiler");
        $__internal_4303fec069027f941470258e174b7575a150985d4b10c9efac4ee4aa0fe2a853->enter($__internal_4303fec069027f941470258e174b7575a150985d4b10c9efac4ee4aa0fe2a853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4303fec069027f941470258e174b7575a150985d4b10c9efac4ee4aa0fe2a853->leave($__internal_4303fec069027f941470258e174b7575a150985d4b10c9efac4ee4aa0fe2a853_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e01cb714bfda37bfff96ee49751488d13fb86413e15985d946f31383ad0bfcf4 = $this->env->getExtension("native_profiler");
        $__internal_e01cb714bfda37bfff96ee49751488d13fb86413e15985d946f31383ad0bfcf4->enter($__internal_e01cb714bfda37bfff96ee49751488d13fb86413e15985d946f31383ad0bfcf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e01cb714bfda37bfff96ee49751488d13fb86413e15985d946f31383ad0bfcf4->leave($__internal_e01cb714bfda37bfff96ee49751488d13fb86413e15985d946f31383ad0bfcf4_prof);

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
