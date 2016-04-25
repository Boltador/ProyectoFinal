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
        $__internal_a58b6433275ce2bd904555568ba55c7d04e8be3d96170650540ca63c2a7783f0 = $this->env->getExtension("native_profiler");
        $__internal_a58b6433275ce2bd904555568ba55c7d04e8be3d96170650540ca63c2a7783f0->enter($__internal_a58b6433275ce2bd904555568ba55c7d04e8be3d96170650540ca63c2a7783f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a58b6433275ce2bd904555568ba55c7d04e8be3d96170650540ca63c2a7783f0->leave($__internal_a58b6433275ce2bd904555568ba55c7d04e8be3d96170650540ca63c2a7783f0_prof);

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
