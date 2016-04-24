<?php

/* docentes/new.html.twig */
class __TwigTemplate_ad2f83422b02b610eaead8a996cc3962b1d5bc203234c079dd3be76da5947110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "docentes/new.html.twig", 1);
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
        $__internal_f3c8c14f0f5efb22b52b2b269e9a161a8f6f8218f6fe4ffb4ff35147eb2fa8d7 = $this->env->getExtension("native_profiler");
        $__internal_f3c8c14f0f5efb22b52b2b269e9a161a8f6f8218f6fe4ffb4ff35147eb2fa8d7->enter($__internal_f3c8c14f0f5efb22b52b2b269e9a161a8f6f8218f6fe4ffb4ff35147eb2fa8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3c8c14f0f5efb22b52b2b269e9a161a8f6f8218f6fe4ffb4ff35147eb2fa8d7->leave($__internal_f3c8c14f0f5efb22b52b2b269e9a161a8f6f8218f6fe4ffb4ff35147eb2fa8d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3663822bce14b58dd1150c7b5f43bc2800532ac39baeed523a39a46285d326a = $this->env->getExtension("native_profiler");
        $__internal_d3663822bce14b58dd1150c7b5f43bc2800532ac39baeed523a39a46285d326a->enter($__internal_d3663822bce14b58dd1150c7b5f43bc2800532ac39baeed523a39a46285d326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("docentes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d3663822bce14b58dd1150c7b5f43bc2800532ac39baeed523a39a46285d326a->leave($__internal_d3663822bce14b58dd1150c7b5f43bc2800532ac39baeed523a39a46285d326a_prof);

    }

    public function getTemplateName()
    {
        return "docentes/new.html.twig";
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
/*     <h1>Docentes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
