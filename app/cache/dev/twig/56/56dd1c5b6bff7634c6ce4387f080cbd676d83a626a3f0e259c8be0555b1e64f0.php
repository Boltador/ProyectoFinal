<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e3358cf1b857c714fd87c48879b0eff2b715fe97c82d2c52f928caa572894f4b extends Twig_Template
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
        $__internal_a80efca4e5fb6a93f53d75f892a2332e76110af903f74f389682518e19d46f9a = $this->env->getExtension("native_profiler");
        $__internal_a80efca4e5fb6a93f53d75f892a2332e76110af903f74f389682518e19d46f9a->enter($__internal_a80efca4e5fb6a93f53d75f892a2332e76110af903f74f389682518e19d46f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a80efca4e5fb6a93f53d75f892a2332e76110af903f74f389682518e19d46f9a->leave($__internal_a80efca4e5fb6a93f53d75f892a2332e76110af903f74f389682518e19d46f9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
