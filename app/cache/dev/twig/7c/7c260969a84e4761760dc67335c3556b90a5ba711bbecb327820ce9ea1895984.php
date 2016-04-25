<?php

/* :competencias:new.html.twig */
class __TwigTemplate_8a8004a4b8d12806b4b73b6fe4ad0b053106013aa3e19d73701b49d970e1cde2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":competencias:new.html.twig", 1);
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
        $__internal_154c45e9331f9078e496fcb2fae467102d0f17e9eb4e8397eeb46af3478ffa27 = $this->env->getExtension("native_profiler");
        $__internal_154c45e9331f9078e496fcb2fae467102d0f17e9eb4e8397eeb46af3478ffa27->enter($__internal_154c45e9331f9078e496fcb2fae467102d0f17e9eb4e8397eeb46af3478ffa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competencias:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_154c45e9331f9078e496fcb2fae467102d0f17e9eb4e8397eeb46af3478ffa27->leave($__internal_154c45e9331f9078e496fcb2fae467102d0f17e9eb4e8397eeb46af3478ffa27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8050e9b56a45f66ae61cfc9107e6ea4c224af57dc0f59780395c79a71975b60 = $this->env->getExtension("native_profiler");
        $__internal_e8050e9b56a45f66ae61cfc9107e6ea4c224af57dc0f59780395c79a71975b60->enter($__internal_e8050e9b56a45f66ae61cfc9107e6ea4c224af57dc0f59780395c79a71975b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("competencias_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e8050e9b56a45f66ae61cfc9107e6ea4c224af57dc0f59780395c79a71975b60->leave($__internal_e8050e9b56a45f66ae61cfc9107e6ea4c224af57dc0f59780395c79a71975b60_prof);

    }

    public function getTemplateName()
    {
        return ":competencias:new.html.twig";
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
/*     <h1>Competencias creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competencias_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
