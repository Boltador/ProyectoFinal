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
        $__internal_b9d411b1141d7b9efbbe4145b3ad3ec87212d258d1710ca095f68a968ea9be70 = $this->env->getExtension("native_profiler");
        $__internal_b9d411b1141d7b9efbbe4145b3ad3ec87212d258d1710ca095f68a968ea9be70->enter($__internal_b9d411b1141d7b9efbbe4145b3ad3ec87212d258d1710ca095f68a968ea9be70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d411b1141d7b9efbbe4145b3ad3ec87212d258d1710ca095f68a968ea9be70->leave($__internal_b9d411b1141d7b9efbbe4145b3ad3ec87212d258d1710ca095f68a968ea9be70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84f9f0d5c4d4f42b738eb60f21eae2707d69cbe2b92c84ea02d179813c13ce46 = $this->env->getExtension("native_profiler");
        $__internal_84f9f0d5c4d4f42b738eb60f21eae2707d69cbe2b92c84ea02d179813c13ce46->enter($__internal_84f9f0d5c4d4f42b738eb60f21eae2707d69cbe2b92c84ea02d179813c13ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84f9f0d5c4d4f42b738eb60f21eae2707d69cbe2b92c84ea02d179813c13ce46->leave($__internal_84f9f0d5c4d4f42b738eb60f21eae2707d69cbe2b92c84ea02d179813c13ce46_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba1d0e1343bbcb10e0ad6477b630f06c70594c1ef295fc911fabbc2c55b11891 = $this->env->getExtension("native_profiler");
        $__internal_ba1d0e1343bbcb10e0ad6477b630f06c70594c1ef295fc911fabbc2c55b11891->enter($__internal_ba1d0e1343bbcb10e0ad6477b630f06c70594c1ef295fc911fabbc2c55b11891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ba1d0e1343bbcb10e0ad6477b630f06c70594c1ef295fc911fabbc2c55b11891->leave($__internal_ba1d0e1343bbcb10e0ad6477b630f06c70594c1ef295fc911fabbc2c55b11891_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d09249f1ac995e118131c2b998e214c04e5093b8d0b231cbc1cbfc2b43a39498 = $this->env->getExtension("native_profiler");
        $__internal_d09249f1ac995e118131c2b998e214c04e5093b8d0b231cbc1cbfc2b43a39498->enter($__internal_d09249f1ac995e118131c2b998e214c04e5093b8d0b231cbc1cbfc2b43a39498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d09249f1ac995e118131c2b998e214c04e5093b8d0b231cbc1cbfc2b43a39498->leave($__internal_d09249f1ac995e118131c2b998e214c04e5093b8d0b231cbc1cbfc2b43a39498_prof);

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
