<?php

/* competencias/new.html.twig */
class __TwigTemplate_204da266c9c1b00d3b5a20725d6a7748fc39250a9a6d4100f3906487c467c0f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competencias/new.html.twig", 1);
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
        $__internal_64ead0800ee9f378edc24019568dbd758609bddb2a308c571e99f8687127a255 = $this->env->getExtension("native_profiler");
        $__internal_64ead0800ee9f378edc24019568dbd758609bddb2a308c571e99f8687127a255->enter($__internal_64ead0800ee9f378edc24019568dbd758609bddb2a308c571e99f8687127a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competencias/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ead0800ee9f378edc24019568dbd758609bddb2a308c571e99f8687127a255->leave($__internal_64ead0800ee9f378edc24019568dbd758609bddb2a308c571e99f8687127a255_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fc6bcd494f0b1f021778df9d838e9793780ef8dc5492754a1d283df6f91b03b = $this->env->getExtension("native_profiler");
        $__internal_6fc6bcd494f0b1f021778df9d838e9793780ef8dc5492754a1d283df6f91b03b->enter($__internal_6fc6bcd494f0b1f021778df9d838e9793780ef8dc5492754a1d283df6f91b03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("competencias_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6fc6bcd494f0b1f021778df9d838e9793780ef8dc5492754a1d283df6f91b03b->leave($__internal_6fc6bcd494f0b1f021778df9d838e9793780ef8dc5492754a1d283df6f91b03b_prof);

    }

    public function getTemplateName()
    {
        return "competencias/new.html.twig";
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
/*     <h1>Competencias creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competencias_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
