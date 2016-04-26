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
        $__internal_6e0970a853ca4003d3a4f5fc64f0ac6674295b4cd6c76db88dcc6aba5c74492a = $this->env->getExtension("native_profiler");
        $__internal_6e0970a853ca4003d3a4f5fc64f0ac6674295b4cd6c76db88dcc6aba5c74492a->enter($__internal_6e0970a853ca4003d3a4f5fc64f0ac6674295b4cd6c76db88dcc6aba5c74492a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0970a853ca4003d3a4f5fc64f0ac6674295b4cd6c76db88dcc6aba5c74492a->leave($__internal_6e0970a853ca4003d3a4f5fc64f0ac6674295b4cd6c76db88dcc6aba5c74492a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_927b2faaab757fa279231cbd5ffc6d875e212260045919df4df121708ab580a1 = $this->env->getExtension("native_profiler");
        $__internal_927b2faaab757fa279231cbd5ffc6d875e212260045919df4df121708ab580a1->enter($__internal_927b2faaab757fa279231cbd5ffc6d875e212260045919df4df121708ab580a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_927b2faaab757fa279231cbd5ffc6d875e212260045919df4df121708ab580a1->leave($__internal_927b2faaab757fa279231cbd5ffc6d875e212260045919df4df121708ab580a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_888bb9a00d5cd1f061bb4d6d106ab4afe6efd347c4fc981f56d8d324f10a9fc9 = $this->env->getExtension("native_profiler");
        $__internal_888bb9a00d5cd1f061bb4d6d106ab4afe6efd347c4fc981f56d8d324f10a9fc9->enter($__internal_888bb9a00d5cd1f061bb4d6d106ab4afe6efd347c4fc981f56d8d324f10a9fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_888bb9a00d5cd1f061bb4d6d106ab4afe6efd347c4fc981f56d8d324f10a9fc9->leave($__internal_888bb9a00d5cd1f061bb4d6d106ab4afe6efd347c4fc981f56d8d324f10a9fc9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f00d073600600896e29a6458ba5aa45654a98d65cb2309e6c6b52eb3e1f2211a = $this->env->getExtension("native_profiler");
        $__internal_f00d073600600896e29a6458ba5aa45654a98d65cb2309e6c6b52eb3e1f2211a->enter($__internal_f00d073600600896e29a6458ba5aa45654a98d65cb2309e6c6b52eb3e1f2211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f00d073600600896e29a6458ba5aa45654a98d65cb2309e6c6b52eb3e1f2211a->leave($__internal_f00d073600600896e29a6458ba5aa45654a98d65cb2309e6c6b52eb3e1f2211a_prof);

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
