<?php

/* :grados:index.html.twig */
class __TwigTemplate_8a78fca10590c4c50675c7112b8a981f95bab283c9c95683ab09ff5520daf37a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grados:index.html.twig", 1);
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
        $__internal_dd6e6dc50c8e1351fee74a7229d28a3d026da3a20d144312dcd73e3f61c04aa1 = $this->env->getExtension("native_profiler");
        $__internal_dd6e6dc50c8e1351fee74a7229d28a3d026da3a20d144312dcd73e3f61c04aa1->enter($__internal_dd6e6dc50c8e1351fee74a7229d28a3d026da3a20d144312dcd73e3f61c04aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd6e6dc50c8e1351fee74a7229d28a3d026da3a20d144312dcd73e3f61c04aa1->leave($__internal_dd6e6dc50c8e1351fee74a7229d28a3d026da3a20d144312dcd73e3f61c04aa1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ac32b59bc1a4d1287badc1d96fd87b2954cd10bd753bce175ebe5faf7268e88 = $this->env->getExtension("native_profiler");
        $__internal_3ac32b59bc1a4d1287badc1d96fd87b2954cd10bd753bce175ebe5faf7268e88->enter($__internal_3ac32b59bc1a4d1287badc1d96fd87b2954cd10bd753bce175ebe5faf7268e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados list</h1>

    <table>
        <thead>
            <tr>
                <th>Idgrado</th>
                <th>Grado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grados"]) ? $context["grados"] : $this->getContext($context, "grados")));
        foreach ($context['_seq'] as $context["_key"] => $context["grado"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grados_show", array("id" => $this->getAttribute($context["grado"], "idGrado", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grado"], "idGrado", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["grado"], "grado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grados_show", array("id" => $this->getAttribute($context["grado"], "idGrado", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grados_edit", array("id" => $this->getAttribute($context["grado"], "idGrado", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("grados_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_3ac32b59bc1a4d1287badc1d96fd87b2954cd10bd753bce175ebe5faf7268e88->leave($__internal_3ac32b59bc1a4d1287badc1d96fd87b2954cd10bd753bce175ebe5faf7268e88_prof);

    }

    public function getTemplateName()
    {
        return ":grados:index.html.twig";
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
/*     <h1>Grados list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idgrado</th>*/
/*                 <th>Grado</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for grado in grados %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('grados_show', { 'id': grado.idGrado }) }}">{{ grado.idGrado }}</a></td>*/
/*                 <td>{{ grado.grado }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('grados_show', { 'id': grado.idGrado }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('grados_edit', { 'id': grado.idGrado }) }}">edit</a>*/
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
/*             <a href="{{ path('grados_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */