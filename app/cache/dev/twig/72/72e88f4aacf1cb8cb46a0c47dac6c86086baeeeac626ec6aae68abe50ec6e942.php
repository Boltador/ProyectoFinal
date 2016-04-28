<?php

/* usuarios/new.html.twig */
class __TwigTemplate_de78bb3eda8057780490db7a96c9c4fdfec0b16770aefab31447c98564942b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/new.html.twig", 1);
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
        $__internal_59319e37c6897fe9e593ce5e0cf6c6a8a2b066216e38a1e14e6fb2733d3d4978 = $this->env->getExtension("native_profiler");
        $__internal_59319e37c6897fe9e593ce5e0cf6c6a8a2b066216e38a1e14e6fb2733d3d4978->enter($__internal_59319e37c6897fe9e593ce5e0cf6c6a8a2b066216e38a1e14e6fb2733d3d4978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59319e37c6897fe9e593ce5e0cf6c6a8a2b066216e38a1e14e6fb2733d3d4978->leave($__internal_59319e37c6897fe9e593ce5e0cf6c6a8a2b066216e38a1e14e6fb2733d3d4978_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85bab7c628dfef88fcd02504deb6cab76ed32fe8f61366023785d68d3266e4f3 = $this->env->getExtension("native_profiler");
        $__internal_85bab7c628dfef88fcd02504deb6cab76ed32fe8f61366023785d68d3266e4f3->enter($__internal_85bab7c628dfef88fcd02504deb6cab76ed32fe8f61366023785d68d3266e4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85bab7c628dfef88fcd02504deb6cab76ed32fe8f61366023785d68d3266e4f3->leave($__internal_85bab7c628dfef88fcd02504deb6cab76ed32fe8f61366023785d68d3266e4f3_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/new.html.twig";
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
