<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_511ad4e7ac8b2d24dfc57a955a89665b9b877f8de534474fc0ad0ce104dd1b8f extends Twig_Template
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
        $__internal_19adbfe25b0b5cd62d05098754327441d0ed7916c176a5f9aff4443d6ac81a57 = $this->env->getExtension("native_profiler");
        $__internal_19adbfe25b0b5cd62d05098754327441d0ed7916c176a5f9aff4443d6ac81a57->enter($__internal_19adbfe25b0b5cd62d05098754327441d0ed7916c176a5f9aff4443d6ac81a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_19adbfe25b0b5cd62d05098754327441d0ed7916c176a5f9aff4443d6ac81a57->leave($__internal_19adbfe25b0b5cd62d05098754327441d0ed7916c176a5f9aff4443d6ac81a57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
