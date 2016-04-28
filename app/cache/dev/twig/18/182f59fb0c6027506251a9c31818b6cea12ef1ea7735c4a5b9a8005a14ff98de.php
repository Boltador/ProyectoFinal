<?php

/* @AdonaiUnico/Planeadores/planeador_docente.html.twig */
class __TwigTemplate_bb409bab5d30ce9bb55a36bc8814d11dda47ce718eb93b8d296a46e0b57ae835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "@AdonaiUnico/Planeadores/planeador_docente.html.twig", 1);
        $this->blocks = array(
            'stylescustom' => array($this, 'block_stylescustom'),
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docente-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddefa1a7f0b7b5070004af175d1d931cb1365741611803ae045e9d606f250c91 = $this->env->getExtension("native_profiler");
        $__internal_ddefa1a7f0b7b5070004af175d1d931cb1365741611803ae045e9d606f250c91->enter($__internal_ddefa1a7f0b7b5070004af175d1d931cb1365741611803ae045e9d606f250c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdonaiUnico/Planeadores/planeador_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddefa1a7f0b7b5070004af175d1d931cb1365741611803ae045e9d606f250c91->leave($__internal_ddefa1a7f0b7b5070004af175d1d931cb1365741611803ae045e9d606f250c91_prof);

    }

    // line 3
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_519952117d6bccdc4807c0b04b56e0ec390ee925451414d2cc6c9f38397d7e12 = $this->env->getExtension("native_profiler");
        $__internal_519952117d6bccdc4807c0b04b56e0ec390ee925451414d2cc6c9f38397d7e12->enter($__internal_519952117d6bccdc4807c0b04b56e0ec390ee925451414d2cc6c9f38397d7e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_519952117d6bccdc4807c0b04b56e0ec390ee925451414d2cc6c9f38397d7e12->leave($__internal_519952117d6bccdc4807c0b04b56e0ec390ee925451414d2cc6c9f38397d7e12_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e693dcd7d18726f5f2f515794e7c924c76549ff107670497e772d615830f8eaa = $this->env->getExtension("native_profiler");
        $__internal_e693dcd7d18726f5f2f515794e7c924c76549ff107670497e772d615830f8eaa->enter($__internal_e693dcd7d18726f5f2f515794e7c924c76549ff107670497e772d615830f8eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div id=\"fecha_inicio_per\" data-path=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo "\" class=\"hidden\"></div>
<div id=\"fecha_final_per\" data-path=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "\" class=\"hidden\"></div>

<!-- Main -->
<div class=\"container\">

    <!-- upper section -->
    <div class=\"row\">
        <div id=\"row-menu\" class=\"col-sm-3\">
            <!-- left -->
            <h3><i class=\"glyphicon glyphicon-menu-hamburger\"></i>    Menú</h3>
            <hr>
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"nav-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>   Inicio</a></li>
                <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-education\"></i>   Competencias</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\"><i class=\"glyphicon glyphicon-th-list\"></i>   Planeadores</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("notas_index");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>   Notas Estudiantes</a></li>
                <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-folder-open\"></i>     Observador Grupo</a></li>
            </ul>
            <hr>
        </div><!-- /row-menu -->

        <div id=\"contenedor-central\" class=\"col-sm-9\">
            <!-- column 2 -->
            <h3></i>Panel Planeadores Académicos</h3>
            <hr>
            <!-- center left-->
            <div id=\"contenedor_gestionar_busqueda\" class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Crear Planeadores</h4></div>
                    <div id=\"panel_ver_notas\" class=\"panel-body\">
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-list-alt\"></i>  Escoger Asignación: </h5>
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/>
                            <medium><< Planeador para el periodo: </medium>
                            <medium id=\"periodo_numero\"><strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo " </strong> >></medium>
                        </div>
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>
                        </div> 
                        <br/><br/><br/>
                        <div class=\"col-xs-12\">
                            <hr>
                            <h4 id=\"subtitulo\"><span class=\"glyphicon glyphicon-file\"></span>  Agregar Temas </h4>
                            <br/>
                            <table id=\"tabla_plan\" class=\"table table-hover hidden\">
                                <thead id=\"head_tabla_plan\">
                                    <tr>
                                        <th>ID</th>
                                        <th>Tema</th>
                                        <th>Fechas</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id=\"body_tabla_plan\">
                                </tbody>
                            </table>
                            <hr>
                            <div id=\"temas_vacio\">
                                <p><strong>NOTA: </strong> Haz Click en el botón \"Añadir Tema\" para comenzar a llenar el planeador.</p>
                            </div>
                            <hr><button id=\"add\" type='button' class='btn btn-info' onclick=\"agregar();\">
                            <span class=\"glyphicon glyphicon-plus\"></span>   Añadir Tema</button>
                            <br/>
                        </div><!--/panel-body-->
                    </div><!-- Panel-Primary -->
                </div><!-- contenedor-registrar -->
            </div><!-- row Gestionar -->


            <div id=\"contenedor_registrar_planeador\" class=\"col-sm-12\">
            </div><!-- contenedor-registrar -->

        </div><!-- /Contenedor-Central -->
    </div><!-- row primera -->
</div><!--/container-->


<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 94
        $this->displayBlock('scripts', $context, $blocks);
        // line 99
        echo "
";
        
        $__internal_e693dcd7d18726f5f2f515794e7c924c76549ff107670497e772d615830f8eaa->leave($__internal_e693dcd7d18726f5f2f515794e7c924c76549ff107670497e772d615830f8eaa_prof);

    }

    // line 94
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_125753b93d28d085a69979c6804587ec6754da8c81e2618505d780a10abc0e5a = $this->env->getExtension("native_profiler");
        $__internal_125753b93d28d085a69979c6804587ec6754da8c81e2618505d780a10abc0e5a->enter($__internal_125753b93d28d085a69979c6804587ec6754da8c81e2618505d780a10abc0e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 95
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/planeador_docente.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_125753b93d28d085a69979c6804587ec6754da8c81e2618505d780a10abc0e5a->leave($__internal_125753b93d28d085a69979c6804587ec6754da8c81e2618505d780a10abc0e5a_prof);

    }

    public function getTemplateName()
    {
        return "@AdonaiUnico/Planeadores/planeador_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 96,  193 => 95,  187 => 94,  179 => 99,  177 => 94,  128 => 50,  122 => 47,  115 => 45,  109 => 42,  89 => 25,  85 => 24,  80 => 22,  65 => 10,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'docente-base.html.twig' %}*/
/* */
/* {% block stylescustom %}*/
/* <link href="{{ asset('public/css/datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div id="fecha_inicio_per" data-path="{{ periodo_actual.fechaInPer|date("d/m/Y") }}" class="hidden"></div>*/
/* <div id="fecha_final_per" data-path="{{ periodo_actual.fechaFinPer|date("d/m/Y") }}" class="hidden"></div>*/
/* */
/* <!-- Main -->*/
/* <div class="container">*/
/* */
/*     <!-- upper section -->*/
/*     <div class="row">*/
/*         <div id="row-menu" class="col-sm-3">*/
/*             <!-- left -->*/
/*             <h3><i class="glyphicon glyphicon-menu-hamburger"></i>    Menú</h3>*/
/*             <hr>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li class="nav-item"><a href="{{ path('AdonaiUsuarios_docente') }}"><i class="glyphicon glyphicon-home"></i>   Inicio</a></li>*/
/*                 <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-education"></i>   Competencias</a></li>*/
/*                 <li class="nav-item"><a href="{{ path('planeadores_index') }}"><i class="glyphicon glyphicon-th-list"></i>   Planeadores</a></li>*/
/*                 <li class="nav-item"><a class="nav-link" href="{{ path('notas_index') }}"><i class="glyphicon glyphicon-pencil"></i>   Notas Estudiantes</a></li>*/
/*                 <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-folder-open"></i>     Observador Grupo</a></li>*/
/*             </ul>*/
/*             <hr>*/
/*         </div><!-- /row-menu -->*/
/* */
/*         <div id="contenedor-central" class="col-sm-9">*/
/*             <!-- column 2 -->*/
/*             <h3></i>Panel Planeadores Académicos</h3>*/
/*             <hr>*/
/*             <!-- center left-->*/
/*             <div id="contenedor_gestionar_busqueda" class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Crear Planeadores</h4></div>*/
/*                     <div id="panel_ver_notas" class="panel-body">*/
/*                         <div class="col-xs-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-list-alt"></i>  Escoger Asignación: </h5>*/
/*                             {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h5><medium id="periodo_fechas">{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }}</medium><br/>*/
/*                             <medium><< Planeador para el periodo: </medium>*/
/*                             <medium id="periodo_numero"><strong>{{ periodo_actual.numero }} </strong> >></medium>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h5><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/*                         </div> */
/*                         <br/><br/><br/>*/
/*                         <div class="col-xs-12">*/
/*                             <hr>*/
/*                             <h4 id="subtitulo"><span class="glyphicon glyphicon-file"></span>  Agregar Temas </h4>*/
/*                             <br/>*/
/*                             <table id="tabla_plan" class="table table-hover hidden">*/
/*                                 <thead id="head_tabla_plan">*/
/*                                     <tr>*/
/*                                         <th>ID</th>*/
/*                                         <th>Tema</th>*/
/*                                         <th>Fechas</th>*/
/*                                         <th>Acciones</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody id="body_tabla_plan">*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <hr>*/
/*                             <div id="temas_vacio">*/
/*                                 <p><strong>NOTA: </strong> Haz Click en el botón "Añadir Tema" para comenzar a llenar el planeador.</p>*/
/*                             </div>*/
/*                             <hr><button id="add" type='button' class='btn btn-info' onclick="agregar();">*/
/*                             <span class="glyphicon glyphicon-plus"></span>   Añadir Tema</button>*/
/*                             <br/>*/
/*                         </div><!--/panel-body-->*/
/*                     </div><!-- Panel-Primary -->*/
/*                 </div><!-- contenedor-registrar -->*/
/*             </div><!-- row Gestionar -->*/
/* */
/* */
/*             <div id="contenedor_registrar_planeador" class="col-sm-12">*/
/*             </div><!-- contenedor-registrar -->*/
/* */
/*         </div><!-- /Contenedor-Central -->*/
/*     </div><!-- row primera -->*/
/* </div><!--/container-->*/
/* */
/* */
/* <!-- /Main -->*/
/* <footer id="footer"class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/* <!-- script references -->*/
/* {% block scripts %}*/
/* <script src="{{ asset('public/js/datepicker/bootstrap-datepicker.js') }}"></script>*/
/* <script src="{{ asset('public/js/planeador_docente.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
