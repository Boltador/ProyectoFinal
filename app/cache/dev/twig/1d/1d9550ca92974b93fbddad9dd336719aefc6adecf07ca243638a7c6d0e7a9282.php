<?php

/* :grados:new.html.twig */
class __TwigTemplate_56fbe1c41187dc599f83550b7e2f18aa8938d0572ec96f6fa07db60abdb8811d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grados:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0fe415ac7039c5430bf7aad573a0ae93296d286e2c55483f47c71a6c2be18a7 = $this->env->getExtension("native_profiler");
        $__internal_d0fe415ac7039c5430bf7aad573a0ae93296d286e2c55483f47c71a6c2be18a7->enter($__internal_d0fe415ac7039c5430bf7aad573a0ae93296d286e2c55483f47c71a6c2be18a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fe415ac7039c5430bf7aad573a0ae93296d286e2c55483f47c71a6c2be18a7->leave($__internal_d0fe415ac7039c5430bf7aad573a0ae93296d286e2c55483f47c71a6c2be18a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_912560cad2e9f9aae96ccac5aa92a61dd720850f58781911e2a1ee2c73d24b6e = $this->env->getExtension("native_profiler");
        $__internal_912560cad2e9f9aae96ccac5aa92a61dd720850f58781911e2a1ee2c73d24b6e->enter($__internal_912560cad2e9f9aae96ccac5aa92a61dd720850f58781911e2a1ee2c73d24b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("grados_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_912560cad2e9f9aae96ccac5aa92a61dd720850f58781911e2a1ee2c73d24b6e->leave($__internal_912560cad2e9f9aae96ccac5aa92a61dd720850f58781911e2a1ee2c73d24b6e_prof);

    }

    public function getTemplateName()
    {
        return ":grados:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Grados creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
