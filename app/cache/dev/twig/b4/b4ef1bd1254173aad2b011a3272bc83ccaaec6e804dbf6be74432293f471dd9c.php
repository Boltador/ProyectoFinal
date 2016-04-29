<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6ead7abf4cb3d08e95790f525584a2cee4a75be2b4a01c8aa1fbb6079bd370d3 extends Twig_Template
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
        $__internal_08f123f5de536e670684c2fe5b1093dd04131ec09ece8c8688595a09675bc9d4 = $this->env->getExtension("native_profiler");
        $__internal_08f123f5de536e670684c2fe5b1093dd04131ec09ece8c8688595a09675bc9d4->enter($__internal_08f123f5de536e670684c2fe5b1093dd04131ec09ece8c8688595a09675bc9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_08f123f5de536e670684c2fe5b1093dd04131ec09ece8c8688595a09675bc9d4->leave($__internal_08f123f5de536e670684c2fe5b1093dd04131ec09ece8c8688595a09675bc9d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
