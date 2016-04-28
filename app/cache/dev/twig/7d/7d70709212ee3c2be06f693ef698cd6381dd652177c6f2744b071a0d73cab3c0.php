<?php

/* :temas:new.html.twig */
class __TwigTemplate_4626c3fa7829f922343fbc4daa92d3cb3e23928348855f401e7dea4eb01ed9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", ":temas:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docente-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3019bba9332443cfd01357839ae85cbc2c1d6105c5927944b72563a05f54f7f8 = $this->env->getExtension("native_profiler");
        $__internal_3019bba9332443cfd01357839ae85cbc2c1d6105c5927944b72563a05f54f7f8->enter($__internal_3019bba9332443cfd01357839ae85cbc2c1d6105c5927944b72563a05f54f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3019bba9332443cfd01357839ae85cbc2c1d6105c5927944b72563a05f54f7f8->leave($__internal_3019bba9332443cfd01357839ae85cbc2c1d6105c5927944b72563a05f54f7f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cbe5f1da7ea11288da98ae5bf3d5a43be4de0b1d46862502eacd930752e7587 = $this->env->getExtension("native_profiler");
        $__internal_4cbe5f1da7ea11288da98ae5bf3d5a43be4de0b1d46862502eacd930752e7587->enter($__internal_4cbe5f1da7ea11288da98ae5bf3d5a43be4de0b1d46862502eacd930752e7587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Temas creation</h1>

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
        
        $__internal_4cbe5f1da7ea11288da98ae5bf3d5a43be4de0b1d46862502eacd930752e7587->leave($__internal_4cbe5f1da7ea11288da98ae5bf3d5a43be4de0b1d46862502eacd930752e7587_prof);

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
/* {% extends 'docente-base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Temas creation</h1>*/
/* */
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <input type="submit" value="Create" />*/
/* {{ form_end(form) }}*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
