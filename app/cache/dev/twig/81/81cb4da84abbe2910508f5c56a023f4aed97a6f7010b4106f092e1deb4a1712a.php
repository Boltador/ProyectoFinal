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
        $__internal_1ec1f35c1bd54ba6fe78f3518094d6a3994e600f7ebf4d2183a95a15103f5298 = $this->env->getExtension("native_profiler");
        $__internal_1ec1f35c1bd54ba6fe78f3518094d6a3994e600f7ebf4d2183a95a15103f5298->enter($__internal_1ec1f35c1bd54ba6fe78f3518094d6a3994e600f7ebf4d2183a95a15103f5298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec1f35c1bd54ba6fe78f3518094d6a3994e600f7ebf4d2183a95a15103f5298->leave($__internal_1ec1f35c1bd54ba6fe78f3518094d6a3994e600f7ebf4d2183a95a15103f5298_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b79dc2f4ae1395e57898e194bae7ea8458a69565c9c06d310b7449b17d14c32f = $this->env->getExtension("native_profiler");
        $__internal_b79dc2f4ae1395e57898e194bae7ea8458a69565c9c06d310b7449b17d14c32f->enter($__internal_b79dc2f4ae1395e57898e194bae7ea8458a69565c9c06d310b7449b17d14c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b79dc2f4ae1395e57898e194bae7ea8458a69565c9c06d310b7449b17d14c32f->leave($__internal_b79dc2f4ae1395e57898e194bae7ea8458a69565c9c06d310b7449b17d14c32f_prof);

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
