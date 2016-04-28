<?php

/* AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig */
class __TwigTemplate_d00da8ab150cc88fdc6535b5fc41219c7fa22c0d1005c02180957b7a4e887443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig", 1);
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
        $__internal_73f5501ebfef9647d3280f1e325e236416fefadc2d00f718bb7fb9a63eb7b6ac = $this->env->getExtension("native_profiler");
        $__internal_73f5501ebfef9647d3280f1e325e236416fefadc2d00f718bb7fb9a63eb7b6ac->enter($__internal_73f5501ebfef9647d3280f1e325e236416fefadc2d00f718bb7fb9a63eb7b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f5501ebfef9647d3280f1e325e236416fefadc2d00f718bb7fb9a63eb7b6ac->leave($__internal_73f5501ebfef9647d3280f1e325e236416fefadc2d00f718bb7fb9a63eb7b6ac_prof);

    }

    // line 3
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_ab5c4e03cd79b58fae7718d0a479bcd71690cacf94812adc30fe987e2411aa47 = $this->env->getExtension("native_profiler");
        $__internal_ab5c4e03cd79b58fae7718d0a479bcd71690cacf94812adc30fe987e2411aa47->enter($__internal_ab5c4e03cd79b58fae7718d0a479bcd71690cacf94812adc30fe987e2411aa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 4
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_ab5c4e03cd79b58fae7718d0a479bcd71690cacf94812adc30fe987e2411aa47->leave($__internal_ab5c4e03cd79b58fae7718d0a479bcd71690cacf94812adc30fe987e2411aa47_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e728eb59974a24a2888b8c06d894f66a29c5d8f7c84cc75efdafd0783a51a875 = $this->env->getExtension("native_profiler");
        $__internal_e728eb59974a24a2888b8c06d894f66a29c5d8f7c84cc75efdafd0783a51a875->enter($__internal_e728eb59974a24a2888b8c06d894f66a29c5d8f7c84cc75efdafd0783a51a875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
               <form id=\"form_plan\" action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("planeadores_new");
        echo "\" method=\"POST\" novalidate role=\"form\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Crear Planeadores</h4></div>
                    <div id=\"panel_ver_notas\" class=\"panel-body\">
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-list-alt\"></i>  Escoger Asignación: </h5>
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/>
                            <medium><< Planeador para el periodo: </medium>
                            <medium id=\"periodo_numero\"><strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo " </strong> >></medium>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "
                        </div>
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 54
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
                            <button id=\"enviar_form\" type=\"submit\" class=\"btn btn-success\">
                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>       Crear Planeador
                            </button> 
                            <br/>
                        </div><!--/col-xs-12-->
                    </div><!-- Panel-ver-notas -->
                </form>
            </div><!-- contenedor-gestionar-busqueda -->
        </div><!-- contenedor-central -->

        <div id=\"contenedor_registrar_planeador\" class=\"col-sm-12\">
        </div><!-- contenedor-registrar -->

    </div><!-- /row-primera -->
</div><!-- row primera -->
</div><!--/container-->

<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 100
        $this->displayBlock('scripts', $context, $blocks);
        // line 105
        echo "
";
        
        $__internal_e728eb59974a24a2888b8c06d894f66a29c5d8f7c84cc75efdafd0783a51a875->leave($__internal_e728eb59974a24a2888b8c06d894f66a29c5d8f7c84cc75efdafd0783a51a875_prof);

    }

    // line 100
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_daa3407ba67c5a2875e2b867719c273d2c4bb979352dd0ed781f831ba14efb74 = $this->env->getExtension("native_profiler");
        $__internal_daa3407ba67c5a2875e2b867719c273d2c4bb979352dd0ed781f831ba14efb74->enter($__internal_daa3407ba67c5a2875e2b867719c273d2c4bb979352dd0ed781f831ba14efb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 101
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/planeador_docente.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_daa3407ba67c5a2875e2b867719c273d2c4bb979352dd0ed781f831ba14efb74->leave($__internal_daa3407ba67c5a2875e2b867719c273d2c4bb979352dd0ed781f831ba14efb74_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 102,  208 => 101,  202 => 100,  194 => 105,  192 => 100,  141 => 54,  135 => 51,  131 => 50,  124 => 48,  118 => 45,  109 => 39,  105 => 38,  89 => 25,  85 => 24,  80 => 22,  65 => 10,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*                <form id="form_plan" action="{{ path('planeadores_new') }}" method="POST" novalidate role="form">*/
/*                 {{ form_row(form._token) }}*/
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
/*                             {{ form_widget(form.periodo, {'attr': {'class':'hidden'}})}}*/
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
/*                             <button id="enviar_form" type="submit" class="btn btn-success">*/
/*                                 <span class="glyphicon glyphicon-floppy-saved"></span>       Crear Planeador*/
/*                             </button> */
/*                             <br/>*/
/*                         </div><!--/col-xs-12-->*/
/*                     </div><!-- Panel-ver-notas -->*/
/*                 </form>*/
/*             </div><!-- contenedor-gestionar-busqueda -->*/
/*         </div><!-- contenedor-central -->*/
/* */
/*         <div id="contenedor_registrar_planeador" class="col-sm-12">*/
/*         </div><!-- contenedor-registrar -->*/
/* */
/*     </div><!-- /row-primera -->*/
/* </div><!-- row primera -->*/
/* </div><!--/container-->*/
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
