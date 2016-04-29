<?php

/* acudientes/new.html.twig */
class __TwigTemplate_34b8803d2fc9e500fed37006125008d72ed4ff75bcacb6e8fb1118f84123d02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acudientes/new.html.twig", 1);
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
        $__internal_104cfc7d9e674ca26a5405cc4417d8ab78e5902b977196c48711f3fe1625c951 = $this->env->getExtension("native_profiler");
        $__internal_104cfc7d9e674ca26a5405cc4417d8ab78e5902b977196c48711f3fe1625c951->enter($__internal_104cfc7d9e674ca26a5405cc4417d8ab78e5902b977196c48711f3fe1625c951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_104cfc7d9e674ca26a5405cc4417d8ab78e5902b977196c48711f3fe1625c951->leave($__internal_104cfc7d9e674ca26a5405cc4417d8ab78e5902b977196c48711f3fe1625c951_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_201553c122600f409b87f5259a55d81bc8c26d02f2be31ce43590bed2e770acd = $this->env->getExtension("native_profiler");
        $__internal_201553c122600f409b87f5259a55d81bc8c26d02f2be31ce43590bed2e770acd->enter($__internal_201553c122600f409b87f5259a55d81bc8c26d02f2be31ce43590bed2e770acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_201553c122600f409b87f5259a55d81bc8c26d02f2be31ce43590bed2e770acd->leave($__internal_201553c122600f409b87f5259a55d81bc8c26d02f2be31ce43590bed2e770acd_prof);

    }

    public function getTemplateName()
    {
        return "acudientes/new.html.twig";
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
/*     <h1>Acudientes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
