<?php

/* :asignaturas:index.html.twig */
class __TwigTemplate_3cddcdc2c876f84458d80eab0ed64689820725e24ce45c60bdbfde0d6649d055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaturas:index.html.twig", 1);
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
        $__internal_338e73cb1dd5843096bac1dc00ff38942b87eb05de6d7b0e7db019524f67ea2a = $this->env->getExtension("native_profiler");
        $__internal_338e73cb1dd5843096bac1dc00ff38942b87eb05de6d7b0e7db019524f67ea2a->enter($__internal_338e73cb1dd5843096bac1dc00ff38942b87eb05de6d7b0e7db019524f67ea2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338e73cb1dd5843096bac1dc00ff38942b87eb05de6d7b0e7db019524f67ea2a->leave($__internal_338e73cb1dd5843096bac1dc00ff38942b87eb05de6d7b0e7db019524f67ea2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_168c33b0d8d590e282aec57043e908dec4d37db69fa2650bf65744e9615c8422 = $this->env->getExtension("native_profiler");
        $__internal_168c33b0d8d590e282aec57043e908dec4d37db69fa2650bf65744e9615c8422->enter($__internal_168c33b0d8d590e282aec57043e908dec4d37db69fa2650bf65744e9615c8422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_168c33b0d8d590e282aec57043e908dec4d37db69fa2650bf65744e9615c8422->leave($__internal_168c33b0d8d590e282aec57043e908dec4d37db69fa2650bf65744e9615c8422_prof);

    }

    public function getTemplateName()
    {
        return ":asignaturas:index.html.twig";
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
