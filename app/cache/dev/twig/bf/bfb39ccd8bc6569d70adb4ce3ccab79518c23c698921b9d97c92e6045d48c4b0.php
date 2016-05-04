<?php

/* docentes/index.html.twig */
class __TwigTemplate_2e1afa844dfe90a0a088ac946ef0ce8ed1ac07bc28e59f021763576dd3c31b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "docentes/index.html.twig", 1);
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
        $__internal_23803d12a991e0c4955da6138953113a6535c5a1dd994cebe30f74dbb567720e = $this->env->getExtension("native_profiler");
        $__internal_23803d12a991e0c4955da6138953113a6535c5a1dd994cebe30f74dbb567720e->enter($__internal_23803d12a991e0c4955da6138953113a6535c5a1dd994cebe30f74dbb567720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23803d12a991e0c4955da6138953113a6535c5a1dd994cebe30f74dbb567720e->leave($__internal_23803d12a991e0c4955da6138953113a6535c5a1dd994cebe30f74dbb567720e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b86f410baf8d9baef63b8cb85ca7409144073ec362aa9d89ae616eff24b202c = $this->env->getExtension("native_profiler");
        $__internal_5b86f410baf8d9baef63b8cb85ca7409144073ec362aa9d89ae616eff24b202c->enter($__internal_5b86f410baf8d9baef63b8cb85ca7409144073ec362aa9d89ae616eff24b202c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Iddoc</th>
                <th>Nuip</th>
                <th>Nomdoc</th>
                <th>Dir</th>
                <th>Tel</th>
                <th>Movil</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docentes"]) ? $context["docentes"] : $this->getContext($context, "docentes")));
        foreach ($context['_seq'] as $context["_key"] => $context["docente"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("docentes_show", array("id" => $this->getAttribute($context["docente"], "idDoc", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "idDoc", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "nomDoc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "dir", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "movil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["docente"], "email", array()), "html", null, true);
            echo "</td>
                ";
            // line 30
            if ($this->getAttribute($context["docente"], "usuario", array())) {
                // line 31
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["docente"], "usuario", array()), "id", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 33
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("docentes_show", array("id" => $this->getAttribute($context["docente"], "idDoc", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("docentes_edit", array("id" => $this->getAttribute($context["docente"], "idDoc", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("docentes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_5b86f410baf8d9baef63b8cb85ca7409144073ec362aa9d89ae616eff24b202c->leave($__internal_5b86f410baf8d9baef63b8cb85ca7409144073ec362aa9d89ae616eff24b202c_prof);

    }

    public function getTemplateName()
    {
        return "docentes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  127 => 45,  115 => 39,  109 => 36,  104 => 33,  98 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Docentes list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Iddoc</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nomdoc</th>*/
/*                 <th>Dir</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Movil</th>*/
/*                 <th>Email</th>*/
/*                 <th>Usuario</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for docente in docentes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('docentes_show', { 'id': docente.idDoc }) }}">{{ docente.idDoc }}</a></td>*/
/*                 <td>{{ docente.nuip }}</td>*/
/*                 <td>{{ docente.nomDoc }}</td>*/
/*                 <td>{{ docente.dir }}</td>*/
/*                 <td>{{ docente.tel }}</td>*/
/*                 <td>{{ docente.movil }}</td>*/
/*                 <td>{{ docente.email }}</td>*/
/*                 {% if docente.usuario %}*/
/*                 <td>{{ docente.usuario.id }}</td>*/
/*                 {% endif %}*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('docentes_show', { 'id': docente.idDoc }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('docentes_edit', { 'id': docente.idDoc }) }}">edit</a>*/
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
/*             <a href="{{ path('docentes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
