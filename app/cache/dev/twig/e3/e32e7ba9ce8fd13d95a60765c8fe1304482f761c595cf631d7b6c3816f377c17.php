<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a5f464430185a0c295a48d9bbbb60618f3154553bdd9163b9615f7ba464458d8 extends Twig_Template
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
        $__internal_25367f5b5cce7e25629d0d3adf392a185d2948b76cb70f68694d9a31548cd768 = $this->env->getExtension("native_profiler");
        $__internal_25367f5b5cce7e25629d0d3adf392a185d2948b76cb70f68694d9a31548cd768->enter($__internal_25367f5b5cce7e25629d0d3adf392a185d2948b76cb70f68694d9a31548cd768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_25367f5b5cce7e25629d0d3adf392a185d2948b76cb70f68694d9a31548cd768->leave($__internal_25367f5b5cce7e25629d0d3adf392a185d2948b76cb70f68694d9a31548cd768_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
