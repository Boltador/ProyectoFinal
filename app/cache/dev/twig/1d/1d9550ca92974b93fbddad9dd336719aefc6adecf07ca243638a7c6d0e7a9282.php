<?php

/* :grados:new.html.twig */
class __TwigTemplate_56fbe1c41187dc599f83550b7e2f18aa8938d0572ec96f6fa07db60abdb8811d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grados:new.html.twig", 1);
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
        $__internal_b273520ab84788aefe91b39dc0520c077ae1ee57a97bd68bc906a00bf8a89416 = $this->env->getExtension("native_profiler");
        $__internal_b273520ab84788aefe91b39dc0520c077ae1ee57a97bd68bc906a00bf8a89416->enter($__internal_b273520ab84788aefe91b39dc0520c077ae1ee57a97bd68bc906a00bf8a89416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b273520ab84788aefe91b39dc0520c077ae1ee57a97bd68bc906a00bf8a89416->leave($__internal_b273520ab84788aefe91b39dc0520c077ae1ee57a97bd68bc906a00bf8a89416_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9476a452448bf3da428c7649243f794532e8a69c81bd1181d3e9528f0c29baa = $this->env->getExtension("native_profiler");
        $__internal_c9476a452448bf3da428c7649243f794532e8a69c81bd1181d3e9528f0c29baa->enter($__internal_c9476a452448bf3da428c7649243f794532e8a69c81bd1181d3e9528f0c29baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grados_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c9476a452448bf3da428c7649243f794532e8a69c81bd1181d3e9528f0c29baa->leave($__internal_c9476a452448bf3da428c7649243f794532e8a69c81bd1181d3e9528f0c29baa_prof);

    }

    public function getTemplateName()
    {
        return ":grados:new.html.twig";
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
/*     <h1>Grados creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
