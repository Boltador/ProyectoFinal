<?php

/* grupos/index.html.twig */
class __TwigTemplate_e83b28f3ca5ce8048fbfc30da4c14ae0c8dfec50ae261c0234e3753ad7f925f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/index.html.twig", 1);
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
        $__internal_1009c32465d4ed408f84f51492a13f68e9ef8ddc44a7eef30f58a7b235d82feb = $this->env->getExtension("native_profiler");
        $__internal_1009c32465d4ed408f84f51492a13f68e9ef8ddc44a7eef30f58a7b235d82feb->enter($__internal_1009c32465d4ed408f84f51492a13f68e9ef8ddc44a7eef30f58a7b235d82feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1009c32465d4ed408f84f51492a13f68e9ef8ddc44a7eef30f58a7b235d82feb->leave($__internal_1009c32465d4ed408f84f51492a13f68e9ef8ddc44a7eef30f58a7b235d82feb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf95cd9bfdfc1eba64b34fd14aa911b50de6e82398d807691755f53c78843807 = $this->env->getExtension("native_profiler");
        $__internal_bf95cd9bfdfc1eba64b34fd14aa911b50de6e82398d807691755f53c78843807->enter($__internal_bf95cd9bfdfc1eba64b34fd14aa911b50de6e82398d807691755f53c78843807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idgrupo</th>
                <th>Nomenclatura</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grupos"]) ? $context["grupos"] : $this->getContext($context, "grupos")));
        foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupos_show", array("id" => $this->getAttribute($context["grupo"], "idGrupo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "nomenclatura", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupos_show", array("id" => $this->getAttribute($context["grupo"], "idGrupo", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupos_edit", array("id" => $this->getAttribute($context["grupo"], "idGrupo", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("grupos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_bf95cd9bfdfc1eba64b34fd14aa911b50de6e82398d807691755f53c78843807->leave($__internal_bf95cd9bfdfc1eba64b34fd14aa911b50de6e82398d807691755f53c78843807_prof);

    }

    public function getTemplateName()
    {
        return "grupos/index.html.twig";
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
/*     <h1>Grupos list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idgrupo</th>*/
/*                 <th>Nomenclatura</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for grupo in grupos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('grupos_show', { 'id': grupo.idGrupo }) }}">{{ grupo.idGrupo }}</a></td>*/
/*                 <td>{{ grupo.nomenclatura }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('grupos_show', { 'id': grupo.idGrupo }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('grupos_edit', { 'id': grupo.idGrupo }) }}">edit</a>*/
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
/*             <a href="{{ path('grupos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
