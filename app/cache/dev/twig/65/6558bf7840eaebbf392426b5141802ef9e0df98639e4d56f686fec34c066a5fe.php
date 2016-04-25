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
        $__internal_bfd76f2a498552cb205850ea685e40f59a7a063f2436cb92b820e42967f3a44b = $this->env->getExtension("native_profiler");
        $__internal_bfd76f2a498552cb205850ea685e40f59a7a063f2436cb92b820e42967f3a44b->enter($__internal_bfd76f2a498552cb205850ea685e40f59a7a063f2436cb92b820e42967f3a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bfd76f2a498552cb205850ea685e40f59a7a063f2436cb92b820e42967f3a44b->leave($__internal_bfd76f2a498552cb205850ea685e40f59a7a063f2436cb92b820e42967f3a44b_prof);

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
