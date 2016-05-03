<?php

/* :notas:index.html.twig */
class __TwigTemplate_4b73a2bf7239354568618649e07cd765cf02ed20bf216ba4a7df8b71217df067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notas:index.html.twig", 1);
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
        $__internal_418e0ee6bce5739f394e64b7e7d085097d1dbeadfb29a64bc6abf06371b1818c = $this->env->getExtension("native_profiler");
        $__internal_418e0ee6bce5739f394e64b7e7d085097d1dbeadfb29a64bc6abf06371b1818c->enter($__internal_418e0ee6bce5739f394e64b7e7d085097d1dbeadfb29a64bc6abf06371b1818c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_418e0ee6bce5739f394e64b7e7d085097d1dbeadfb29a64bc6abf06371b1818c->leave($__internal_418e0ee6bce5739f394e64b7e7d085097d1dbeadfb29a64bc6abf06371b1818c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_afef6340de2911aa014f84bf063d7b8a8a843e88c8db9e8b804f6ac15b066c96 = $this->env->getExtension("native_profiler");
        $__internal_afef6340de2911aa014f84bf063d7b8a8a843e88c8db9e8b804f6ac15b066c96->enter($__internal_afef6340de2911aa014f84bf063d7b8a8a843e88c8db9e8b804f6ac15b066c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idnota</th>
                <th>Nota</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notas"]) ? $context["notas"] : $this->getContext($context, "notas")));
        foreach ($context['_seq'] as $context["_key"] => $context["nota"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notas_show", array("id" => $this->getAttribute($context["nota"], "idNota", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "idNota", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["nota"], "nota", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notas_show", array("id" => $this->getAttribute($context["nota"], "idNota", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notas_edit", array("id" => $this->getAttribute($context["nota"], "idNota", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nota'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("notas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_afef6340de2911aa014f84bf063d7b8a8a843e88c8db9e8b804f6ac15b066c96->leave($__internal_afef6340de2911aa014f84bf063d7b8a8a843e88c8db9e8b804f6ac15b066c96_prof);

    }

    public function getTemplateName()
    {
        return ":notas:index.html.twig";
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
/*     <h1>Notas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idnota</th>*/
/*                 <th>Nota</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for nota in notas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('notas_show', { 'id': nota.idNota }) }}">{{ nota.idNota }}</a></td>*/
/*                 <td>{{ nota.nota }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('notas_show', { 'id': nota.idNota }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('notas_edit', { 'id': nota.idNota }) }}">edit</a>*/
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
/*             <a href="{{ path('notas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
