<?php

/* :usuarios:new.html.twig */
class __TwigTemplate_48a937566ff9d0c783509a78ded616a41c750eba44501876044881915ed31e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:new.html.twig", 1);
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
        $__internal_27bd163e344eac2ecc512f510d73d180aed6a0dafb0ae184b4dab4b13b5c1b43 = $this->env->getExtension("native_profiler");
        $__internal_27bd163e344eac2ecc512f510d73d180aed6a0dafb0ae184b4dab4b13b5c1b43->enter($__internal_27bd163e344eac2ecc512f510d73d180aed6a0dafb0ae184b4dab4b13b5c1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27bd163e344eac2ecc512f510d73d180aed6a0dafb0ae184b4dab4b13b5c1b43->leave($__internal_27bd163e344eac2ecc512f510d73d180aed6a0dafb0ae184b4dab4b13b5c1b43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf2c1365783877032d7c514a6241ad3e87d5981a027e28c7e6402dc3118e40b4 = $this->env->getExtension("native_profiler");
        $__internal_bf2c1365783877032d7c514a6241ad3e87d5981a027e28c7e6402dc3118e40b4->enter($__internal_bf2c1365783877032d7c514a6241ad3e87d5981a027e28c7e6402dc3118e40b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bf2c1365783877032d7c514a6241ad3e87d5981a027e28c7e6402dc3118e40b4->leave($__internal_bf2c1365783877032d7c514a6241ad3e87d5981a027e28c7e6402dc3118e40b4_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:new.html.twig";
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
/*     <h1>Usuarios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
