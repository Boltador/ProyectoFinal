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
        $__internal_c4f4900b0ac7ed4c76974b62694cc029330bc1c78c5c57fdaf0e56168b07754c = $this->env->getExtension("native_profiler");
        $__internal_c4f4900b0ac7ed4c76974b62694cc029330bc1c78c5c57fdaf0e56168b07754c->enter($__internal_c4f4900b0ac7ed4c76974b62694cc029330bc1c78c5c57fdaf0e56168b07754c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f4900b0ac7ed4c76974b62694cc029330bc1c78c5c57fdaf0e56168b07754c->leave($__internal_c4f4900b0ac7ed4c76974b62694cc029330bc1c78c5c57fdaf0e56168b07754c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ba78d30d5047e40db8447d4bca7a75bfdbde2891a06630bbe56876924387033 = $this->env->getExtension("native_profiler");
        $__internal_1ba78d30d5047e40db8447d4bca7a75bfdbde2891a06630bbe56876924387033->enter($__internal_1ba78d30d5047e40db8447d4bca7a75bfdbde2891a06630bbe56876924387033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ba78d30d5047e40db8447d4bca7a75bfdbde2891a06630bbe56876924387033->leave($__internal_1ba78d30d5047e40db8447d4bca7a75bfdbde2891a06630bbe56876924387033_prof);

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
