<?php

/* :coordinadores:index.html.twig */
class __TwigTemplate_ed46793cc8a0783076b755093a1fc794cf36d4db6798c487ef9d984ac1b9e4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:index.html.twig", 1);
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
        $__internal_a1ceaedc5e95c929e11931a7bbaba3aaf333041e9b4c3d2aa7a37a2651e18d57 = $this->env->getExtension("native_profiler");
        $__internal_a1ceaedc5e95c929e11931a7bbaba3aaf333041e9b4c3d2aa7a37a2651e18d57->enter($__internal_a1ceaedc5e95c929e11931a7bbaba3aaf333041e9b4c3d2aa7a37a2651e18d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ceaedc5e95c929e11931a7bbaba3aaf333041e9b4c3d2aa7a37a2651e18d57->leave($__internal_a1ceaedc5e95c929e11931a7bbaba3aaf333041e9b4c3d2aa7a37a2651e18d57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17311f25259740d574b0996ff35f7b4541dc9b503504037815afa6374d7f8695 = $this->env->getExtension("native_profiler");
        $__internal_17311f25259740d574b0996ff35f7b4541dc9b503504037815afa6374d7f8695->enter($__internal_17311f25259740d574b0996ff35f7b4541dc9b503504037815afa6374d7f8695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcor</th>
                <th>Nuip</th>
                <th>Nomcor</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["coordinadores"]) ? $context["coordinadores"] : $this->getContext($context, "coordinadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["coordinador"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinadores_show", array("id" => $this->getAttribute($context["coordinador"], "idCor", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "idCor", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "nomCor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "dir", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "movil", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["coordinador"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coordinador"], "usuario", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinadores_show", array("id" => $this->getAttribute($context["coordinador"], "idCor", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinadores_edit", array("id" => $this->getAttribute($context["coordinador"], "idCor", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coordinador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("coordinadores_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_17311f25259740d574b0996ff35f7b4541dc9b503504037815afa6374d7f8695->leave($__internal_17311f25259740d574b0996ff35f7b4541dc9b503504037815afa6374d7f8695_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  121 => 43,  109 => 37,  103 => 34,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Coordinadores list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idcor</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nomcor</th>*/
/*                 <th>Dir</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Movil</th>*/
/*                 <th>Email</th>*/
/*                 <th>Usuario</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for coordinador in coordinadores %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('coordinadores_show', { 'id': coordinador.idCor }) }}">{{ coordinador.idCor }}</a></td>*/
/*                 <td>{{ coordinador.nuip }}</td>*/
/*                 <td>{{ coordinador.nomCor }}</td>*/
/*                 <td>{{ coordinador.dir }}</td>*/
/*                 <td>{{ coordinador.tel }}</td>*/
/*                 <td>{{ coordinador.movil }}</td>*/
/*                 <td>{{ coordinador.email }}</td>*/
/*                 <td>{{ coordinador.usuario.id }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('coordinadores_show', { 'id': coordinador.idCor }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('coordinadores_edit', { 'id': coordinador.idCor }) }}">edit</a>*/
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
/*             <a href="{{ path('coordinadores_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */