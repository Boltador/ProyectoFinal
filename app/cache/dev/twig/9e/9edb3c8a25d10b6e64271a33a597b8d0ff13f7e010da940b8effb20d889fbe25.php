<?php

/* AdonaiUnicoBundle:Default:notas_docente.html.twig */
class __TwigTemplate_75f39d0004ac510ca7a0ac069b1e50098076027ba236f8b7ab1f2067a33e040a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdonaiUnicoBundle:Default:notas_docente.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fb49df70176625725c9910fc8b88a72ee211886c4f230c897d687436304169e = $this->env->getExtension("native_profiler");
        $__internal_2fb49df70176625725c9910fc8b88a72ee211886c4f230c897d687436304169e->enter($__internal_2fb49df70176625725c9910fc8b88a72ee211886c4f230c897d687436304169e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Default:notas_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fb49df70176625725c9910fc8b88a72ee211886c4f230c897d687436304169e->leave($__internal_2fb49df70176625725c9910fc8b88a72ee211886c4f230c897d687436304169e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f687e45154c655e8ab0c153fb18432ddc3e0a50a1a8950c0d41c9a2d8f726fd6 = $this->env->getExtension("native_profiler");
        $__internal_f687e45154c655e8ab0c153fb18432ddc3e0a50a1a8950c0d41c9a2d8f726fd6->enter($__internal_f687e45154c655e8ab0c153fb18432ddc3e0a50a1a8950c0d41c9a2d8f726fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Header -->
<div id=\"top-nav\" class=\"navbar navbar-inverse navbar-static-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-toggle\"></span>
            </button>

            <a style=\"color: white;\" class=\"navbar-brand\" href=\"#\">Sistema de Gestión Académica - ADONAI</a>
        </div>

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a style=\"color: white;\"  class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"glyphicon glyphicon-user\"></i>  ";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        // line 20
        echo "                        <span class=\"caret\"></span></a>
                        <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
                            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> Desconectarse</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /container -->
    </div>
    <!-- /Header -->

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
        // line 43
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>   Inicio</a></li>
                    <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-education\"></i>   Competencias</a></li>
                    <li class=\"nav-item\"><a href=\"http://www.bootply.com/85861\"><i class=\"glyphicon glyphicon-th-list\"></i>   Planeadores</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente_notas");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>   Notas Estudiantes</a></li>
                    <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-folder-open\"></i>     Observador Grupo</a></li>
                </ul>
                <hr>
                <h3><i class=\"glyphicon glyphicon-wrench\"></i>    Opciones</h3>
                <hr>

                <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"nav-item active\"><a class=\"nav-link active\" href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i>   Registrar Notas</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link active\" href=\"#\"><i class=\"glyphicon glyphicon-search\"></i>     Ver Notas</a></li>
                </ul>
                <hr>
                <div id=\"contenedor_promedio\" class=\"col-md-12 hidden\">
                    <div id=\"panel_promedio\" class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-stats\"></i>  Promedio</h4></div>
                        <div id=\"body_promedio\" class=\"panel-body\">
                        </div><!--/panel-body-->
                    </div>
                </div>

            </div><!-- /row-menu -->

            <div id=\"contenedor-central\" class=\"col-sm-9\">
                <!-- column 2 -->
                <h3></i>Panel de Calificaciones Estudiantiles</h3>
                <hr>
                <!-- center left-->
                <div id=\"row_gestionar\" class=\"col-md-12\">
                    <div id=\"panel_asignaciones\" class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-sort\"></i>  Gestionar Notas de Estudiantes</h4></div>
                        <div class=\"panel-body\">

                            <form id=\"form_notas\" action=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("notas_new");
        echo "\" method=\"POST\" novalidate role=\"form\">
                             <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 80
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>
                            </div>
                            <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 83
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/><i><medium>Número: </medium></i><medium id=\"periodo_numero\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo "</medium>
                            </div>
                            <div class=\"col-xs-4\">
                                <i class=\"glyphicon glyphicon-list-alt\"></i>
                                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'label');
        echo "
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <br/><br/><br/>
                            <div class=\"col-xs-12\">
                                <hr>
                                <h4><i class=\"glyphicon glyphicon-education\"></i>  Escoger Estudiante</h4>
                                <hr>
                                <div id=\"panel_escoger_est\">
                                    <div id=\"div_lista_espera\">
                                    </div>
                                    <table id=\"tabla_mats\" class=\"table\">
                                        <thead id=\"head_tabla_mats\" class=\"hidden\">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre Estudiante</th>
                                                <th>Seleccionar</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"body_tabla_mats\">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--/panel-body-->
                    </div> <!-- panel primary Gestionar -->
                </div><!-- row Gestionar -->
                
                <div id=\"contenedor_registrar\" class=\"col-sm-12\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Registrar Notas</h4></div>
                        <div id=\"panel_registrar_notas\" class=\"panel-body\">
                            <div id=\"div_registrar_espera\">
                            </div>

                            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricula", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                            <div id=\"panel_competencias\" class=\"col-md-12\">
                            </div> <!-- Fin Panel_Competencias -->
                            <br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id=\"enviar_form\" type=\"submit\" class=\"btn btn-success hidden\">
                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>       Guardar
                            </button>
                        </form>
                    </div><!--/panel-body-->
                </div><!-- Panel-Primary -->
            </div><!-- contenedor-registrar -->

        </div><!-- /Contenedor-Central -->
    </div><!-- row primera -->
</div><!--/container-->


<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_f687e45154c655e8ab0c153fb18432ddc3e0a50a1a8950c0d41c9a2d8f726fd6->leave($__internal_f687e45154c655e8ab0c153fb18432ddc3e0a50a1a8950c0d41c9a2d8f726fd6_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15ff5ed90ce9b14a0fd58985c260f85aaa469477703dfcb73751f8b44432a10f = $this->env->getExtension("native_profiler");
        $__internal_15ff5ed90ce9b14a0fd58985c260f85aaa469477703dfcb73751f8b44432a10f->enter($__internal_15ff5ed90ce9b14a0fd58985c260f85aaa469477703dfcb73751f8b44432a10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script>
";
        // line 154
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
var editadas;
//Obtener los datos solicitados
\$(function () {
    selectMatricula();
    \$('#nota_nota').attr('disabled', true);
    \$('#body_tabla_mats').append(\"<h4>\" + \"<span class='label label-info'>\" + \"Selecciona una asignación de la lista para continuar\" + \"</span>\" + \"</h4>\");
    \$('#panel_competencias').append(\"<h4>\" + \"<span class='label label-info'>\" + \"Selecciona una asignación de la lista para continuar\" + \"</span>\" + \"</h4>\");

                    //Evento cuando cambia de asignacion
                    \$(\"#nota_asignacion\").change(function () {
                        \$(\"#nota_asignacion\").attr('disabled', 'disabled');
                        var data = {
                            asignacion_id: \$(this).val()
                        };
                        if (data[\"asignacion_id\"] === \"\") {
                            \$(\"#nota_asignacion\").prop(\"disabled\", false);
                            resetearFormulario();
                        } else {
                            \$(\"#contenedor_promedio\").addClass(\"hidden\");
                            \$(\"#body_promedio\").empty();
                            \$('#panel_escoger_est').slideUp(\"slow\");
                            \$('#panel_registrar_notas').slideUp(\"slow\");
                            \$.ajax({
                                type: 'post',
                                url: '";
        // line 179
        echo $this->env->getExtension('routing')->getPath("select_matriculas");
        echo "',
                                data: data,
                                success: function (data) {
                                    if (\$(\"#confirmacion\")) {
                                        \$(\"#confirmacion\").remove();
                                    }
                                    \$('#div_lista_espera').empty();
                                    setearMatriculas(data);
                                }
                            });
                            \$.ajax({
                                type: 'post',
                                url: '";
        // line 191
        echo $this->env->getExtension('routing')->getPath("select_competencias");
        echo "',
                                data: data,
                                success: function (data) {
                                    \$('#div_registrar_espera').empty();
                                    eliminarInputsNota();
                                    \$('#panel_competencias').empty();
                                    setearCompetencias(data);
                                    comprobarCompetencias();
                                    espera(5);
                                    \$(\"#nota_asignacion\").prop(\"disabled\", false);
                                    \$('#enviar_form').attr('disabled', 'disabled');
                                    \$('#enviar_form').removeClass(\"hidden\");
                                }
                            });
                        }
                    });
});

/* -- Acción Submit: Enviar Formulario -- */

//Enviar formulario por AJAX
\$('#form_notas').submit(function (e) {
    e.preventDefault();
    setearInputsNota();
    \$('#div_registrar_espera').empty();
    \$('#div_lista_espera').empty();
    if (\$(\"#confirmacion\")) {
        \$(\"#confirmacion\").remove();
    }     
    if(validarCompetencias() == 1){  espera(3); return false; }
    if(editadas == 0){
        espera(2);
        \$.ajax({
            type: \"POST\",
            url: \$(this).attr('action'),
            data: \$(this).serialize(),
            success: function (data) {
                notificacionRegistrar(1); 
                editadas = 1;
                setearNotasExistentes();
            }
        });
    } else {
        espera(4);
        \$.ajax({
            type: \"POST\",
            url: '";
        // line 237
        echo $this->env->getExtension('routing')->getPath("notas_edit");
        echo "',
            data: \$(this).serialize(),
            success: function (data) {
                notificacionRegistrar(2);
                setearNotasExistentes();
            }
        });
    }
    return false;
});

//Reinicia el combo matriculas
function selectMatricula() {
    \$(\"#nota_matricula\").attr('disabled', 'disabled');
    \$('#nota_matricula').html('<option>-- Seleccione una Asignacion --</option>');
}

//Muestra el mensaje de las notas registradas
function notificacionRegistrar(ubicacion) {
    if(ubicacion === 1){
        confirmacion = \"<div id='confirmacion' class='alert alert-success'>\" +
        \"<button type='button' class='close' data-dismiss='alert'>\" + '×' + \"</button>\" +
        'Notas Registradas con Éxito.' +
        \"</div>\";
        \$('#confirmacion').hide().fadeIn(300);
        \$('#div_registrar_espera').empty();
        \$('#div_registrar_espera').append(confirmacion);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#confirmacion\").fadeOut(2000);
            }, 3000);
        });
    }
    if(ubicacion === 2){
        confirmacion = \"<div id='confirmacion' class='alert alert-success'>\" +
        \"<button type='button' class='close' data-dismiss='alert'>\" + '×' + \"</button>\" +
        'Notas del Estudiante Editadas con Éxito.' +
        \"</div>\";
        \$('#confirmacion').hide().fadeIn(300);
        \$('#div_registrar_espera').empty();
        \$('#div_registrar_espera').append(confirmacion);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#confirmacion\").fadeOut(2000);
            }, 3000);
        });
    }
}

//Limpia el formulario
function resetearFormulario() {
    \$(\"#contenedor_promedio\").addClass(\"hidden\");
    \$(\"#body_promedio\").empty();
    \$(\"#tabla_mats\").slideUp(\"slow\");
    \$('#form_notas')[0].reset();
    limpiarInputsNota();
    selectMatricula();
    \$('#enviar_form').addClass(\"hidden\");
    \$(\"#enviar_form\").attr('disabled', 'disabled');
    \$('#body_tabla_mats').empty();
    \$('#panel_competencias').empty();
    \$(\"#div_registrar_espera\").empty();
    \$('#body_tabla_mats').append(\"<h4>\" + \"<span id='espera' class='label label-info'>\" + \"Selecciona una asignación de la lista para continuar\" + \"</span>\" + \"</h4>\");
    \$('#panel_competencias').append(\"<h4>\" + \"<span id='espera' class='label label-info'>\" + \"Selecciona una asignación de la lista para continuar\" + \"</span>\" + \"</h4>\");
    \$('#head_tabla_mats').addClass(\"hidden\");
    \$('#nota_nota').attr('disabled', 'disabled');
    \$(\"#tabla_mats\").slideDown(1000);
}

//Setear el elemento seleccionado de la tabla en el Combo Estudiantes y Cargar Notas existentes
function matriculaActiva(id_matricula, id_tabla) {
    \$('#nota_matricula').val(\"\" + id_matricula + \"\");
    if (\$(\"#confirmacion\")) {
        \$(\"#confirmacion\").remove();
    }
    filas = \$('#body_tabla_mats').children();
    for (i = 0; i < filas.length; i++) {
        filas[i].style.background = (filas[i].style.background === '') ? '#FFFFFF' : '';
    }
    filas[id_tabla].style.backgroundColor = \"#D9EDF7\";
    restaurarPanelesCompetencias();
    setearNotasExistentes(); /* Aqui setea existentes */
    \$(document).ready(function () {
        setTimeout(function () {
            \$(\"#tag_selec_est\").fadeOut(400);
        }, 400);
    });
    \$(\"#enviar_form\").prop(\"disabled\", false);
    \$(\"#input_nota_0\").focus();
}


// Setea las notas en los campos si existen
function setearNotasExistentes(){
    var data = {
        asignacion_id: \$(\"#nota_asignacion\").val(),
        periodo_id: \$(\"#nota_periodo\").val(),
        matricula_id: \$(\"#nota_matricula\").val()
    };
    \$.ajax({
        type: 'post',
        url: '";
        // line 338
        echo $this->env->getExtension('routing')->getPath("nota_existente");
        echo "',
        data: data,
        success: function (data) {
            if(data.length > 0){
                \$(\"#panel_competencias input\").each(function (index)
                {
                    if(esEntero(data[0][index][\"nota\"])){
                        \$(this).val(data[0][index][\"nota\"] + \".\" + 0);
                    } else {
                        \$(this).val(data[0][index][\"nota\"]);
                    }
                    \$(this).prop(\"disabled\", false);
                });
                editadas = 1;
                \$(\"#body_promedio\").empty();
                \$(\"#body_promedio\").append(\"<medium class='text-justify' style='word-wrap: break-word;'>Ya se han registrado notas en el estudiante, tiene la opción de editar.<br/><br/>El promedio de la asignatura es de: <center><strong><h3>\" + data[1].toFixed(\"1\") + \"</h3></strong></center></medium>\");
                \$(\"#contenedor_promedio\").removeClass(\"hidden\");
                \$('#body_promedio').hide().fadeIn(500);
                \$(\"#input_nota_0\").focus();
            } else {
                editadas = 0;
                \$(\"#body_promedio\").empty();
                \$(\"#body_promedio\").append(\"<medium class='text-justify' style='word-wrap: break-word;'>El estudiante no tiene notas registradas aún.</medium>\");
                \$(\"#contenedor_promedio\").removeClass(\"hidden\");
                \$('#body_promedio').hide().fadeIn(500);
                limpiarInputsNota();
                \$(\"#panel_competencias input\").each(function (index)
                {
                    \$(this).prop(\"disabled\", false);
                });
                \$(\"#input_nota_0\").focus();
            }
        }
    });
}

//Muestra mensaje de espera en la ubicacion indicada
function espera(ubicacion) {
    if (ubicacion === 1) {
        \$('#div_lista_espera').append(\"<h4 id='tag_espera_1'>\" + \"<span class='label label-info'>\" + \"Cargando...\" + \"</span>\" + \"</h4>\");
        \$('#tag_espera_1').hide().fadeIn(200);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#tag_espera_1\").fadeOut(350);
            }, 950);
        });
        return true;
    }
    if (ubicacion === 2){
        \$('#div_registrar_espera').append(\"<h4 id='tag_espera_2'>\" + \"<span class='label label-info'>\" + \"Registrando Notas..\" + \"</span>\" + \"</h4>\" + \"<br/>\");
        \$('#tag_espera_2').hide().fadeIn(200);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#tag_espera_2\").fadeOut(350);
            }, 950);
        });
        return true;
    }
    if (ubicacion === 3){
        \$('#div_registrar_espera').append(\"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" +
            \"<h4 id='error_comp'>\" + 
            \"<span class='label label-danger'>\" + 
            \"Debes llenar la nota para cada competencia y que la nota ingresada no sea mayor a 5.\" + 
            \"</span>\" + \"</h4>\" + \"<br/>\");
        \$('#error_comp').hide().fadeIn(500);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#error_comp\").fadeOut(350);
            }, 3800);
        });
        return true;
    }
    if(ubicacion === 4){
        \$('#div_registrar_espera').append(\"<h4 id='tag_espera_3'>\" + \"<span class='label label-info'>\" + \"Editando Notas..\" + \"</span>\" + \"</h4>\" + \"<br/>\");
        \$('#tag_espera_3').hide().fadeIn(200);
        \$(document).ready(function () {
            setTimeout(function () {
                \$(\"#tag_espera_3\").fadeOut(350);
            }, 950);
        });
        return true;
    }

    if(ubicacion === 5){
        \$('#div_registrar_espera').append(\"<h4 id='tag_selec_est'>\" + \"<span class='label label-info'>\" + \"Selecciona un estudiante para continuar.\" + \"</span>\" + \"</h4>\" + \"<br/>\");
        \$('#tag_selec_est').hide().fadeIn(1000);
        return true;
    }
}

// Devolver las Matriculas para Setearlas en la Tabla
function crearTablaMatriculas(data) {
    var matriculasProcesar = new Array();
    for (i = 0; i < data.length; i++) {
        fila = \"<tr id='matricula_sele_\" + data[i][\"id\"] + \"'>\" +
        \"<td>\" + data[i][\"id\"] + \"</td>\" +
        \"<td>\" + data[i][\"nombre\"] + \"</td>\" +
        \"<td>\" + \"<button id='\" + data[i][\"id\"] + \"' type='button' class='btn btn-info' onclick='matriculaActiva(this.id,\" + i + \")'>\" + \"<i class='glyphicon glyphicon-hand-up'>\" + \"</i>\" + \"</button>\" + \"</td>\" +
        \"</tr>\";
        matriculasProcesar.push(fila);
    }
    return matriculasProcesar;
}

//Instancia las matriculas en el combo y en la lista
function setearMatriculas(data) {
    var \$matricula_selector = \$('#nota_matricula');
    \$('#head_tabla_mats').addClass(\"hidden\");
    \$matricula_selector.removeAttr(\"disabled\");
    \$matricula_selector.html('<option>-- Seleccionar un Estudiante --</option>');
    \$('#body_tabla_mats').empty();
    \$('#nota_nota').val(\"\");
    \$('#head_tabla_mats').removeClass(\"hidden\");
    \$('#body_tabla_mats').append(crearTablaMatriculas(data));

    for (var i = 0, total = data.length; i < total; i++) {
        \$matricula_selector.append('<option value=\"' + data[i][\"id\"] + '\">' + data[i][\"id\"] + ' - ' + data[i][\"nombre\"] + '</option>');
    }

    \$('#panel_escoger_est').slideDown(400);
}

// Crear las competencias de la asignatura y sus campos de notas correspondientes
function setearCompetencias(data) {
    var \$competencia_selector = \$('#nota_competencia');
    \$competencia_selector.removeAttr(\"disabled\");
    \$('#nota_nota').removeAttr(\"disabled\");
    \$competencia_selector.html('<option>-- Seleccionar una Competencia --</option>');
    for (var i = 0, total = data.length; i < total; i++) {
        \$competencia_selector.append('<option value=\"' + data[i][\"id\"] + '\">' + data[i][\"id\"] + ' - ' + data[i][\"contenido\"] + '</option>');
        competencia = \"<div class='col-xs-4'>\" +
        \"<div id='panel_comp_\" + i + \"' class='panel panel-info'>\" +
        \"<div class='panel-heading'>\" +
        \"<h3 class='panel-title'>\" + \"Competencia \" + (i + 1) + \"</h3>\" +
        \"</div>\" +
        \"<div class='panel-body' style='word-wrap: break-word;'>\" +
        data[i]['id'] + \" - \" + data[i]['contenido'] + \"<br/>\" +
        \"<div class='form-group'>\" +
        \"<br/>\" +
        \"<label for='lbl_nota_\" + i + \"'>\" + \"Nota: \" + \"</label>\" +
        \"<div id='div_nota_\" + i + \"'>\" +
        \"<input type='text' id='input_nota_\" + i + \"' class='form-control' onkeypress='numeros(event)' placeholder='Escriba la nota Ej: 5.0' />\" +
        \"</div>\" +
        \"</div>\" +
        \"</div>\" +
        \"</div>\" +
        \"</div>\";
        //competencia = \$(competencia).hide().fadeIn(1000);
        \$('#panel_competencias').append(competencia);
        \$(\"<input id='input_hide_\" + i + \"' class='hidden' type='number' name='notas[]' />\").appendTo(\$('#form_notas'));
        \$('#input_hide_' + i).mask(\"9.9\");

        \$('#input_nota_' + i).attr('disabled', true);
        \$.mask.definitions['#']='[12345]';
        \$('#input_nota_' + i).mask(\"#.9\");
    }
    \$('#panel_registrar_notas').slideDown(500);
    promedioFlotante();
}

// Notas: Setear inputs visibles en los inputs ocultos del formulario
function setearInputsNota() {
    \$(\"#panel_competencias input\").each(function (index)
    {
        \$('#input_hide_' + index).val(\$(this).val());
    });
}


// Notas: Limpia los Inputs de las notas visibles y ocultos
function limpiarInputsNota() {
    \$(\"#panel_competencias input\").each(function (index)
    {
        \$(this).val(\"\");
        \$('#input_hide_' + index).val(\"\");
    });
}

// Notas: Eliminar los Inputs Ocultos de las notas
function eliminarInputsNota() {
    \$(\"#panel_asignaciones input\").each(function (index)
    {
        if (\$(this).attr('id') === (\"input_hide_\" + index)) {
            \$(this).remove();
        }
    });
}

// Cajas Competencias: Restaura el estilo por defecto
function restaurarPanelesCompetencias(){
    \$(\"#panel_competencias input\").each(function (index)
    {
        if(\$('#panel_comp_' + index).hasClass(\"panel-danger\")){
            \$('#panel_comp_' + index).removeClass(\"panel-danger\");
            \$('#panel_comp_' + index).addClass(\"panel-info\");
        }  
    });
}

/* Comprobar Competencias */
// Verifica en tiempo real

function comprobarCompetencias(){
    \$(\"#panel_competencias\")
    .focusout(function() {
        \$(\"#panel_competencias input\").each(function (index)
        {
            if((!\$.isNumeric(\$(this).val())) || parseFloat(\$(this).val()) > 5){
                \$('#panel_comp_' + index).addClass(\"panel-danger\");
            } else {
                \$('#panel_comp_' + index).removeClass(\"panel-danger\");
            }  
        });
    });
}

/*  ---  Funciones de Validación --- */

/* Validar Matricula */

function validarMatricula(){
    var data = {
        matricula_id: \$(\"#nota_matricula\").val()
    };
    if(!parseInt(\$(\"#nota_matricula\").val())){
        \$('#div_lista_espera').append(\"<h4 id='error_matricula'>\" + \"<span class='label label-danger'>\" + \"Debes seleccionar un estudiante para continuar.\" + \"</span>\" + \"</h4>\");
        return false;
    }
}

/* Validar Competencias */
// Verifica al enviar

function validarCompetencias(){
    confirmar = 0;
    \$(\"#panel_competencias input\").each(function (index)
    {
        if((!\$.isNumeric(\$(this).val())) || parseFloat(\$(this).val()) > 5){
            \$('#panel_comp_' + index).addClass(\"panel-danger\");
            confirmar = 1;
        } else {
            \$('#panel_comp_' + index).removeClass(\"panel-danger\");
        }

    });
    return confirmar;
}

//Comprobar si un número es entero

function esEntero(numero){
    if (numero % 1 === 0) {
        return true;
    }
    return false;
}


//Instanciar la ventana promedio
function promedioFlotante(){
    posicion = 0;
    var posicion = (\$(\"#contenedor_registrar\").position().top / 45);
    \$(\"#contenedor_promedio\").css({top: posicion});
}

</script>

";
        
        $__internal_15ff5ed90ce9b14a0fd58985c260f85aaa469477703dfcb73751f8b44432a10f->leave($__internal_15ff5ed90ce9b14a0fd58985c260f85aaa469477703dfcb73751f8b44432a10f_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Default:notas_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 338,  350 => 237,  301 => 191,  286 => 179,  258 => 154,  253 => 152,  249 => 151,  244 => 150,  232 => 149,  206 => 126,  201 => 124,  196 => 122,  159 => 88,  155 => 87,  144 => 83,  136 => 80,  131 => 78,  96 => 46,  90 => 43,  67 => 23,  62 => 20,  58 => 19,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Header -->*/
/* <div id="top-nav" class="navbar navbar-inverse navbar-static-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="icon-toggle"></span>*/
/*             </button>*/
/* */
/*             <a style="color: white;" class="navbar-brand" href="#">Sistema de Gestión Académica - ADONAI</a>*/
/*         </div>*/
/* */
/*         <div class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="dropdown">*/
/*                     <a style="color: white;"  class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">*/
/*                         <i class="glyphicon glyphicon-user"></i>  {% if app.user %}{{ app.user.username }}{% endif %}*/
/*                         <span class="caret"></span></a>*/
/*                         <ul id="g-account-menu" class="dropdown-menu" role="menu">*/
/*                             <li><a href="#"><i class="glyphicon glyphicon-home"></i>  Ir al Inicio</a></li>*/
/*                             <li><a href="{{ path('logout') }}"><i class="glyphicon glyphicon-lock"></i> Desconectarse</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div><!-- /container -->*/
/*     </div>*/
/*     <!-- /Header -->*/
/* */
/*     <!-- Main -->*/
/*     <div class="container">*/
/* */
/*         <!-- upper section -->*/
/*         <div class="row">*/
/*             <div id="row-menu" class="col-sm-3">*/
/*                 <!-- left -->*/
/*                 <h3><i class="glyphicon glyphicon-menu-hamburger"></i>    Menú</h3>*/
/*                 <hr>*/
/* */
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     <li class="nav-item"><a href="{{ path('AdonaiUsuarios_docente') }}"><i class="glyphicon glyphicon-home"></i>   Inicio</a></li>*/
/*                     <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-education"></i>   Competencias</a></li>*/
/*                     <li class="nav-item"><a href="http://www.bootply.com/85861"><i class="glyphicon glyphicon-th-list"></i>   Planeadores</a></li>*/
/*                     <li class="nav-item"><a class="nav-link" href="{{ path('AdonaiUsuarios_docente_notas') }}"><i class="glyphicon glyphicon-pencil"></i>   Notas Estudiantes</a></li>*/
/*                     <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-folder-open"></i>     Observador Grupo</a></li>*/
/*                 </ul>*/
/*                 <hr>*/
/*                 <h3><i class="glyphicon glyphicon-wrench"></i>    Opciones</h3>*/
/*                 <hr>*/
/* */
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     <li class="nav-item active"><a class="nav-link active" href="#"><i class="glyphicon glyphicon-plus"></i>   Registrar Notas</a></li>*/
/*                     <li class="nav-item"><a class="nav-link active" href="#"><i class="glyphicon glyphicon-search"></i>     Ver Notas</a></li>*/
/*                 </ul>*/
/*                 <hr>*/
/*                 <div id="contenedor_promedio" class="col-md-12 hidden">*/
/*                     <div id="panel_promedio" class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-stats"></i>  Promedio</h4></div>*/
/*                         <div id="body_promedio" class="panel-body">*/
/*                         </div><!--/panel-body-->*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div><!-- /row-menu -->*/
/* */
/*             <div id="contenedor-central" class="col-sm-9">*/
/*                 <!-- column 2 -->*/
/*                 <h3></i>Panel de Calificaciones Estudiantiles</h3>*/
/*                 <hr>*/
/*                 <!-- center left-->*/
/*                 <div id="row_gestionar" class="col-md-12">*/
/*                     <div id="panel_asignaciones" class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-sort"></i>  Gestionar Notas de Estudiantes</h4></div>*/
/*                         <div class="panel-body">*/
/* */
/*                             <form id="form_notas" action="{{ path('notas_new') }}" method="POST" novalidate role="form">*/
/*                              <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h5><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h5><medium id="periodo_fechas">{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }}</medium><br/><i><medium>Número: </medium></i><medium id="periodo_numero">{{ periodo_actual.numero }}</medium>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <i class="glyphicon glyphicon-list-alt"></i>*/
/*                                 {{ form_label(form.asignacion) }}*/
/*                                 {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/*                             </div>*/
/*                             <br/><br/><br/>*/
/*                             <div class="col-xs-12">*/
/*                                 <hr>*/
/*                                 <h4><i class="glyphicon glyphicon-education"></i>  Escoger Estudiante</h4>*/
/*                                 <hr>*/
/*                                 <div id="panel_escoger_est">*/
/*                                     <div id="div_lista_espera">*/
/*                                     </div>*/
/*                                     <table id="tabla_mats" class="table">*/
/*                                         <thead id="head_tabla_mats" class="hidden">*/
/*                                             <tr>*/
/*                                                 <th>ID</th>*/
/*                                                 <th>Nombre Estudiante</th>*/
/*                                                 <th>Seleccionar</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody id="body_tabla_mats">*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--/panel-body-->*/
/*                     </div> <!-- panel primary Gestionar -->*/
/*                 </div><!-- row Gestionar -->*/
/*                 */
/*                 <div id="contenedor_registrar" class="col-sm-12">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Registrar Notas</h4></div>*/
/*                         <div id="panel_registrar_notas" class="panel-body">*/
/*                             <div id="div_registrar_espera">*/
/*                             </div>*/
/* */
/*                             {{ form_widget(form.periodo, {'attr': {'class':'hidden'}})}}*/
/* */
/*                             {{ form_widget(form.matricula, {'attr': {'class':'hidden'}})}}*/
/* */
/*                             {{ form_rest(form) }}*/
/* */
/*                             <div id="panel_competencias" class="col-md-12">*/
/*                             </div> <!-- Fin Panel_Competencias -->*/
/*                             <br/>*/
/*                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                             <button id="enviar_form" type="submit" class="btn btn-success hidden">*/
/*                                 <span class="glyphicon glyphicon-floppy-saved"></span>       Guardar*/
/*                             </button>*/
/*                         </form>*/
/*                     </div><!--/panel-body-->*/
/*                 </div><!-- Panel-Primary -->*/
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
/* {% block javascripts %}*/
/* <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/* <script src="{{ asset('public/js/jquery.maskedinput.js') }}"></script>*/
/* <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/* <script>*/
/* {{ parent() }}*/
/* var editadas;*/
/* //Obtener los datos solicitados*/
/* $(function () {*/
/*     selectMatricula();*/
/*     $('#nota_nota').attr('disabled', true);*/
/*     $('#body_tabla_mats').append("<h4>" + "<span class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");*/
/*     $('#panel_competencias').append("<h4>" + "<span class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");*/
/* */
/*                     //Evento cuando cambia de asignacion*/
/*                     $("#nota_asignacion").change(function () {*/
/*                         $("#nota_asignacion").attr('disabled', 'disabled');*/
/*                         var data = {*/
/*                             asignacion_id: $(this).val()*/
/*                         };*/
/*                         if (data["asignacion_id"] === "") {*/
/*                             $("#nota_asignacion").prop("disabled", false);*/
/*                             resetearFormulario();*/
/*                         } else {*/
/*                             $("#contenedor_promedio").addClass("hidden");*/
/*                             $("#body_promedio").empty();*/
/*                             $('#panel_escoger_est').slideUp("slow");*/
/*                             $('#panel_registrar_notas').slideUp("slow");*/
/*                             $.ajax({*/
/*                                 type: 'post',*/
/*                                 url: '{{ path("select_matriculas") }}',*/
/*                                 data: data,*/
/*                                 success: function (data) {*/
/*                                     if ($("#confirmacion")) {*/
/*                                         $("#confirmacion").remove();*/
/*                                     }*/
/*                                     $('#div_lista_espera').empty();*/
/*                                     setearMatriculas(data);*/
/*                                 }*/
/*                             });*/
/*                             $.ajax({*/
/*                                 type: 'post',*/
/*                                 url: '{{ path("select_competencias") }}',*/
/*                                 data: data,*/
/*                                 success: function (data) {*/
/*                                     $('#div_registrar_espera').empty();*/
/*                                     eliminarInputsNota();*/
/*                                     $('#panel_competencias').empty();*/
/*                                     setearCompetencias(data);*/
/*                                     comprobarCompetencias();*/
/*                                     espera(5);*/
/*                                     $("#nota_asignacion").prop("disabled", false);*/
/*                                     $('#enviar_form').attr('disabled', 'disabled');*/
/*                                     $('#enviar_form').removeClass("hidden");*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                     });*/
/* });*/
/* */
/* /* -- Acción Submit: Enviar Formulario -- *//* */
/* */
/* //Enviar formulario por AJAX*/
/* $('#form_notas').submit(function (e) {*/
/*     e.preventDefault();*/
/*     setearInputsNota();*/
/*     $('#div_registrar_espera').empty();*/
/*     $('#div_lista_espera').empty();*/
/*     if ($("#confirmacion")) {*/
/*         $("#confirmacion").remove();*/
/*     }     */
/*     if(validarCompetencias() == 1){  espera(3); return false; }*/
/*     if(editadas == 0){*/
/*         espera(2);*/
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: $(this).attr('action'),*/
/*             data: $(this).serialize(),*/
/*             success: function (data) {*/
/*                 notificacionRegistrar(1); */
/*                 editadas = 1;*/
/*                 setearNotasExistentes();*/
/*             }*/
/*         });*/
/*     } else {*/
/*         espera(4);*/
/*         $.ajax({*/
/*             type: "POST",*/
/*             url: '{{ path("notas_edit") }}',*/
/*             data: $(this).serialize(),*/
/*             success: function (data) {*/
/*                 notificacionRegistrar(2);*/
/*                 setearNotasExistentes();*/
/*             }*/
/*         });*/
/*     }*/
/*     return false;*/
/* });*/
/* */
/* //Reinicia el combo matriculas*/
/* function selectMatricula() {*/
/*     $("#nota_matricula").attr('disabled', 'disabled');*/
/*     $('#nota_matricula').html('<option>-- Seleccione una Asignacion --</option>');*/
/* }*/
/* */
/* //Muestra el mensaje de las notas registradas*/
/* function notificacionRegistrar(ubicacion) {*/
/*     if(ubicacion === 1){*/
/*         confirmacion = "<div id='confirmacion' class='alert alert-success'>" +*/
/*         "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +*/
/*         'Notas Registradas con Éxito.' +*/
/*         "</div>";*/
/*         $('#confirmacion').hide().fadeIn(300);*/
/*         $('#div_registrar_espera').empty();*/
/*         $('#div_registrar_espera').append(confirmacion);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#confirmacion").fadeOut(2000);*/
/*             }, 3000);*/
/*         });*/
/*     }*/
/*     if(ubicacion === 2){*/
/*         confirmacion = "<div id='confirmacion' class='alert alert-success'>" +*/
/*         "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +*/
/*         'Notas del Estudiante Editadas con Éxito.' +*/
/*         "</div>";*/
/*         $('#confirmacion').hide().fadeIn(300);*/
/*         $('#div_registrar_espera').empty();*/
/*         $('#div_registrar_espera').append(confirmacion);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#confirmacion").fadeOut(2000);*/
/*             }, 3000);*/
/*         });*/
/*     }*/
/* }*/
/* */
/* //Limpia el formulario*/
/* function resetearFormulario() {*/
/*     $("#contenedor_promedio").addClass("hidden");*/
/*     $("#body_promedio").empty();*/
/*     $("#tabla_mats").slideUp("slow");*/
/*     $('#form_notas')[0].reset();*/
/*     limpiarInputsNota();*/
/*     selectMatricula();*/
/*     $('#enviar_form').addClass("hidden");*/
/*     $("#enviar_form").attr('disabled', 'disabled');*/
/*     $('#body_tabla_mats').empty();*/
/*     $('#panel_competencias').empty();*/
/*     $("#div_registrar_espera").empty();*/
/*     $('#body_tabla_mats').append("<h4>" + "<span id='espera' class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");*/
/*     $('#panel_competencias').append("<h4>" + "<span id='espera' class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");*/
/*     $('#head_tabla_mats').addClass("hidden");*/
/*     $('#nota_nota').attr('disabled', 'disabled');*/
/*     $("#tabla_mats").slideDown(1000);*/
/* }*/
/* */
/* //Setear el elemento seleccionado de la tabla en el Combo Estudiantes y Cargar Notas existentes*/
/* function matriculaActiva(id_matricula, id_tabla) {*/
/*     $('#nota_matricula').val("" + id_matricula + "");*/
/*     if ($("#confirmacion")) {*/
/*         $("#confirmacion").remove();*/
/*     }*/
/*     filas = $('#body_tabla_mats').children();*/
/*     for (i = 0; i < filas.length; i++) {*/
/*         filas[i].style.background = (filas[i].style.background === '') ? '#FFFFFF' : '';*/
/*     }*/
/*     filas[id_tabla].style.backgroundColor = "#D9EDF7";*/
/*     restaurarPanelesCompetencias();*/
/*     setearNotasExistentes(); /* Aqui setea existentes *//* */
/*     $(document).ready(function () {*/
/*         setTimeout(function () {*/
/*             $("#tag_selec_est").fadeOut(400);*/
/*         }, 400);*/
/*     });*/
/*     $("#enviar_form").prop("disabled", false);*/
/*     $("#input_nota_0").focus();*/
/* }*/
/* */
/* */
/* // Setea las notas en los campos si existen*/
/* function setearNotasExistentes(){*/
/*     var data = {*/
/*         asignacion_id: $("#nota_asignacion").val(),*/
/*         periodo_id: $("#nota_periodo").val(),*/
/*         matricula_id: $("#nota_matricula").val()*/
/*     };*/
/*     $.ajax({*/
/*         type: 'post',*/
/*         url: '{{ path("nota_existente") }}',*/
/*         data: data,*/
/*         success: function (data) {*/
/*             if(data.length > 0){*/
/*                 $("#panel_competencias input").each(function (index)*/
/*                 {*/
/*                     if(esEntero(data[0][index]["nota"])){*/
/*                         $(this).val(data[0][index]["nota"] + "." + 0);*/
/*                     } else {*/
/*                         $(this).val(data[0][index]["nota"]);*/
/*                     }*/
/*                     $(this).prop("disabled", false);*/
/*                 });*/
/*                 editadas = 1;*/
/*                 $("#body_promedio").empty();*/
/*                 $("#body_promedio").append("<medium class='text-justify' style='word-wrap: break-word;'>Ya se han registrado notas en el estudiante, tiene la opción de editar.<br/><br/>El promedio de la asignatura es de: <center><strong><h3>" + data[1].toFixed("1") + "</h3></strong></center></medium>");*/
/*                 $("#contenedor_promedio").removeClass("hidden");*/
/*                 $('#body_promedio').hide().fadeIn(500);*/
/*                 $("#input_nota_0").focus();*/
/*             } else {*/
/*                 editadas = 0;*/
/*                 $("#body_promedio").empty();*/
/*                 $("#body_promedio").append("<medium class='text-justify' style='word-wrap: break-word;'>El estudiante no tiene notas registradas aún.</medium>");*/
/*                 $("#contenedor_promedio").removeClass("hidden");*/
/*                 $('#body_promedio').hide().fadeIn(500);*/
/*                 limpiarInputsNota();*/
/*                 $("#panel_competencias input").each(function (index)*/
/*                 {*/
/*                     $(this).prop("disabled", false);*/
/*                 });*/
/*                 $("#input_nota_0").focus();*/
/*             }*/
/*         }*/
/*     });*/
/* }*/
/* */
/* //Muestra mensaje de espera en la ubicacion indicada*/
/* function espera(ubicacion) {*/
/*     if (ubicacion === 1) {*/
/*         $('#div_lista_espera').append("<h4 id='tag_espera_1'>" + "<span class='label label-info'>" + "Cargando..." + "</span>" + "</h4>");*/
/*         $('#tag_espera_1').hide().fadeIn(200);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#tag_espera_1").fadeOut(350);*/
/*             }, 950);*/
/*         });*/
/*         return true;*/
/*     }*/
/*     if (ubicacion === 2){*/
/*         $('#div_registrar_espera').append("<h4 id='tag_espera_2'>" + "<span class='label label-info'>" + "Registrando Notas.." + "</span>" + "</h4>" + "<br/>");*/
/*         $('#tag_espera_2').hide().fadeIn(200);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#tag_espera_2").fadeOut(350);*/
/*             }, 950);*/
/*         });*/
/*         return true;*/
/*     }*/
/*     if (ubicacion === 3){*/
/*         $('#div_registrar_espera').append("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +*/
/*             "<h4 id='error_comp'>" + */
/*             "<span class='label label-danger'>" + */
/*             "Debes llenar la nota para cada competencia y que la nota ingresada no sea mayor a 5." + */
/*             "</span>" + "</h4>" + "<br/>");*/
/*         $('#error_comp').hide().fadeIn(500);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#error_comp").fadeOut(350);*/
/*             }, 3800);*/
/*         });*/
/*         return true;*/
/*     }*/
/*     if(ubicacion === 4){*/
/*         $('#div_registrar_espera').append("<h4 id='tag_espera_3'>" + "<span class='label label-info'>" + "Editando Notas.." + "</span>" + "</h4>" + "<br/>");*/
/*         $('#tag_espera_3').hide().fadeIn(200);*/
/*         $(document).ready(function () {*/
/*             setTimeout(function () {*/
/*                 $("#tag_espera_3").fadeOut(350);*/
/*             }, 950);*/
/*         });*/
/*         return true;*/
/*     }*/
/* */
/*     if(ubicacion === 5){*/
/*         $('#div_registrar_espera').append("<h4 id='tag_selec_est'>" + "<span class='label label-info'>" + "Selecciona un estudiante para continuar." + "</span>" + "</h4>" + "<br/>");*/
/*         $('#tag_selec_est').hide().fadeIn(1000);*/
/*         return true;*/
/*     }*/
/* }*/
/* */
/* // Devolver las Matriculas para Setearlas en la Tabla*/
/* function crearTablaMatriculas(data) {*/
/*     var matriculasProcesar = new Array();*/
/*     for (i = 0; i < data.length; i++) {*/
/*         fila = "<tr id='matricula_sele_" + data[i]["id"] + "'>" +*/
/*         "<td>" + data[i]["id"] + "</td>" +*/
/*         "<td>" + data[i]["nombre"] + "</td>" +*/
/*         "<td>" + "<button id='" + data[i]["id"] + "' type='button' class='btn btn-info' onclick='matriculaActiva(this.id," + i + ")'>" + "<i class='glyphicon glyphicon-hand-up'>" + "</i>" + "</button>" + "</td>" +*/
/*         "</tr>";*/
/*         matriculasProcesar.push(fila);*/
/*     }*/
/*     return matriculasProcesar;*/
/* }*/
/* */
/* //Instancia las matriculas en el combo y en la lista*/
/* function setearMatriculas(data) {*/
/*     var $matricula_selector = $('#nota_matricula');*/
/*     $('#head_tabla_mats').addClass("hidden");*/
/*     $matricula_selector.removeAttr("disabled");*/
/*     $matricula_selector.html('<option>-- Seleccionar un Estudiante --</option>');*/
/*     $('#body_tabla_mats').empty();*/
/*     $('#nota_nota').val("");*/
/*     $('#head_tabla_mats').removeClass("hidden");*/
/*     $('#body_tabla_mats').append(crearTablaMatriculas(data));*/
/* */
/*     for (var i = 0, total = data.length; i < total; i++) {*/
/*         $matricula_selector.append('<option value="' + data[i]["id"] + '">' + data[i]["id"] + ' - ' + data[i]["nombre"] + '</option>');*/
/*     }*/
/* */
/*     $('#panel_escoger_est').slideDown(400);*/
/* }*/
/* */
/* // Crear las competencias de la asignatura y sus campos de notas correspondientes*/
/* function setearCompetencias(data) {*/
/*     var $competencia_selector = $('#nota_competencia');*/
/*     $competencia_selector.removeAttr("disabled");*/
/*     $('#nota_nota').removeAttr("disabled");*/
/*     $competencia_selector.html('<option>-- Seleccionar una Competencia --</option>');*/
/*     for (var i = 0, total = data.length; i < total; i++) {*/
/*         $competencia_selector.append('<option value="' + data[i]["id"] + '">' + data[i]["id"] + ' - ' + data[i]["contenido"] + '</option>');*/
/*         competencia = "<div class='col-xs-4'>" +*/
/*         "<div id='panel_comp_" + i + "' class='panel panel-info'>" +*/
/*         "<div class='panel-heading'>" +*/
/*         "<h3 class='panel-title'>" + "Competencia " + (i + 1) + "</h3>" +*/
/*         "</div>" +*/
/*         "<div class='panel-body' style='word-wrap: break-word;'>" +*/
/*         data[i]['id'] + " - " + data[i]['contenido'] + "<br/>" +*/
/*         "<div class='form-group'>" +*/
/*         "<br/>" +*/
/*         "<label for='lbl_nota_" + i + "'>" + "Nota: " + "</label>" +*/
/*         "<div id='div_nota_" + i + "'>" +*/
/*         "<input type='text' id='input_nota_" + i + "' class='form-control' onkeypress='numeros(event)' placeholder='Escriba la nota Ej: 5.0' />" +*/
/*         "</div>" +*/
/*         "</div>" +*/
/*         "</div>" +*/
/*         "</div>" +*/
/*         "</div>";*/
/*         //competencia = $(competencia).hide().fadeIn(1000);*/
/*         $('#panel_competencias').append(competencia);*/
/*         $("<input id='input_hide_" + i + "' class='hidden' type='number' name='notas[]' />").appendTo($('#form_notas'));*/
/*         $('#input_hide_' + i).mask("9.9");*/
/* */
/*         $('#input_nota_' + i).attr('disabled', true);*/
/*         $.mask.definitions['#']='[12345]';*/
/*         $('#input_nota_' + i).mask("#.9");*/
/*     }*/
/*     $('#panel_registrar_notas').slideDown(500);*/
/*     promedioFlotante();*/
/* }*/
/* */
/* // Notas: Setear inputs visibles en los inputs ocultos del formulario*/
/* function setearInputsNota() {*/
/*     $("#panel_competencias input").each(function (index)*/
/*     {*/
/*         $('#input_hide_' + index).val($(this).val());*/
/*     });*/
/* }*/
/* */
/* */
/* // Notas: Limpia los Inputs de las notas visibles y ocultos*/
/* function limpiarInputsNota() {*/
/*     $("#panel_competencias input").each(function (index)*/
/*     {*/
/*         $(this).val("");*/
/*         $('#input_hide_' + index).val("");*/
/*     });*/
/* }*/
/* */
/* // Notas: Eliminar los Inputs Ocultos de las notas*/
/* function eliminarInputsNota() {*/
/*     $("#panel_asignaciones input").each(function (index)*/
/*     {*/
/*         if ($(this).attr('id') === ("input_hide_" + index)) {*/
/*             $(this).remove();*/
/*         }*/
/*     });*/
/* }*/
/* */
/* // Cajas Competencias: Restaura el estilo por defecto*/
/* function restaurarPanelesCompetencias(){*/
/*     $("#panel_competencias input").each(function (index)*/
/*     {*/
/*         if($('#panel_comp_' + index).hasClass("panel-danger")){*/
/*             $('#panel_comp_' + index).removeClass("panel-danger");*/
/*             $('#panel_comp_' + index).addClass("panel-info");*/
/*         }  */
/*     });*/
/* }*/
/* */
/* /* Comprobar Competencias *//* */
/* // Verifica en tiempo real*/
/* */
/* function comprobarCompetencias(){*/
/*     $("#panel_competencias")*/
/*     .focusout(function() {*/
/*         $("#panel_competencias input").each(function (index)*/
/*         {*/
/*             if((!$.isNumeric($(this).val())) || parseFloat($(this).val()) > 5){*/
/*                 $('#panel_comp_' + index).addClass("panel-danger");*/
/*             } else {*/
/*                 $('#panel_comp_' + index).removeClass("panel-danger");*/
/*             }  */
/*         });*/
/*     });*/
/* }*/
/* */
/* /*  ---  Funciones de Validación --- *//* */
/* */
/* /* Validar Matricula *//* */
/* */
/* function validarMatricula(){*/
/*     var data = {*/
/*         matricula_id: $("#nota_matricula").val()*/
/*     };*/
/*     if(!parseInt($("#nota_matricula").val())){*/
/*         $('#div_lista_espera').append("<h4 id='error_matricula'>" + "<span class='label label-danger'>" + "Debes seleccionar un estudiante para continuar." + "</span>" + "</h4>");*/
/*         return false;*/
/*     }*/
/* }*/
/* */
/* /* Validar Competencias *//* */
/* // Verifica al enviar*/
/* */
/* function validarCompetencias(){*/
/*     confirmar = 0;*/
/*     $("#panel_competencias input").each(function (index)*/
/*     {*/
/*         if((!$.isNumeric($(this).val())) || parseFloat($(this).val()) > 5){*/
/*             $('#panel_comp_' + index).addClass("panel-danger");*/
/*             confirmar = 1;*/
/*         } else {*/
/*             $('#panel_comp_' + index).removeClass("panel-danger");*/
/*         }*/
/* */
/*     });*/
/*     return confirmar;*/
/* }*/
/* */
/* //Comprobar si un número es entero*/
/* */
/* function esEntero(numero){*/
/*     if (numero % 1 === 0) {*/
/*         return true;*/
/*     }*/
/*     return false;*/
/* }*/
/* */
/* */
/* //Instanciar la ventana promedio*/
/* function promedioFlotante(){*/
/*     posicion = 0;*/
/*     var posicion = ($("#contenedor_registrar").position().top / 45);*/
/*     $("#contenedor_promedio").css({top: posicion});*/
/* }*/
/* */
/* </script>*/
/* */
/* {% endblock %}*/
/* {% endblock %}*/
