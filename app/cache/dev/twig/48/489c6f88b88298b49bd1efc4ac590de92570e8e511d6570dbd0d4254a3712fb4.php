<?php

/* asignaciones/show.html.twig */
class __TwigTemplate_e8202456e2142d5e73d56185a6def97d97d6165a97fd9447b877192c643598f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaciones/show.html.twig", 1);
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
        $__internal_d2406c74b027987b80e7551e1a16c2c48077e44a2fd56ec57ce6653ac1dff5d2 = $this->env->getExtension("native_profiler");
        $__internal_d2406c74b027987b80e7551e1a16c2c48077e44a2fd56ec57ce6653ac1dff5d2->enter($__internal_d2406c74b027987b80e7551e1a16c2c48077e44a2fd56ec57ce6653ac1dff5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaciones/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2406c74b027987b80e7551e1a16c2c48077e44a2fd56ec57ce6653ac1dff5d2->leave($__internal_d2406c74b027987b80e7551e1a16c2c48077e44a2fd56ec57ce6653ac1dff5d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7607ce5cdf23d277898e83dc31d94910bf3eca422ce8b9752149f40d1fc56f2f = $this->env->getExtension("native_profiler");
        $__internal_7607ce5cdf23d277898e83dc31d94910bf3eca422ce8b9752149f40d1fc56f2f->enter($__internal_7607ce5cdf23d277898e83dc31d94910bf3eca422ce8b9752149f40d1fc56f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones</h1>

    <table>
        <tbody>
            <tr>
                <th>Idasignacion</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "idAsignacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Asignatura</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "asignatura", array()), "nomAsig", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Docente</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "docente", array()), "nomDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grupo</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "grupo", array()), "grado", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "grupo", array()), "nomenclatura", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Año Lectivo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "aLectivo", array()), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "aLectivo", array()), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaciones_edit", array("id" => $this->getAttribute((isset($context["asignacion"]) ? $context["asignacion"] : $this->getContext($context, "asignacion")), "idAsignacion", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7607ce5cdf23d277898e83dc31d94910bf3eca422ce8b9752149f40d1fc56f2f->leave($__internal_7607ce5cdf23d277898e83dc31d94910bf3eca422ce8b9752149f40d1fc56f2f_prof);

    }

    public function getTemplateName()
    {
        return "asignaciones/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Asignaciones</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idasignacion</th>*/
/*                 <td>{{ asignacion.idAsignacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Asignatura</th>*/
/*                 <td>{{ asignacion.asignatura.nomAsig }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Docente</th>*/
/*                 <td>{{ asignacion.docente.nomDoc }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Grupo</th>*/
/*                 <td>{{ asignacion.grupo.grado }} - {{ asignacion.grupo.nomenclatura }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Año Lectivo</th>*/
/*                 <td>{{ asignacion.aLectivo.fechaInicio|date("d/m/Y") }} - {{ asignacion.aLectivo.fechaFinal|date("d/m/Y") }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_edit', { 'id': asignacion.idAsignacion }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
