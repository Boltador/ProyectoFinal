<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_944b73ad88c147d5bc0abb5803f5d9681f499ed11306045b49638bb0bb4af39a extends Twig_Template
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
        $__internal_c2cd2d4e70ff469a647d66a0f7c974f5683ed1c39490742e1469ab83c18988ee = $this->env->getExtension("native_profiler");
        $__internal_c2cd2d4e70ff469a647d66a0f7c974f5683ed1c39490742e1469ab83c18988ee->enter($__internal_c2cd2d4e70ff469a647d66a0f7c974f5683ed1c39490742e1469ab83c18988ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c2cd2d4e70ff469a647d66a0f7c974f5683ed1c39490742e1469ab83c18988ee->leave($__internal_c2cd2d4e70ff469a647d66a0f7c974f5683ed1c39490742e1469ab83c18988ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
