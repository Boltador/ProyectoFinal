<?php

/* asignaturas/index.html.twig */
class __TwigTemplate_80d6cb2169a046e05402fa084863941219f7bc4e4937b80d7071e9e514549c62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaturas/index.html.twig", 1);
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
        $__internal_cff14bea93831f1530f2026398459748c676a25c4add9f8c8ea6858395ad0540 = $this->env->getExtension("native_profiler");
        $__internal_cff14bea93831f1530f2026398459748c676a25c4add9f8c8ea6858395ad0540->enter($__internal_cff14bea93831f1530f2026398459748c676a25c4add9f8c8ea6858395ad0540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaturas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff14bea93831f1530f2026398459748c676a25c4add9f8c8ea6858395ad0540->leave($__internal_cff14bea93831f1530f2026398459748c676a25c4add9f8c8ea6858395ad0540_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_324921c564527e975f50d715e03ef52a64e96a0df926c7af6b70a0856a03b1ac = $this->env->getExtension("native_profiler");
        $__internal_324921c564527e975f50d715e03ef52a64e96a0df926c7af6b70a0856a03b1ac->enter($__internal_324921c564527e975f50d715e03ef52a64e96a0df926c7af6b70a0856a03b1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idasig</th>
                <th>Nomasig</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaturas"]) ? $context["asignaturas"] : $this->getContext($context, "asignaturas")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignatura"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_show", array("id" => $this->getAttribute($context["asignatura"], "idAsig", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignatura"], "idAsig", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignatura"], "nomAsig", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_show", array("id" => $this->getAttribute($context["asignatura"], "idAsig", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_edit", array("id" => $this->getAttribute($context["asignatura"], "idAsig", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignatura'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("asignaturas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_324921c564527e975f50d715e03ef52a64e96a0df926c7af6b70a0856a03b1ac->leave($__internal_324921c564527e975f50d715e03ef52a64e96a0df926c7af6b70a0856a03b1ac_prof);

    }

    public function getTemplateName()
    {
        return "asignaturas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Asignaturas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idasig</th>*/
/*                 <th>Nomasig</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for asignatura in asignaturas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('asignaturas_show', { 'id': asignatura.idAsig }) }}">{{ asignatura.idAsig }}</a></td>*/
/*                 <td>{{ asignatura.nomAsig }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('asignaturas_show', { 'id': asignatura.idAsig }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('asignaturas_edit', { 'id': asignatura.idAsig }) }}">edit</a>*/
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
/*             <a href="{{ path('asignaturas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
