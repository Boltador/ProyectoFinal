<?php

/* acudientes/index.html.twig */
class __TwigTemplate_c5113e0198857d6a1e3c5dc69d4043b09e1efda77eb296f996602194d022c3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acudientes/index.html.twig", 1);
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
        $__internal_ab093a2e65ff45c51c6233011876837ec6d6f5f4e279aaa7b46d2da1b88cf472 = $this->env->getExtension("native_profiler");
        $__internal_ab093a2e65ff45c51c6233011876837ec6d6f5f4e279aaa7b46d2da1b88cf472->enter($__internal_ab093a2e65ff45c51c6233011876837ec6d6f5f4e279aaa7b46d2da1b88cf472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab093a2e65ff45c51c6233011876837ec6d6f5f4e279aaa7b46d2da1b88cf472->leave($__internal_ab093a2e65ff45c51c6233011876837ec6d6f5f4e279aaa7b46d2da1b88cf472_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf43b5aa0449b04bb5acc2da8b702a5430657cbe21b3cee87a6fefe23aa6b8ad = $this->env->getExtension("native_profiler");
        $__internal_bf43b5aa0449b04bb5acc2da8b702a5430657cbe21b3cee87a6fefe23aa6b8ad->enter($__internal_bf43b5aa0449b04bb5acc2da8b702a5430657cbe21b3cee87a6fefe23aa6b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes list</h1>

    <table>
        <thead>
            <tr>
                <th>Idacu</th>
                <th>Nuip</th>
                <th>Nomacu</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acudientes"]) ? $context["acudientes"] : $this->getContext($context, "acudientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["acudiente"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acudientes_show", array("id" => $this->getAttribute($context["acudiente"], "idAcu", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["acudiente"], "idAcu", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["acudiente"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["acudiente"], "nomAcu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["acudiente"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acudientes_show", array("id" => $this->getAttribute($context["acudiente"], "idAcu", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acudientes_edit", array("id" => $this->getAttribute($context["acudiente"], "idAcu", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acudiente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("acudientes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_bf43b5aa0449b04bb5acc2da8b702a5430657cbe21b3cee87a6fefe23aa6b8ad->leave($__internal_bf43b5aa0449b04bb5acc2da8b702a5430657cbe21b3cee87a6fefe23aa6b8ad_prof);

    }

    public function getTemplateName()
    {
        return "acudientes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Acudientes list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idacu</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nomacu</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for acudiente in acudientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('acudientes_show', { 'id': acudiente.idAcu }) }}">{{ acudiente.idAcu }}</a></td>*/
/*                 <td>{{ acudiente.nuip }}</td>*/
/*                 <td>{{ acudiente.nomAcu }}</td>*/
/*                 <td>{{ acudiente.email }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('acudientes_show', { 'id': acudiente.idAcu }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('acudientes_edit', { 'id': acudiente.idAcu }) }}">edit</a>*/
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
/*             <a href="{{ path('acudientes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
