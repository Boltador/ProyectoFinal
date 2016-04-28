<?php

/* coordinadores/show.html.twig */
class __TwigTemplate_7f50e90659c78e9c95a47cb712eea5a30c6f534dfa461103334ba6c937c97d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinadores/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Coordinadores</h1>

<table>
    <tbody>
        <tr>
            <th>Idcor</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "idCor", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nuip</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "nuip", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nomcor</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "nomCor", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dir</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "dir", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tel</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "tel", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Movil</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "movil", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "usuario", array()), "id", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
    </li>
    <li>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinadores_edit", array("id" => $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "idCor", array()))), "html", null, true);
        echo "\">Edit</a>
    </li>
    <li>
        ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        <input type=\"submit\" value=\"Delete\">
        ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "coordinadores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  110 => 51,  104 => 48,  98 => 45,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Coordinadores</h1>*/
/* */
/* <table>*/
/*     <tbody>*/
/*         <tr>*/
/*             <th>Idcor</th>*/
/*             <td>{{ coordinador.idCor }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Nuip</th>*/
/*             <td>{{ coordinador.nuip }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Nomcor</th>*/
/*             <td>{{ coordinador.nomCor }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Dir</th>*/
/*             <td>{{ coordinador.dir }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Tel</th>*/
/*             <td>{{ coordinador.tel }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Movil</th>*/
/*             <td>{{ coordinador.movil }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Email</th>*/
/*             <td>{{ coordinador.email }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>Usuario</th>*/
/*             <td>{{ coordinador.usuario.id }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('coordinadores_edit', { 'id': coordinador.idCor }) }}">Edit</a>*/
/*     </li>*/
/*     <li>*/
/*         {{ form_start(delete_form) }}*/
/*         <input type="submit" value="Delete">*/
/*         {{ form_end(delete_form) }}*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
