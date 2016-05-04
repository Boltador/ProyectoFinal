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
        $__internal_ed54719877fa635f832d2d1583cb7ccbcb4950d8b25cb0a45091b1eac53bdbe2 = $this->env->getExtension("native_profiler");
        $__internal_ed54719877fa635f832d2d1583cb7ccbcb4950d8b25cb0a45091b1eac53bdbe2->enter($__internal_ed54719877fa635f832d2d1583cb7ccbcb4950d8b25cb0a45091b1eac53bdbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed54719877fa635f832d2d1583cb7ccbcb4950d8b25cb0a45091b1eac53bdbe2->leave($__internal_ed54719877fa635f832d2d1583cb7ccbcb4950d8b25cb0a45091b1eac53bdbe2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ccf9391b827acf965b3bf38f0b3a49b6ac3a300dbab72c59f1dd44fc7a3d47 = $this->env->getExtension("native_profiler");
        $__internal_99ccf9391b827acf965b3bf38f0b3a49b6ac3a300dbab72c59f1dd44fc7a3d47->enter($__internal_99ccf9391b827acf965b3bf38f0b3a49b6ac3a300dbab72c59f1dd44fc7a3d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99ccf9391b827acf965b3bf38f0b3a49b6ac3a300dbab72c59f1dd44fc7a3d47->leave($__internal_99ccf9391b827acf965b3bf38f0b3a49b6ac3a300dbab72c59f1dd44fc7a3d47_prof);

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
