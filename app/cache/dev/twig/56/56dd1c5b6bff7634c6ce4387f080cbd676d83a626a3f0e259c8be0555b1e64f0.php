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
        $__internal_7eb7c0c57415da9f70cea639bbea2d55f3ced4a7b8ff5fe45f6f09b1c2582c39 = $this->env->getExtension("native_profiler");
        $__internal_7eb7c0c57415da9f70cea639bbea2d55f3ced4a7b8ff5fe45f6f09b1c2582c39->enter($__internal_7eb7c0c57415da9f70cea639bbea2d55f3ced4a7b8ff5fe45f6f09b1c2582c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7eb7c0c57415da9f70cea639bbea2d55f3ced4a7b8ff5fe45f6f09b1c2582c39->leave($__internal_7eb7c0c57415da9f70cea639bbea2d55f3ced4a7b8ff5fe45f6f09b1c2582c39_prof);

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
