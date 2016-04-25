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
        $__internal_dd8664aa247c8467355e597de2ad449e89b5dacdf9e0f05cd9338c1707736bc9 = $this->env->getExtension("native_profiler");
        $__internal_dd8664aa247c8467355e597de2ad449e89b5dacdf9e0f05cd9338c1707736bc9->enter($__internal_dd8664aa247c8467355e597de2ad449e89b5dacdf9e0f05cd9338c1707736bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dd8664aa247c8467355e597de2ad449e89b5dacdf9e0f05cd9338c1707736bc9->leave($__internal_dd8664aa247c8467355e597de2ad449e89b5dacdf9e0f05cd9338c1707736bc9_prof);

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
