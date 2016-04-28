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
        $__internal_13a6a9621209fd3790e2743dc126d76cdc4d6cb7ebe97d5b89b3eb6b8839c84b = $this->env->getExtension("native_profiler");
        $__internal_13a6a9621209fd3790e2743dc126d76cdc4d6cb7ebe97d5b89b3eb6b8839c84b->enter($__internal_13a6a9621209fd3790e2743dc126d76cdc4d6cb7ebe97d5b89b3eb6b8839c84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a6a9621209fd3790e2743dc126d76cdc4d6cb7ebe97d5b89b3eb6b8839c84b->leave($__internal_13a6a9621209fd3790e2743dc126d76cdc4d6cb7ebe97d5b89b3eb6b8839c84b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3099b802a8cf6eabbbe987e7c98a27f7cc61c72d5b4752ea4c72658d7bfedde4 = $this->env->getExtension("native_profiler");
        $__internal_3099b802a8cf6eabbbe987e7c98a27f7cc61c72d5b4752ea4c72658d7bfedde4->enter($__internal_3099b802a8cf6eabbbe987e7c98a27f7cc61c72d5b4752ea4c72658d7bfedde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3099b802a8cf6eabbbe987e7c98a27f7cc61c72d5b4752ea4c72658d7bfedde4->leave($__internal_3099b802a8cf6eabbbe987e7c98a27f7cc61c72d5b4752ea4c72658d7bfedde4_prof);

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
