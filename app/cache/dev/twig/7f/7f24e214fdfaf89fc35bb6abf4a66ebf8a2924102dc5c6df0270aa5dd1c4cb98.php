<?php

/* :planeadores:new.html.twig */
class __TwigTemplate_db9affeaec90f4c3c80f24557b70fe1d63bbd597b52776bec81c5a6cba214182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planeadores:new.html.twig", 1);
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
        $__internal_da4d4491a0448c28109c06a3c7ff061c3b55bf0146c90f2cb3372bb33aeb1986 = $this->env->getExtension("native_profiler");
        $__internal_da4d4491a0448c28109c06a3c7ff061c3b55bf0146c90f2cb3372bb33aeb1986->enter($__internal_da4d4491a0448c28109c06a3c7ff061c3b55bf0146c90f2cb3372bb33aeb1986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planeadores:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4d4491a0448c28109c06a3c7ff061c3b55bf0146c90f2cb3372bb33aeb1986->leave($__internal_da4d4491a0448c28109c06a3c7ff061c3b55bf0146c90f2cb3372bb33aeb1986_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32faa886288907264ee98416858bdb9fca3d96658e01515566200ff873374929 = $this->env->getExtension("native_profiler");
        $__internal_32faa886288907264ee98416858bdb9fca3d96658e01515566200ff873374929->enter($__internal_32faa886288907264ee98416858bdb9fca3d96658e01515566200ff873374929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_32faa886288907264ee98416858bdb9fca3d96658e01515566200ff873374929->leave($__internal_32faa886288907264ee98416858bdb9fca3d96658e01515566200ff873374929_prof);

    }

    public function getTemplateName()
    {
        return ":planeadores:new.html.twig";
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
/*     <h1>Planeadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
