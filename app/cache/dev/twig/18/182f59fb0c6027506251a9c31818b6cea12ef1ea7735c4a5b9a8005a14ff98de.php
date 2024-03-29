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
        $__internal_04be99c83d6c5086d592454b873cbf2c8339d76cb21ff2dbf020c6167da943be = $this->env->getExtension("native_profiler");
        $__internal_04be99c83d6c5086d592454b873cbf2c8339d76cb21ff2dbf020c6167da943be->enter($__internal_04be99c83d6c5086d592454b873cbf2c8339d76cb21ff2dbf020c6167da943be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdonaiUnico/Planeadores/planeador_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04be99c83d6c5086d592454b873cbf2c8339d76cb21ff2dbf020c6167da943be->leave($__internal_04be99c83d6c5086d592454b873cbf2c8339d76cb21ff2dbf020c6167da943be_prof);

    }

    // line 3
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_81fdd220922ff6d0d1d27dba1cef75f8e7d8f1b4437e029bd77f5348de761dc1 = $this->env->getExtension("native_profiler");
        $__internal_81fdd220922ff6d0d1d27dba1cef75f8e7d8f1b4437e029bd77f5348de761dc1->enter($__internal_81fdd220922ff6d0d1d27dba1cef75f8e7d8f1b4437e029bd77f5348de761dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_81fdd220922ff6d0d1d27dba1cef75f8e7d8f1b4437e029bd77f5348de761dc1->leave($__internal_81fdd220922ff6d0d1d27dba1cef75f8e7d8f1b4437e029bd77f5348de761dc1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7100c9ada9d2b85945ba357db59f4d5c72b090283288448b5dd3f2fd068c590d = $this->env->getExtension("native_profiler");
        $__internal_7100c9ada9d2b85945ba357db59f4d5c72b090283288448b5dd3f2fd068c590d->enter($__internal_7100c9ada9d2b85945ba357db59f4d5c72b090283288448b5dd3f2fd068c590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <form enctype=\"multipart/form-data\" id=\"form_plan\" action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("planeadores_new");
        echo "\" enctype=\"multipart/form-data\" method=\"POST\" role=\"form\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <input id=\"plan_actual\" type=\"text\" name=\"idPlaneador\" class=\"hidden\" />
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Gestionar Planeadores</h4></div>
                        <div id=\"panel_ver_notas\" class=\"panel-body\">
                            <div class=\"col-xs-4\">
                                <div class=\"form-group\">
                                    <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-list-alt\"></i>  Escoger Asignación: </h5>
                                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/>
                                <medium><< Planeador para el periodo: </medium>
                                <medium id=\"periodo_numero\"><strong>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo " </strong> >></medium>
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
                            </div>
                            <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>
                            </div> 
                            <br/><br/><br/>
                            <div id=\"contenedor-registrar-planeador\"class=\"col-xs-12\">
                                <hr>
                                <h4 id=\"subtitulo\"><span class=\"glyphicon glyphicon-file\"></span>  Asignar Temas </h4>
                                <br/>
                                <div id=\"notificacion_submit\">
                                </div>
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
                                <div id=\"espera_planeador\">
                                    <div id=\"espera_tema_error\">
                                    </div>
                                    <p id=\"espera_añadir\" class=\"hidden\"><strong>NOTA: </strong> Haz Click en el botón \"Añadir Tema\" para comenzar a llenar el planeador.</p>
                                    <p id=\"espera_escoger\"><strong>NOTA: </strong> Escoge una asignación para gestionar el planeador.</p>
                                </div>
                                <!--<input id=\"64\" type=\"text\" name=\"hola\" class=\"form-control\" />-->
                                <hr><button id=\"add\" type='button' class='btn btn-info hidden' onclick=\"agregar();\">
                                <span class=\"glyphicon glyphicon-plus\"></span>   Añadir Tema</button>
                                <button id=\"enviar_form\" type=\"submit\" class=\"btn btn-success hidden\">
                                    <span class=\"glyphicon glyphicon-floppy-saved\"></span>       Guardar Planeador
                                </button> 
                                <br/>
                            </div><!--/col-xs-12-->
                        </div><!-- Panel-ver-notas -->
                    </form>
                </div><!-- contenedor-gestionar-busqueda -->
            </div><!-- contenedor-central -->

        </div><!-- /row-primera -->
    </div><!-- row primera -->
</div><!--/container-->

<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 107
        $this->displayBlock('scripts', $context, $blocks);
        // line 129
        echo "
            ";
        
        $__internal_7100c9ada9d2b85945ba357db59f4d5c72b090283288448b5dd3f2fd068c590d->leave($__internal_7100c9ada9d2b85945ba357db59f4d5c72b090283288448b5dd3f2fd068c590d_prof);

    }

    // line 107
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8883f58402e91e9a649b31699a0d56064c2316353cb630200934700d058187a2 = $this->env->getExtension("native_profiler");
        $__internal_8883f58402e91e9a649b31699a0d56064c2316353cb630200934700d058187a2->enter($__internal_8883f58402e91e9a649b31699a0d56064c2316353cb630200934700d058187a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 108
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/underscore.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/html\" id=\"añadir_tema\">
    <tr id=\"tema_<%= element.i %>\"> 
        <td id=\"id_tema_<%= element.i %>\"><%= element.i %></td>
        <td><div id=\"group_tema_<%= element.i %>\" class=\"form-group\">
            <input id=\"nomTema_<%= element.i %>\" type=\"text\" class=\"form-control nom_temas\" placeholder=\"Escriba el Tema\" name=\"nomTema[<%= element.i - 1 %>]\" /></div></td>
            <td>
                <div style=\"width: 300px\" class=\"input-daterange input-group\" id=\"datepicker_<%= element.i %>\">
                    <div id=\"group_fechain_<%= element.i %>\" class=\"col-xs-6 form-group\">
                        <input id=\"fechain_tema_<%= element.i %>\" type=\"text\" name=\"fechaIn[<%= element.i - 1 %>]\" class=\"form-control input_fechain\" placeholder=\"Fecha Inicio\" /></div>
                        <div id=\"group_fechafin_<%= element.i %>\" class=\"col-xs-6 form-group\">
                            <input id=\"fechafin_tema_<%= element.i %>\" type=\"text\" name=\"fechaFin[<%= element.i - 1 %>]\" class=\"form-control input_fechafin\" placeholder=\"Fecha Final\" /></div>
                        </div>
                    </td>
                    <td><button id=\"btn_remove_<%= element.i %>\" type=\"button\" class=\"btn btn-danger\" onclick=\"eliminarTema(this.id)\"><small><span class=\"glyphicon glyphicon-remove\"></span></small></button></td>
                </tr>
            </script>
            <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.formatDateTime.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/planeador_docente.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_8883f58402e91e9a649b31699a0d56064c2316353cb630200934700d058187a2->leave($__internal_8883f58402e91e9a649b31699a0d56064c2316353cb630200934700d058187a2_prof);

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
        return array (  244 => 127,  240 => 126,  236 => 125,  215 => 108,  209 => 107,  201 => 129,  199 => 107,  144 => 57,  138 => 54,  134 => 53,  127 => 51,  120 => 47,  109 => 39,  105 => 38,  89 => 25,  85 => 24,  80 => 22,  65 => 10,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/* */
/*             <!-- center left-->*/
/*             <div id="contenedor_gestionar_busqueda" class="col-md-12">*/
/*                 <form enctype="multipart/form-data" id="form_plan" action="{{ path('planeadores_new') }}" enctype="multipart/form-data" method="POST" role="form">*/
/*                     {{ form_row(form._token) }}*/
/*                     <input id="plan_actual" type="text" name="idPlaneador" class="hidden" />*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Gestionar Planeadores</h4></div>*/
/*                         <div id="panel_ver_notas" class="panel-body">*/
/*                             <div class="col-xs-4">*/
/*                                 <div class="form-group">*/
/*                                     <h5 id="subtitulo"><i class="glyphicon glyphicon-list-alt"></i>  Escoger Asignación: </h5>*/
/*                                     {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h5><medium id="periodo_fechas">{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }}</medium><br/>*/
/*                                 <medium><< Planeador para el periodo: </medium>*/
/*                                 <medium id="periodo_numero"><strong>{{ periodo_actual.numero }} </strong> >></medium>*/
/*                                 {{ form_widget(form.periodo, {'attr': {'class':'hidden'}})}}*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h5><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/*                             </div> */
/*                             <br/><br/><br/>*/
/*                             <div id="contenedor-registrar-planeador"class="col-xs-12">*/
/*                                 <hr>*/
/*                                 <h4 id="subtitulo"><span class="glyphicon glyphicon-file"></span>  Asignar Temas </h4>*/
/*                                 <br/>*/
/*                                 <div id="notificacion_submit">*/
/*                                 </div>*/
/*                                 <br/>*/
/*                                 <table id="tabla_plan" class="table table-hover hidden">*/
/*                                     <thead id="head_tabla_plan">*/
/*                                         <tr>*/
/*                                             <th>ID</th>*/
/*                                             <th>Tema</th>*/
/*                                             <th>Fechas</th>*/
/*                                             <th>Acciones</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody id="body_tabla_plan">*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                                 <hr>*/
/*                                 <div id="espera_planeador">*/
/*                                     <div id="espera_tema_error">*/
/*                                     </div>*/
/*                                     <p id="espera_añadir" class="hidden"><strong>NOTA: </strong> Haz Click en el botón "Añadir Tema" para comenzar a llenar el planeador.</p>*/
/*                                     <p id="espera_escoger"><strong>NOTA: </strong> Escoge una asignación para gestionar el planeador.</p>*/
/*                                 </div>*/
/*                                 <!--<input id="64" type="text" name="hola" class="form-control" />-->*/
/*                                 <hr><button id="add" type='button' class='btn btn-info hidden' onclick="agregar();">*/
/*                                 <span class="glyphicon glyphicon-plus"></span>   Añadir Tema</button>*/
/*                                 <button id="enviar_form" type="submit" class="btn btn-success hidden">*/
/*                                     <span class="glyphicon glyphicon-floppy-saved"></span>       Guardar Planeador*/
/*                                 </button> */
/*                                 <br/>*/
/*                             </div><!--/col-xs-12-->*/
/*                         </div><!-- Panel-ver-notas -->*/
/*                     </form>*/
/*                 </div><!-- contenedor-gestionar-busqueda -->*/
/*             </div><!-- contenedor-central -->*/
/* */
/*         </div><!-- /row-primera -->*/
/*     </div><!-- row primera -->*/
/* </div><!--/container-->*/
/* */
/* <!-- /Main -->*/
/* <footer id="footer"class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/* <!-- script references -->*/
/* {% block scripts %}*/
/* <script src="{{ asset('public/js/underscore.js') }}"></script>*/
/* <script type="text/html" id="añadir_tema">*/
/*     <tr id="tema_<%= element.i %>"> */
/*         <td id="id_tema_<%= element.i %>"><%= element.i %></td>*/
/*         <td><div id="group_tema_<%= element.i %>" class="form-group">*/
/*             <input id="nomTema_<%= element.i %>" type="text" class="form-control nom_temas" placeholder="Escriba el Tema" name="nomTema[<%= element.i - 1 %>]" /></div></td>*/
/*             <td>*/
/*                 <div style="width: 300px" class="input-daterange input-group" id="datepicker_<%= element.i %>">*/
/*                     <div id="group_fechain_<%= element.i %>" class="col-xs-6 form-group">*/
/*                         <input id="fechain_tema_<%= element.i %>" type="text" name="fechaIn[<%= element.i - 1 %>]" class="form-control input_fechain" placeholder="Fecha Inicio" /></div>*/
/*                         <div id="group_fechafin_<%= element.i %>" class="col-xs-6 form-group">*/
/*                             <input id="fechafin_tema_<%= element.i %>" type="text" name="fechaFin[<%= element.i - 1 %>]" class="form-control input_fechafin" placeholder="Fecha Final" /></div>*/
/*                         </div>*/
/*                     </td>*/
/*                     <td><button id="btn_remove_<%= element.i %>" type="button" class="btn btn-danger" onclick="eliminarTema(this.id)"><small><span class="glyphicon glyphicon-remove"></span></small></button></td>*/
/*                 </tr>*/
/*             </script>*/
/*             <script src="{{ asset('public/js/datepicker/bootstrap-datepicker.js') }}"></script>*/
/*             <script src="{{ asset('public/js/jquery.formatDateTime.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/planeador_docente.js') }}"></script>*/
/*             {% endblock %}*/
/* */
/*             {% endblock %}*/
