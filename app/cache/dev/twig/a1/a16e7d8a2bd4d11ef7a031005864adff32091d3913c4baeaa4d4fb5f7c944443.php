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
        $__internal_3a7a60e1bd4a7f05a63681956be80508a5f806946500de5be333eb651eafe316 = $this->env->getExtension("native_profiler");
        $__internal_3a7a60e1bd4a7f05a63681956be80508a5f806946500de5be333eb651eafe316->enter($__internal_3a7a60e1bd4a7f05a63681956be80508a5f806946500de5be333eb651eafe316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a7a60e1bd4a7f05a63681956be80508a5f806946500de5be333eb651eafe316->leave($__internal_3a7a60e1bd4a7f05a63681956be80508a5f806946500de5be333eb651eafe316_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55b93186b970096e3217db12e7e0ed511a34ebf5919a699613d81e89f7273094 = $this->env->getExtension("native_profiler");
        $__internal_55b93186b970096e3217db12e7e0ed511a34ebf5919a699613d81e89f7273094->enter($__internal_55b93186b970096e3217db12e7e0ed511a34ebf5919a699613d81e89f7273094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55b93186b970096e3217db12e7e0ed511a34ebf5919a699613d81e89f7273094->leave($__internal_55b93186b970096e3217db12e7e0ed511a34ebf5919a699613d81e89f7273094_prof);

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
