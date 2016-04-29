<?php

/* :temas:new.html.twig */
class __TwigTemplate_4626c3fa7829f922343fbc4daa92d3cb3e23928348855f401e7dea4eb01ed9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":temas:new.html.twig", 1);
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
        $__internal_04b93112189b7adeda8b930c68a9c76c69bb8f8b5fb75fbb8d18eb41e772d040 = $this->env->getExtension("native_profiler");
        $__internal_04b93112189b7adeda8b930c68a9c76c69bb8f8b5fb75fbb8d18eb41e772d040->enter($__internal_04b93112189b7adeda8b930c68a9c76c69bb8f8b5fb75fbb8d18eb41e772d040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b93112189b7adeda8b930c68a9c76c69bb8f8b5fb75fbb8d18eb41e772d040->leave($__internal_04b93112189b7adeda8b930c68a9c76c69bb8f8b5fb75fbb8d18eb41e772d040_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f2179e45becef7b3d59ee41bc5719cefe15df54d91ffb16a06b44a10b32122 = $this->env->getExtension("native_profiler");
        $__internal_b3f2179e45becef7b3d59ee41bc5719cefe15df54d91ffb16a06b44a10b32122->enter($__internal_b3f2179e45becef7b3d59ee41bc5719cefe15df54d91ffb16a06b44a10b32122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("temas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b3f2179e45becef7b3d59ee41bc5719cefe15df54d91ffb16a06b44a10b32122->leave($__internal_b3f2179e45becef7b3d59ee41bc5719cefe15df54d91ffb16a06b44a10b32122_prof);

    }

    public function getTemplateName()
    {
        return ":temas:new.html.twig";
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
/*     <h1>Temas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
