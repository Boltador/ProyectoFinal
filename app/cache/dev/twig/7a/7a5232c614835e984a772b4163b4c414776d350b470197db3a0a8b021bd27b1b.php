<?php

/* AdonaiUnicoBundle:Default:index.html.twig */
class __TwigTemplate_cca288b3fbf192b7bf62b924c0f89b3d3b219e0bccb27c9a314938eba7e6f320 extends Twig_Template
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
        $__internal_e0a353338ff299d22fa47a42bbc1ca7d10a686ed6105fc9ea27d219986c734a2 = $this->env->getExtension("native_profiler");
        $__internal_e0a353338ff299d22fa47a42bbc1ca7d10a686ed6105fc9ea27d219986c734a2->enter($__internal_e0a353338ff299d22fa47a42bbc1ca7d10a686ed6105fc9ea27d219986c734a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Default:index.html.twig"));

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
        
        $__internal_e0a353338ff299d22fa47a42bbc1ca7d10a686ed6105fc9ea27d219986c734a2->leave($__internal_e0a353338ff299d22fa47a42bbc1ca7d10a686ed6105fc9ea27d219986c734a2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50bf079f2d55eeab4c755a3ed922b6dc35b3e454a8b4f4837b0a61bbd2ae9cde = $this->env->getExtension("native_profiler");
        $__internal_50bf079f2d55eeab4c755a3ed922b6dc35b3e454a8b4f4837b0a61bbd2ae9cde->enter($__internal_50bf079f2d55eeab4c755a3ed922b6dc35b3e454a8b4f4837b0a61bbd2ae9cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_50bf079f2d55eeab4c755a3ed922b6dc35b3e454a8b4f4837b0a61bbd2ae9cde->leave($__internal_50bf079f2d55eeab4c755a3ed922b6dc35b3e454a8b4f4837b0a61bbd2ae9cde_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ac4605eeb23d5494605250ff1cf94c043b5dce836c1ecc8f576370d4a9b1eee = $this->env->getExtension("native_profiler");
        $__internal_9ac4605eeb23d5494605250ff1cf94c043b5dce836c1ecc8f576370d4a9b1eee->enter($__internal_9ac4605eeb23d5494605250ff1cf94c043b5dce836c1ecc8f576370d4a9b1eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_9ac4605eeb23d5494605250ff1cf94c043b5dce836c1ecc8f576370d4a9b1eee->leave($__internal_9ac4605eeb23d5494605250ff1cf94c043b5dce836c1ecc8f576370d4a9b1eee_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Default:index.html.twig";
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
