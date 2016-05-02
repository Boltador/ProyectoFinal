<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_b5325b504fd62337f1e80b51d32729269a984c7e0fe62fc30f1584bf38152afc extends Twig_Template
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
        $__internal_385166ae5b861d311753755b809edd151d14363c429bf108274cedf55199efb6 = $this->env->getExtension("native_profiler");
        $__internal_385166ae5b861d311753755b809edd151d14363c429bf108274cedf55199efb6->enter($__internal_385166ae5b861d311753755b809edd151d14363c429bf108274cedf55199efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_385166ae5b861d311753755b809edd151d14363c429bf108274cedf55199efb6->leave($__internal_385166ae5b861d311753755b809edd151d14363c429bf108274cedf55199efb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
