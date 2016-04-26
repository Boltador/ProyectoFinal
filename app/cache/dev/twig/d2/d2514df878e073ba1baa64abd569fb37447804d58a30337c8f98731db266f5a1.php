<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_cd16a62da914f36cb6067c4376b6e3a4226aa7abf5f65d4f73eca4af4ba5e694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76f5739e6dbca8c48c5f184aec16fe5ad94f379727fcf4b145c11357b0b53ad7 = $this->env->getExtension("native_profiler");
        $__internal_76f5739e6dbca8c48c5f184aec16fe5ad94f379727fcf4b145c11357b0b53ad7->enter($__internal_76f5739e6dbca8c48c5f184aec16fe5ad94f379727fcf4b145c11357b0b53ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_76f5739e6dbca8c48c5f184aec16fe5ad94f379727fcf4b145c11357b0b53ad7->leave($__internal_76f5739e6dbca8c48c5f184aec16fe5ad94f379727fcf4b145c11357b0b53ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
