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
        $__internal_55f112c2df04485b49ea176fafff84ec6f7ad9ba6acba43391c926ea979cf745 = $this->env->getExtension("native_profiler");
        $__internal_55f112c2df04485b49ea176fafff84ec6f7ad9ba6acba43391c926ea979cf745->enter($__internal_55f112c2df04485b49ea176fafff84ec6f7ad9ba6acba43391c926ea979cf745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f112c2df04485b49ea176fafff84ec6f7ad9ba6acba43391c926ea979cf745->leave($__internal_55f112c2df04485b49ea176fafff84ec6f7ad9ba6acba43391c926ea979cf745_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aed14437c96aef235dfbae7d0faf99c6756eb6b2ee229725b20d67a3ca1c7d61 = $this->env->getExtension("native_profiler");
        $__internal_aed14437c96aef235dfbae7d0faf99c6756eb6b2ee229725b20d67a3ca1c7d61->enter($__internal_aed14437c96aef235dfbae7d0faf99c6756eb6b2ee229725b20d67a3ca1c7d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aed14437c96aef235dfbae7d0faf99c6756eb6b2ee229725b20d67a3ca1c7d61->leave($__internal_aed14437c96aef235dfbae7d0faf99c6756eb6b2ee229725b20d67a3ca1c7d61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f96eb9084e56f0367f4bd07bf6a10d85e17ff0fe23eaac1078062e167f441c1 = $this->env->getExtension("native_profiler");
        $__internal_1f96eb9084e56f0367f4bd07bf6a10d85e17ff0fe23eaac1078062e167f441c1->enter($__internal_1f96eb9084e56f0367f4bd07bf6a10d85e17ff0fe23eaac1078062e167f441c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f96eb9084e56f0367f4bd07bf6a10d85e17ff0fe23eaac1078062e167f441c1->leave($__internal_1f96eb9084e56f0367f4bd07bf6a10d85e17ff0fe23eaac1078062e167f441c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8562aee1b12cb0718d3085aa4c0db20ea070b1872e213b3235f8bc03822a1979 = $this->env->getExtension("native_profiler");
        $__internal_8562aee1b12cb0718d3085aa4c0db20ea070b1872e213b3235f8bc03822a1979->enter($__internal_8562aee1b12cb0718d3085aa4c0db20ea070b1872e213b3235f8bc03822a1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8562aee1b12cb0718d3085aa4c0db20ea070b1872e213b3235f8bc03822a1979->leave($__internal_8562aee1b12cb0718d3085aa4c0db20ea070b1872e213b3235f8bc03822a1979_prof);

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
