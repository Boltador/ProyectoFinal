<?php

/* :usuarios:index.html.twig */
class __TwigTemplate_8385785fc2015f3d163b731eeda93ce1c13cb41f7a0f78e13953a1d05207f5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:index.html.twig", 1);
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
        $__internal_a63aaa1d78d2efadfaf4550189cf7e8c3ef6331521a768d0425a4ea5e16bc971 = $this->env->getExtension("native_profiler");
        $__internal_a63aaa1d78d2efadfaf4550189cf7e8c3ef6331521a768d0425a4ea5e16bc971->enter($__internal_a63aaa1d78d2efadfaf4550189cf7e8c3ef6331521a768d0425a4ea5e16bc971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63aaa1d78d2efadfaf4550189cf7e8c3ef6331521a768d0425a4ea5e16bc971->leave($__internal_a63aaa1d78d2efadfaf4550189cf7e8c3ef6331521a768d0425a4ea5e16bc971_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9428234efb6854cd806f9c4df23ff186431e56374a7e3dfb02a15114fdb1203 = $this->env->getExtension("native_profiler");
        $__internal_c9428234efb6854cd806f9c4df23ff186431e56374a7e3dfb02a15114fdb1203->enter($__internal_c9428234efb6854cd806f9c4df23ff186431e56374a7e3dfb02a15114fdb1203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Salt</th>
                <th>Password</th>
                <th>Isactive</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "salt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["usuario"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("usuarios_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c9428234efb6854cd806f9c4df23ff186431e56374a7e3dfb02a15114fdb1203->leave($__internal_c9428234efb6854cd806f9c4df23ff186431e56374a7e3dfb02a15114fdb1203_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  110 => 37,  98 => 31,  92 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Salt</th>*/
/*                 <th>Password</th>*/
/*                 <th>Isactive</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for usuario in usuarios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('usuarios_show', { 'id': usuario.id }) }}">{{ usuario.id }}</a></td>*/
/*                 <td>{{ usuario.username }}</td>*/
/*                 <td>{{ usuario.salt }}</td>*/
/*                 <td>{{ usuario.password }}</td>*/
/*                 <td>{% if usuario.isActive %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('usuarios_show', { 'id': usuario.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('usuarios_edit', { 'id': usuario.id }) }}">edit</a>*/
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
/*             <a href="{{ path('usuarios_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
