<?php

/* estudiantes/show.html.twig */
class __TwigTemplate_846099da91fe34fbeb9947e65c3749b7db0a69386a0a595a9252f325afc4a73b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/show.html.twig", 1);
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
        $__internal_f4611e74cd0cc615c2588b9e3390cb8a97a134bc4d29977dd6e21a3c63a5af7d = $this->env->getExtension("native_profiler");
        $__internal_f4611e74cd0cc615c2588b9e3390cb8a97a134bc4d29977dd6e21a3c63a5af7d->enter($__internal_f4611e74cd0cc615c2588b9e3390cb8a97a134bc4d29977dd6e21a3c63a5af7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4611e74cd0cc615c2588b9e3390cb8a97a134bc4d29977dd6e21a3c63a5af7d->leave($__internal_f4611e74cd0cc615c2588b9e3390cb8a97a134bc4d29977dd6e21a3c63a5af7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be207bba9b6a066ad5f7962badc2157c345cceb9e9dc35bd16ba6db71c8e92a = $this->env->getExtension("native_profiler");
        $__internal_5be207bba9b6a066ad5f7962badc2157c345cceb9e9dc35bd16ba6db71c8e92a->enter($__internal_5be207bba9b6a066ad5f7962badc2157c345cceb9e9dc35bd16ba6db71c8e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes</h1>

    <table>
        <tbody>
            <tr>
                <th>Idest</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "idEst", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nuip</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nuip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomest</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nomEst", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechanac</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "fechaNac", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "fechaNac", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dir</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "dir", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "idEst", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5be207bba9b6a066ad5f7962badc2157c345cceb9e9dc35bd16ba6db71c8e92a->leave($__internal_5be207bba9b6a066ad5f7962badc2157c345cceb9e9dc35bd16ba6db71c8e92a_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  85 => 30,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idest</th>*/
/*                 <td>{{ estudiante.idEst }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nuip</th>*/
/*                 <td>{{ estudiante.nuip }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomest</th>*/
/*                 <td>{{ estudiante.nomEst }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechanac</th>*/
/*                 <td>{% if estudiante.fechaNac %}{{ estudiante.fechaNac|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ estudiante.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dir</th>*/
/*                 <td>{{ estudiante.dir }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_edit', { 'id': estudiante.idEst }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
