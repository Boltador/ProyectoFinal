<?php

/* planeadores/index.html.twig */
class __TwigTemplate_86c38b06f91e9817bbb896316616262c4098d27b2d9b8999acfb8c043e820d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/index.html.twig", 1);
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
        $__internal_e5472e99934019a879bb15319f617c6ffc3aea39ce7ab0513810942e7d83ad8a = $this->env->getExtension("native_profiler");
        $__internal_e5472e99934019a879bb15319f617c6ffc3aea39ce7ab0513810942e7d83ad8a->enter($__internal_e5472e99934019a879bb15319f617c6ffc3aea39ce7ab0513810942e7d83ad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5472e99934019a879bb15319f617c6ffc3aea39ce7ab0513810942e7d83ad8a->leave($__internal_e5472e99934019a879bb15319f617c6ffc3aea39ce7ab0513810942e7d83ad8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0047b0dc2908274a88dc638faf3379ed62bd164e102ab6130551b7ce7b4dd869 = $this->env->getExtension("native_profiler");
        $__internal_0047b0dc2908274a88dc638faf3379ed62bd164e102ab6130551b7ce7b4dd869->enter($__internal_0047b0dc2908274a88dc638faf3379ed62bd164e102ab6130551b7ce7b4dd869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores list</h1>

    <table>
        <thead>
            <tr>
                <th>Idplan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planeadores"]) ? $context["planeadores"] : $this->getContext($context, "planeadores")));
        foreach ($context['_seq'] as $context["_key"] => $context["planeadore"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planeadores_show", array("id" => $this->getAttribute($context["planeadore"], "idPlan", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["planeadore"], "idPlan", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planeadores_show", array("id" => $this->getAttribute($context["planeadore"], "idPlan", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planeadores_edit", array("id" => $this->getAttribute($context["planeadore"], "idPlan", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planeadore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("planeadores_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_0047b0dc2908274a88dc638faf3379ed62bd164e102ab6130551b7ce7b4dd869->leave($__internal_0047b0dc2908274a88dc638faf3379ed62bd164e102ab6130551b7ce7b4dd869_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Planeadores list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idplan</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for planeadore in planeadores %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('planeadores_show', { 'id': planeadore.idPlan }) }}">{{ planeadore.idPlan }}</a></td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('planeadores_show', { 'id': planeadore.idPlan }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('planeadores_edit', { 'id': planeadore.idPlan }) }}">edit</a>*/
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
/*             <a href="{{ path('planeadores_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
