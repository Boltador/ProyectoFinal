<?php

/* coordinadores/new.html.twig */
class __TwigTemplate_e9977973704e18b304decca172b4b65fea36f2a2dcd9d968b654c9de109d5010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinadores/new.html.twig", 1);
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
        $__internal_b33d5123e9e0c4dca275cda2c226f66aea97f6055ac3efe5f0b48c07dbfbd545 = $this->env->getExtension("native_profiler");
        $__internal_b33d5123e9e0c4dca275cda2c226f66aea97f6055ac3efe5f0b48c07dbfbd545->enter($__internal_b33d5123e9e0c4dca275cda2c226f66aea97f6055ac3efe5f0b48c07dbfbd545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33d5123e9e0c4dca275cda2c226f66aea97f6055ac3efe5f0b48c07dbfbd545->leave($__internal_b33d5123e9e0c4dca275cda2c226f66aea97f6055ac3efe5f0b48c07dbfbd545_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_959071eccd99cc7a973d12923b2957d1e1d1d1c0685ad716eb112fa71123eb23 = $this->env->getExtension("native_profiler");
        $__internal_959071eccd99cc7a973d12923b2957d1e1d1d1c0685ad716eb112fa71123eb23->enter($__internal_959071eccd99cc7a973d12923b2957d1e1d1d1c0685ad716eb112fa71123eb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_959071eccd99cc7a973d12923b2957d1e1d1d1c0685ad716eb112fa71123eb23->leave($__internal_959071eccd99cc7a973d12923b2957d1e1d1d1c0685ad716eb112fa71123eb23_prof);

    }

    public function getTemplateName()
    {
        return "coordinadores/new.html.twig";
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
