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
        $__internal_3e3f755a076f4820055ed17b7261152de42fc7361d4ca17903fe1293c3ddd7a1 = $this->env->getExtension("native_profiler");
        $__internal_3e3f755a076f4820055ed17b7261152de42fc7361d4ca17903fe1293c3ddd7a1->enter($__internal_3e3f755a076f4820055ed17b7261152de42fc7361d4ca17903fe1293c3ddd7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3f755a076f4820055ed17b7261152de42fc7361d4ca17903fe1293c3ddd7a1->leave($__internal_3e3f755a076f4820055ed17b7261152de42fc7361d4ca17903fe1293c3ddd7a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a7d11b73a6aeb71b5ad595bade266a7a3f3671e7df2b8cd54f9426d637c5031 = $this->env->getExtension("native_profiler");
        $__internal_1a7d11b73a6aeb71b5ad595bade266a7a3f3671e7df2b8cd54f9426d637c5031->enter($__internal_1a7d11b73a6aeb71b5ad595bade266a7a3f3671e7df2b8cd54f9426d637c5031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a7d11b73a6aeb71b5ad595bade266a7a3f3671e7df2b8cd54f9426d637c5031->leave($__internal_1a7d11b73a6aeb71b5ad595bade266a7a3f3671e7df2b8cd54f9426d637c5031_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dd3824e43ad4e9ebdf47e6514e7d527ad1dc2a6254a86fa7e08eb153f44cbfa = $this->env->getExtension("native_profiler");
        $__internal_4dd3824e43ad4e9ebdf47e6514e7d527ad1dc2a6254a86fa7e08eb153f44cbfa->enter($__internal_4dd3824e43ad4e9ebdf47e6514e7d527ad1dc2a6254a86fa7e08eb153f44cbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4dd3824e43ad4e9ebdf47e6514e7d527ad1dc2a6254a86fa7e08eb153f44cbfa->leave($__internal_4dd3824e43ad4e9ebdf47e6514e7d527ad1dc2a6254a86fa7e08eb153f44cbfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec7c9d91271155181f29ff9486022e6b4126169ae76ce81c8be8a66293fae35 = $this->env->getExtension("native_profiler");
        $__internal_6ec7c9d91271155181f29ff9486022e6b4126169ae76ce81c8be8a66293fae35->enter($__internal_6ec7c9d91271155181f29ff9486022e6b4126169ae76ce81c8be8a66293fae35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6ec7c9d91271155181f29ff9486022e6b4126169ae76ce81c8be8a66293fae35->leave($__internal_6ec7c9d91271155181f29ff9486022e6b4126169ae76ce81c8be8a66293fae35_prof);

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
