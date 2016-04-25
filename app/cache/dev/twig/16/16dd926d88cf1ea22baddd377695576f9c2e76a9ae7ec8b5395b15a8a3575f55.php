<?php

/* grados/show.html.twig */
class __TwigTemplate_6710cfde212cda1399bca23b7cb927f8d7b24566cd8686d946efc7a3804b284c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grados/show.html.twig", 1);
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
        $__internal_00bd7ff391804a45cf52f536cb94c378452270b1e80d2d500abf5e4beba511d6 = $this->env->getExtension("native_profiler");
        $__internal_00bd7ff391804a45cf52f536cb94c378452270b1e80d2d500abf5e4beba511d6->enter($__internal_00bd7ff391804a45cf52f536cb94c378452270b1e80d2d500abf5e4beba511d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grados/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00bd7ff391804a45cf52f536cb94c378452270b1e80d2d500abf5e4beba511d6->leave($__internal_00bd7ff391804a45cf52f536cb94c378452270b1e80d2d500abf5e4beba511d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6b550cef5e03b2936cd25ec0f9d9d5b4779b581b37ff9654977ca3f35dbc13f = $this->env->getExtension("native_profiler");
        $__internal_a6b550cef5e03b2936cd25ec0f9d9d5b4779b581b37ff9654977ca3f35dbc13f->enter($__internal_a6b550cef5e03b2936cd25ec0f9d9d5b4779b581b37ff9654977ca3f35dbc13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados</h1>

    <table>
        <tbody>
            <tr>
                <th>Idgrado</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grado"]) ? $context["grado"] : $this->getContext($context, "grado")), "idGrado", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grado</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grado"]) ? $context["grado"] : $this->getContext($context, "grado")), "grado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("grados_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grados_edit", array("id" => $this->getAttribute((isset($context["grado"]) ? $context["grado"] : $this->getContext($context, "grado")), "idGrado", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a6b550cef5e03b2936cd25ec0f9d9d5b4779b581b37ff9654977ca3f35dbc13f->leave($__internal_a6b550cef5e03b2936cd25ec0f9d9d5b4779b581b37ff9654977ca3f35dbc13f_prof);

    }

    public function getTemplateName()
    {
        return "grados/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Grados</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idgrado</th>*/
/*                 <td>{{ grado.idGrado }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Grado</th>*/
/*                 <td>{{ grado.grado }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('grados_edit', { 'id': grado.idGrado }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
