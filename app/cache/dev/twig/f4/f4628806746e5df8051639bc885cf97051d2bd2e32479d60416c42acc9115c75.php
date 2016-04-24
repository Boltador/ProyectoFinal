<?php

/* :acudientes:new.html.twig */
class __TwigTemplate_3ecc16ec80f0110ba9c6f8d526767f56f8437d89acd8a13dd37eed342d94a32e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acudientes:new.html.twig", 1);
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
        $__internal_965c5669bb0122b063a145e7a8ff1d889a37daebb2ec5ace021329260fa74512 = $this->env->getExtension("native_profiler");
        $__internal_965c5669bb0122b063a145e7a8ff1d889a37daebb2ec5ace021329260fa74512->enter($__internal_965c5669bb0122b063a145e7a8ff1d889a37daebb2ec5ace021329260fa74512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acudientes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965c5669bb0122b063a145e7a8ff1d889a37daebb2ec5ace021329260fa74512->leave($__internal_965c5669bb0122b063a145e7a8ff1d889a37daebb2ec5ace021329260fa74512_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5fd33418934edf11e4e64c6318ae4c0cd9ed29db26c4311778597f21ce5d2f9 = $this->env->getExtension("native_profiler");
        $__internal_e5fd33418934edf11e4e64c6318ae4c0cd9ed29db26c4311778597f21ce5d2f9->enter($__internal_e5fd33418934edf11e4e64c6318ae4c0cd9ed29db26c4311778597f21ce5d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5fd33418934edf11e4e64c6318ae4c0cd9ed29db26c4311778597f21ce5d2f9->leave($__internal_e5fd33418934edf11e4e64c6318ae4c0cd9ed29db26c4311778597f21ce5d2f9_prof);

    }

    public function getTemplateName()
    {
        return ":acudientes:new.html.twig";
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
