<?php

/* asignaciones/index.html.twig */
class __TwigTemplate_60320bd2288ce8695cf01da965b2f47a6daee14e9039a603a0997dbe134c45e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaciones/index.html.twig", 1);
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
        $__internal_4937614fa241192ca345eaf0093b56355b6192dd3bc17347062885382225f858 = $this->env->getExtension("native_profiler");
        $__internal_4937614fa241192ca345eaf0093b56355b6192dd3bc17347062885382225f858->enter($__internal_4937614fa241192ca345eaf0093b56355b6192dd3bc17347062885382225f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaciones/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4937614fa241192ca345eaf0093b56355b6192dd3bc17347062885382225f858->leave($__internal_4937614fa241192ca345eaf0093b56355b6192dd3bc17347062885382225f858_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0db1e46b2390a0ee7206c3057ac34dc93048b5f800a786c4b3ca7c3f34fb44d = $this->env->getExtension("native_profiler");
        $__internal_f0db1e46b2390a0ee7206c3057ac34dc93048b5f800a786c4b3ca7c3f34fb44d->enter($__internal_f0db1e46b2390a0ee7206c3057ac34dc93048b5f800a786c4b3ca7c3f34fb44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones list</h1>

    <table>
        <thead>
            <tr>
                <th>Idasignacion</th>
                <th>Asignatura</th>
                <th>Docente</th>
                <th>Grupo</th>
                <th>Año Lectivo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaciones_show", array("id" => $this->getAttribute($context["asignacion"], "idAsignacion", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "idAsignacion", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "asignatura", array()), "nomAsig", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "docente", array()), "nomDoc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "grado", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "grupo", array()), "nomenclatura", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "aLectivo", array()), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["asignacion"], "aLectivo", array()), "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaciones_show", array("id" => $this->getAttribute($context["asignacion"], "idAsignacion", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaciones_edit", array("id" => $this->getAttribute($context["asignacion"], "idAsignacion", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("asignaciones_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f0db1e46b2390a0ee7206c3057ac34dc93048b5f800a786c4b3ca7c3f34fb44d->leave($__internal_f0db1e46b2390a0ee7206c3057ac34dc93048b5f800a786c4b3ca7c3f34fb44d_prof);

    }

    public function getTemplateName()
    {
        return "asignaciones/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Asignaciones list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idasignacion</th>*/
/*                 <th>Asignatura</th>*/
/*                 <th>Docente</th>*/
/*                 <th>Grupo</th>*/
/*                 <th>Año Lectivo</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for asignacion in asignaciones %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('asignaciones_show', { 'id': asignacion.idAsignacion }) }}">{{ asignacion.idAsignacion }}</a></td>*/
/*                 <td>{{ asignacion.asignatura.nomAsig }}</td>*/
/*                 <td>{{ asignacion.docente.nomDoc }}</td>*/
/*                 <td>{{ asignacion.grupo.grado }} - {{ asignacion.grupo.nomenclatura }}</td>*/
/*                 <td>{{ asignacion.aLectivo.fechaInicio|date("d/m/Y") }} - {{ asignacion.aLectivo.fechaFinal|date("d/m/Y") }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('asignaciones_show', { 'id': asignacion.idAsignacion }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('asignaciones_edit', { 'id': asignacion.idAsignacion }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
