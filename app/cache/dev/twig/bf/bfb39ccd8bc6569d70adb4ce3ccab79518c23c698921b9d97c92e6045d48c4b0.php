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
        $__internal_72139d24e8158ef5993f819ea24c51cfd11ec2ae38becf233a43b95166747bca = $this->env->getExtension("native_profiler");
        $__internal_72139d24e8158ef5993f819ea24c51cfd11ec2ae38becf233a43b95166747bca->enter($__internal_72139d24e8158ef5993f819ea24c51cfd11ec2ae38becf233a43b95166747bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72139d24e8158ef5993f819ea24c51cfd11ec2ae38becf233a43b95166747bca->leave($__internal_72139d24e8158ef5993f819ea24c51cfd11ec2ae38becf233a43b95166747bca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b66234e3e71d8e71629d8066d62e27341a4150e3a334eabadecbff9c1a64144d = $this->env->getExtension("native_profiler");
        $__internal_b66234e3e71d8e71629d8066d62e27341a4150e3a334eabadecbff9c1a64144d->enter($__internal_b66234e3e71d8e71629d8066d62e27341a4150e3a334eabadecbff9c1a64144d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b66234e3e71d8e71629d8066d62e27341a4150e3a334eabadecbff9c1a64144d->leave($__internal_b66234e3e71d8e71629d8066d62e27341a4150e3a334eabadecbff9c1a64144d_prof);

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
