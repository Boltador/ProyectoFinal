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
        $__internal_7fe7c5dd7c8e88c76390ee5205ff51c3b656aeb329e0182fd5032675c30bdc9a = $this->env->getExtension("native_profiler");
        $__internal_7fe7c5dd7c8e88c76390ee5205ff51c3b656aeb329e0182fd5032675c30bdc9a->enter($__internal_7fe7c5dd7c8e88c76390ee5205ff51c3b656aeb329e0182fd5032675c30bdc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe7c5dd7c8e88c76390ee5205ff51c3b656aeb329e0182fd5032675c30bdc9a->leave($__internal_7fe7c5dd7c8e88c76390ee5205ff51c3b656aeb329e0182fd5032675c30bdc9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51a5f4e55ac1e280f0b8321e75678f3a3481c05167cee7991c5e24061a02fb13 = $this->env->getExtension("native_profiler");
        $__internal_51a5f4e55ac1e280f0b8321e75678f3a3481c05167cee7991c5e24061a02fb13->enter($__internal_51a5f4e55ac1e280f0b8321e75678f3a3481c05167cee7991c5e24061a02fb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51a5f4e55ac1e280f0b8321e75678f3a3481c05167cee7991c5e24061a02fb13->leave($__internal_51a5f4e55ac1e280f0b8321e75678f3a3481c05167cee7991c5e24061a02fb13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4df1c310e71167620630e8b51a32b22b6e1780ee85522198b6d9988704c1b551 = $this->env->getExtension("native_profiler");
        $__internal_4df1c310e71167620630e8b51a32b22b6e1780ee85522198b6d9988704c1b551->enter($__internal_4df1c310e71167620630e8b51a32b22b6e1780ee85522198b6d9988704c1b551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4df1c310e71167620630e8b51a32b22b6e1780ee85522198b6d9988704c1b551->leave($__internal_4df1c310e71167620630e8b51a32b22b6e1780ee85522198b6d9988704c1b551_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7bf87fd67b6103b156d31d85f7a771002f62853e46fb64c81c71d6b989a39a = $this->env->getExtension("native_profiler");
        $__internal_1b7bf87fd67b6103b156d31d85f7a771002f62853e46fb64c81c71d6b989a39a->enter($__internal_1b7bf87fd67b6103b156d31d85f7a771002f62853e46fb64c81c71d6b989a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1b7bf87fd67b6103b156d31d85f7a771002f62853e46fb64c81c71d6b989a39a->leave($__internal_1b7bf87fd67b6103b156d31d85f7a771002f62853e46fb64c81c71d6b989a39a_prof);

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
