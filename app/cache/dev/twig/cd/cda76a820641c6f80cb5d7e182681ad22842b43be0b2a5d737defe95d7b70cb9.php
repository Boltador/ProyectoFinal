<?php

/* :temas:index.html.twig */
class __TwigTemplate_fbf14a98f81c858b1bbe97339b7e53f8c7a2bccd47f6f65583562ad16db1b2f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":temas:index.html.twig", 1);
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
        $__internal_2e077771e6172ddbd0e623dbd6e8f229529344be5d725dec69ef63ccec837665 = $this->env->getExtension("native_profiler");
        $__internal_2e077771e6172ddbd0e623dbd6e8f229529344be5d725dec69ef63ccec837665->enter($__internal_2e077771e6172ddbd0e623dbd6e8f229529344be5d725dec69ef63ccec837665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e077771e6172ddbd0e623dbd6e8f229529344be5d725dec69ef63ccec837665->leave($__internal_2e077771e6172ddbd0e623dbd6e8f229529344be5d725dec69ef63ccec837665_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a5a9570edf833cbda12667a3a45743fe2e0ba6eaa3a47f81013ba77637f07b = $this->env->getExtension("native_profiler");
        $__internal_c4a5a9570edf833cbda12667a3a45743fe2e0ba6eaa3a47f81013ba77637f07b->enter($__internal_c4a5a9570edf833cbda12667a3a45743fe2e0ba6eaa3a47f81013ba77637f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas list</h1>

    <table>
        <thead>
            <tr>
                <th>Idtema</th>
                <th>Nomtema</th>
                <th>Fechaintema</th>
                <th>Fechafintema</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temas"]) ? $context["temas"] : $this->getContext($context, "temas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tema"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temas_show", array("id" => $this->getAttribute($context["tema"], "idTema", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tema"], "idTema", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tema"], "nomTema", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["tema"], "fechaInTema", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tema"], "fechaInTema", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["tema"], "fechaFinTema", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tema"], "fechaFinTema", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temas_show", array("id" => $this->getAttribute($context["tema"], "idTema", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temas_edit", array("id" => $this->getAttribute($context["tema"], "idTema", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tema'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("temas_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_c4a5a9570edf833cbda12667a3a45743fe2e0ba6eaa3a47f81013ba77637f07b->leave($__internal_c4a5a9570edf833cbda12667a3a45743fe2e0ba6eaa3a47f81013ba77637f07b_prof);

    }

    public function getTemplateName()
    {
        return ":temas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  78 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Temas list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idtema</th>*/
/*                 <th>Nomtema</th>*/
/*                 <th>Fechaintema</th>*/
/*                 <th>Fechafintema</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tema in temas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('temas_show', { 'id': tema.idTema }) }}">{{ tema.idTema }}</a></td>*/
/*                 <td>{{ tema.nomTema }}</td>*/
/*                 <td>{% if tema.fechaInTema %}{{ tema.fechaInTema|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if tema.fechaFinTema %}{{ tema.fechaFinTema|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('temas_show', { 'id': tema.idTema }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('temas_edit', { 'id': tema.idTema }) }}">edit</a>*/
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
/*             <a href="{{ path('temas_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
