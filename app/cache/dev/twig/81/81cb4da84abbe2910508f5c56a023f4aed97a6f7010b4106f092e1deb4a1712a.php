<?php

/* periodos/new.html.twig */
class __TwigTemplate_e85ac77eb925f062f68781560e8f5cb05121b2a7c126b2a379075f0d1078b9a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periodos/new.html.twig", 1);
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
        $__internal_ffd9e38eeff5e3e82f7e81ef8e78f29cef7c2d606b9bd20869c9098d06044fff = $this->env->getExtension("native_profiler");
        $__internal_ffd9e38eeff5e3e82f7e81ef8e78f29cef7c2d606b9bd20869c9098d06044fff->enter($__internal_ffd9e38eeff5e3e82f7e81ef8e78f29cef7c2d606b9bd20869c9098d06044fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd9e38eeff5e3e82f7e81ef8e78f29cef7c2d606b9bd20869c9098d06044fff->leave($__internal_ffd9e38eeff5e3e82f7e81ef8e78f29cef7c2d606b9bd20869c9098d06044fff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0e52cf1647ef55cbbd4227a47bac8b35c558b479b94e87c0495af8b3355c0e7 = $this->env->getExtension("native_profiler");
        $__internal_f0e52cf1647ef55cbbd4227a47bac8b35c558b479b94e87c0495af8b3355c0e7->enter($__internal_f0e52cf1647ef55cbbd4227a47bac8b35c558b479b94e87c0495af8b3355c0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("periodos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f0e52cf1647ef55cbbd4227a47bac8b35c558b479b94e87c0495af8b3355c0e7->leave($__internal_f0e52cf1647ef55cbbd4227a47bac8b35c558b479b94e87c0495af8b3355c0e7_prof);

    }

    public function getTemplateName()
    {
        return "periodos/new.html.twig";
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
/*     <h1>Periodos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
