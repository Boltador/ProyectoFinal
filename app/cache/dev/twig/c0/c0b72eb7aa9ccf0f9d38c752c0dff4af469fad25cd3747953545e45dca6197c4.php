<?php

/* :coordinadores:new.html.twig */
class __TwigTemplate_c642fc82a330ca1618fcfdaa619951a0e688aa525508a6349655ebd564e5debb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:new.html.twig", 1);
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
        $__internal_dc2ee07eeb6c1fa4828b0d918012707f9c0be84fc6101ddbb0ac07a018f450ad = $this->env->getExtension("native_profiler");
        $__internal_dc2ee07eeb6c1fa4828b0d918012707f9c0be84fc6101ddbb0ac07a018f450ad->enter($__internal_dc2ee07eeb6c1fa4828b0d918012707f9c0be84fc6101ddbb0ac07a018f450ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2ee07eeb6c1fa4828b0d918012707f9c0be84fc6101ddbb0ac07a018f450ad->leave($__internal_dc2ee07eeb6c1fa4828b0d918012707f9c0be84fc6101ddbb0ac07a018f450ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc77d580cc2cf6fe394f59e36438765026ee55bd9337042003933aedb1bcb59a = $this->env->getExtension("native_profiler");
        $__internal_fc77d580cc2cf6fe394f59e36438765026ee55bd9337042003933aedb1bcb59a->enter($__internal_fc77d580cc2cf6fe394f59e36438765026ee55bd9337042003933aedb1bcb59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_fc77d580cc2cf6fe394f59e36438765026ee55bd9337042003933aedb1bcb59a->leave($__internal_fc77d580cc2cf6fe394f59e36438765026ee55bd9337042003933aedb1bcb59a_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:new.html.twig";
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
/*     <h1>Coordinadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
