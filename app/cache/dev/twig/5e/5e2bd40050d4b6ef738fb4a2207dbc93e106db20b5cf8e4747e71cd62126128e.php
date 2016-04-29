<?php

/* matriculas/new.html.twig */
class __TwigTemplate_bccdba1f1ff9f50d0a7757ca7a57a18621961c477e88c7b964fff7e86d202751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/new.html.twig", 1);
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
        $__internal_e2f057a814f66f670b89a6e2984ac4660839421de17509e0922627e60bd64c18 = $this->env->getExtension("native_profiler");
        $__internal_e2f057a814f66f670b89a6e2984ac4660839421de17509e0922627e60bd64c18->enter($__internal_e2f057a814f66f670b89a6e2984ac4660839421de17509e0922627e60bd64c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f057a814f66f670b89a6e2984ac4660839421de17509e0922627e60bd64c18->leave($__internal_e2f057a814f66f670b89a6e2984ac4660839421de17509e0922627e60bd64c18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17dfb77ba796ce7e5d8cb94ef2b3a16ef83d4f3e2c958283390eae7ea17bf523 = $this->env->getExtension("native_profiler");
        $__internal_17dfb77ba796ce7e5d8cb94ef2b3a16ef83d4f3e2c958283390eae7ea17bf523->enter($__internal_17dfb77ba796ce7e5d8cb94ef2b3a16ef83d4f3e2c958283390eae7ea17bf523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_17dfb77ba796ce7e5d8cb94ef2b3a16ef83d4f3e2c958283390eae7ea17bf523->leave($__internal_17dfb77ba796ce7e5d8cb94ef2b3a16ef83d4f3e2c958283390eae7ea17bf523_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/new.html.twig";
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
/*     <h1>Matriculas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
