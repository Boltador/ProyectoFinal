<?php

/* @AdonaiUnico/Default/index.html.twig */
class __TwigTemplate_eebb956674a06ae52eb6f4aed41f7ced199036d631a4edeaa61d2cf57e6f7bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1431863c10ce0a6cecbf48f2ffef384efd1fbef4487350052cdf5353b341a4b = $this->env->getExtension("native_profiler");
        $__internal_f1431863c10ce0a6cecbf48f2ffef384efd1fbef4487350052cdf5353b341a4b->enter($__internal_f1431863c10ce0a6cecbf48f2ffef384efd1fbef4487350052cdf5353b341a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdonaiUnico/Default/index.html.twig"));

        // line 1
        echo "<html>
<head>
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "</head>
<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>Bienvenido
                    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                    Administrador(a) ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario_login"]) ? $context["usuario_login"] : $this->getContext($context, "usuario_login")), "nomCor", array()), "html", null, true);
            echo "
                    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_DOCENTE")) {
            // line 15
            echo "                    Docente ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario_login"]) ? $context["usuario_login"] : $this->getContext($context, "usuario_login")), "nomDoc", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 17
            echo "                    Anonimo
                    ";
        }
        // line 19
        echo "                </h1>

                ";
        // line 21
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_DOCENTE"))) {
            // line 22
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><button type=\"button\" class=\"btn btn-danger\">Cerrar Sesión</button></a>
                ";
            // line 23
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 24
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_admin");
                echo "\"><button type=\"button\" class=\"btn btn-success\">Ir al Panel</button></a>
                ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_DOCENTE")) {
                // line 26
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente");
                echo "\"><button type=\"button\" class=\"btn btn-success\">Ir al Panel</button></a>
                ";
            }
            // line 28
            echo "                ";
        } else {
            // line 29
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Iniciar Sesión</button></a>
                ";
        }
        // line 31
        echo "            </div>
        </div>
    </div>

    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>";
        
        $__internal_f1431863c10ce0a6cecbf48f2ffef384efd1fbef4487350052cdf5353b341a4b->leave($__internal_f1431863c10ce0a6cecbf48f2ffef384efd1fbef4487350052cdf5353b341a4b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_689dd2e710cc1d055df83871c0190b44955ea69e9f7dc3281b45fd9cd2e83e0b = $this->env->getExtension("native_profiler");
        $__internal_689dd2e710cc1d055df83871c0190b44955ea69e9f7dc3281b45fd9cd2e83e0b->enter($__internal_689dd2e710cc1d055df83871c0190b44955ea69e9f7dc3281b45fd9cd2e83e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_689dd2e710cc1d055df83871c0190b44955ea69e9f7dc3281b45fd9cd2e83e0b->leave($__internal_689dd2e710cc1d055df83871c0190b44955ea69e9f7dc3281b45fd9cd2e83e0b_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c17ac7d88a583d9ee965fb41201ed795858f0236486d83431d4aaf94ac8c9f5c = $this->env->getExtension("native_profiler");
        $__internal_c17ac7d88a583d9ee965fb41201ed795858f0236486d83431d4aaf94ac8c9f5c->enter($__internal_c17ac7d88a583d9ee965fb41201ed795858f0236486d83431d4aaf94ac8c9f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_c17ac7d88a583d9ee965fb41201ed795858f0236486d83431d4aaf94ac8c9f5c->leave($__internal_c17ac7d88a583d9ee965fb41201ed795858f0236486d83431d4aaf94ac8c9f5c_prof);

    }

    public function getTemplateName()
    {
        return "@AdonaiUnico/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  122 => 35,  112 => 4,  106 => 3,  98 => 38,  96 => 35,  90 => 31,  84 => 29,  81 => 28,  75 => 26,  69 => 24,  67 => 23,  62 => 22,  60 => 21,  56 => 19,  52 => 17,  46 => 15,  40 => 13,  38 => 12,  30 => 6,  28 => 3,  24 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     {% block stylesheets %}*/
/*     <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1>Bienvenido*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                     Administrador(a) {{ usuario_login.nomCor }}*/
/*                     {% elseif is_granted('ROLE_DOCENTE') %}*/
/*                     Docente {{ usuario_login.nomDoc }}*/
/*                     {% else %}*/
/*                     Anonimo*/
/*                     {% endif %}*/
/*                 </h1>*/
/* */
/*                 {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_DOCENTE') %}*/
/*                 <a href="{{ path('logout') }}"><button type="button" class="btn btn-danger">Cerrar Sesión</button></a>*/
/*                 {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a href="{{ path('AdonaiUsuarios_admin') }}"><button type="button" class="btn btn-success">Ir al Panel</button></a>*/
/*                 {% elseif is_granted('ROLE_DOCENTE') %}*/
/*                 <a href="{{ path('AdonaiUsuarios_docente') }}"><button type="button" class="btn btn-success">Ir al Panel</button></a>*/
/*                 {% endif %}*/
/*                 {% else %}*/
/*                 <a href="{{ path('login') }}"><button type="button" class="btn btn-primary">Iniciar Sesión</button></a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block javascripts %}*/
/*     <script src="{{ asset('public/js/bootstrap.js') }}"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
