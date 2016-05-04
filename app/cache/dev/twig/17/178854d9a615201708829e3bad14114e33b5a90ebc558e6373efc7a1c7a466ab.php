<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f68d8382900a4ebf68d21417a49e874eb1af844ef41b24d5488d21c79788c989 extends Twig_Template
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
        $__internal_a5386c4816c4a7a6f56b73b7b4520c07963e184bf4ee28601c661dbba76beccf = $this->env->getExtension("native_profiler");
        $__internal_a5386c4816c4a7a6f56b73b7b4520c07963e184bf4ee28601c661dbba76beccf->enter($__internal_a5386c4816c4a7a6f56b73b7b4520c07963e184bf4ee28601c661dbba76beccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a5386c4816c4a7a6f56b73b7b4520c07963e184bf4ee28601c661dbba76beccf->leave($__internal_a5386c4816c4a7a6f56b73b7b4520c07963e184bf4ee28601c661dbba76beccf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
