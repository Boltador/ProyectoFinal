<?php

/* notas/show.html.twig */
class __TwigTemplate_d228c7877222e77fbec0eb5cf65680e127e55fd9e3e050e62c83b50924294d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notas/show.html.twig", 1);
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
        $__internal_71be8ce9bf974cc138e238f1ec1873a6b26038caa845d1d95312cc0c7968c7a9 = $this->env->getExtension("native_profiler");
        $__internal_71be8ce9bf974cc138e238f1ec1873a6b26038caa845d1d95312cc0c7968c7a9->enter($__internal_71be8ce9bf974cc138e238f1ec1873a6b26038caa845d1d95312cc0c7968c7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71be8ce9bf974cc138e238f1ec1873a6b26038caa845d1d95312cc0c7968c7a9->leave($__internal_71be8ce9bf974cc138e238f1ec1873a6b26038caa845d1d95312cc0c7968c7a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_042c792e9f6b1c6a52fcb0cf7fb76e226a3d01a83cbc8da96fc129a077d2674d = $this->env->getExtension("native_profiler");
        $__internal_042c792e9f6b1c6a52fcb0cf7fb76e226a3d01a83cbc8da96fc129a077d2674d->enter($__internal_042c792e9f6b1c6a52fcb0cf7fb76e226a3d01a83cbc8da96fc129a077d2674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idnota</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "idNota", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nota</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "nota", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("notas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notas_edit", array("id" => $this->getAttribute((isset($context["nota"]) ? $context["nota"] : $this->getContext($context, "nota")), "idNota", array()))), "html", null, true);
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
        
        $__internal_042c792e9f6b1c6a52fcb0cf7fb76e226a3d01a83cbc8da96fc129a077d2674d->leave($__internal_042c792e9f6b1c6a52fcb0cf7fb76e226a3d01a83cbc8da96fc129a077d2674d_prof);

    }

    public function getTemplateName()
    {
        return "notas/show.html.twig";
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
/*     <h1>Notas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idnota</th>*/
/*                 <td>{{ nota.idNota }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nota</th>*/
/*                 <td>{{ nota.nota }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('notas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('notas_edit', { 'id': nota.idNota }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
