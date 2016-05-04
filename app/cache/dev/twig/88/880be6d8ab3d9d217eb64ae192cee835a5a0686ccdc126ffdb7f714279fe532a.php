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
        $__internal_b49a11839194f51c0f2bcfcc0b6a8d5ff8527e3abffc6908951b4d763e464f89 = $this->env->getExtension("native_profiler");
        $__internal_b49a11839194f51c0f2bcfcc0b6a8d5ff8527e3abffc6908951b4d763e464f89->enter($__internal_b49a11839194f51c0f2bcfcc0b6a8d5ff8527e3abffc6908951b4d763e464f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b49a11839194f51c0f2bcfcc0b6a8d5ff8527e3abffc6908951b4d763e464f89->leave($__internal_b49a11839194f51c0f2bcfcc0b6a8d5ff8527e3abffc6908951b4d763e464f89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b3ac4ef7681c29728b40cb16f0ad36a8b54b0df5351236819f1353019b4c88f = $this->env->getExtension("native_profiler");
        $__internal_2b3ac4ef7681c29728b40cb16f0ad36a8b54b0df5351236819f1353019b4c88f->enter($__internal_2b3ac4ef7681c29728b40cb16f0ad36a8b54b0df5351236819f1353019b4c88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2b3ac4ef7681c29728b40cb16f0ad36a8b54b0df5351236819f1353019b4c88f->leave($__internal_2b3ac4ef7681c29728b40cb16f0ad36a8b54b0df5351236819f1353019b4c88f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_908a5d9e625530964bbc7b6b6d6f67e63ac257a4deb5d8d693c4788a367cab0d = $this->env->getExtension("native_profiler");
        $__internal_908a5d9e625530964bbc7b6b6d6f67e63ac257a4deb5d8d693c4788a367cab0d->enter($__internal_908a5d9e625530964bbc7b6b6d6f67e63ac257a4deb5d8d693c4788a367cab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_908a5d9e625530964bbc7b6b6d6f67e63ac257a4deb5d8d693c4788a367cab0d->leave($__internal_908a5d9e625530964bbc7b6b6d6f67e63ac257a4deb5d8d693c4788a367cab0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c685fadfb6be35f533f2a18a08177970dc8df43438d5cca92cab549c436aeaa = $this->env->getExtension("native_profiler");
        $__internal_1c685fadfb6be35f533f2a18a08177970dc8df43438d5cca92cab549c436aeaa->enter($__internal_1c685fadfb6be35f533f2a18a08177970dc8df43438d5cca92cab549c436aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1c685fadfb6be35f533f2a18a08177970dc8df43438d5cca92cab549c436aeaa->leave($__internal_1c685fadfb6be35f533f2a18a08177970dc8df43438d5cca92cab549c436aeaa_prof);

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
