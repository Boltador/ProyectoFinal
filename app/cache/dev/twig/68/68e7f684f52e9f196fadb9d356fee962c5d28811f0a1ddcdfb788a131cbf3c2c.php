<?php

/* grupos/new.html.twig */
class __TwigTemplate_b64d5446b7d319d4561cb6852374b2d94b78ab848d1ec941039f04b92943324a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/new.html.twig", 1);
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
        $__internal_6a519fa8c3bf9cb76e0f6a346394e9bcbf0a5fb4f77b9fe51557aace33e1c00b = $this->env->getExtension("native_profiler");
        $__internal_6a519fa8c3bf9cb76e0f6a346394e9bcbf0a5fb4f77b9fe51557aace33e1c00b->enter($__internal_6a519fa8c3bf9cb76e0f6a346394e9bcbf0a5fb4f77b9fe51557aace33e1c00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a519fa8c3bf9cb76e0f6a346394e9bcbf0a5fb4f77b9fe51557aace33e1c00b->leave($__internal_6a519fa8c3bf9cb76e0f6a346394e9bcbf0a5fb4f77b9fe51557aace33e1c00b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9e36dd4939526f20a153b77134182679ad02c084ea675b887449a7350d8c6c = $this->env->getExtension("native_profiler");
        $__internal_fc9e36dd4939526f20a153b77134182679ad02c084ea675b887449a7350d8c6c->enter($__internal_fc9e36dd4939526f20a153b77134182679ad02c084ea675b887449a7350d8c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grupos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fc9e36dd4939526f20a153b77134182679ad02c084ea675b887449a7350d8c6c->leave($__internal_fc9e36dd4939526f20a153b77134182679ad02c084ea675b887449a7350d8c6c_prof);

    }

    public function getTemplateName()
    {
        return "grupos/new.html.twig";
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
/*     <h1>Grupos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
