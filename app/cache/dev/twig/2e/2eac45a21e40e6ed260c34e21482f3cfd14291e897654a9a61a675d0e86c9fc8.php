<?php

/* :grupos:index.html.twig */
class __TwigTemplate_fcd7430ab010b82f8ef886ccc93c4684dec435e4ac45b5c5e33816cc4173dbbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grupos:index.html.twig", 1);
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
        $__internal_0fb8299a6f1c4c585fc2f7338b9d36659be2b6b730729a5993b8386d1656a83b = $this->env->getExtension("native_profiler");
        $__internal_0fb8299a6f1c4c585fc2f7338b9d36659be2b6b730729a5993b8386d1656a83b->enter($__internal_0fb8299a6f1c4c585fc2f7338b9d36659be2b6b730729a5993b8386d1656a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grupos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb8299a6f1c4c585fc2f7338b9d36659be2b6b730729a5993b8386d1656a83b->leave($__internal_0fb8299a6f1c4c585fc2f7338b9d36659be2b6b730729a5993b8386d1656a83b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da3b391ef2ed4a6d487a51aa9aac5a95d3fedc05ff644667a31e8b4fcd99b40 = $this->env->getExtension("native_profiler");
        $__internal_3da3b391ef2ed4a6d487a51aa9aac5a95d3fedc05ff644667a31e8b4fcd99b40->enter($__internal_3da3b391ef2ed4a6d487a51aa9aac5a95d3fedc05ff644667a31e8b4fcd99b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3da3b391ef2ed4a6d487a51aa9aac5a95d3fedc05ff644667a31e8b4fcd99b40->leave($__internal_3da3b391ef2ed4a6d487a51aa9aac5a95d3fedc05ff644667a31e8b4fcd99b40_prof);

    }

    public function getTemplateName()
    {
        return ":grupos:index.html.twig";
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
