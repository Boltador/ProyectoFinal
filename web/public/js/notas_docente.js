var editadas;
var notaActiva;

/** Eventos Listener **/

//Evento Click para Registrar
$("#target_registrar").click(function() {
    if(!$("#contenedor_ver_notas").hasClass("hidden")){
        $("#contenedor_ver_notas").addClass("hidden");
    }
    $("#contenedor_gestionar").removeClass("hidden");
    $("#contenedor_registrar").removeClass("hidden");
    resetearVerNotas();
    $('#combo_asig_ver :nth-child(1)').prop('selected', true);
    $('#combo_periodo_ver :nth-child(1)').prop('selected', true);
    $('#combo_periodo_ver').val($('#combo_periodo_ver :nth-last-child(1)').val());
});

//Evento Click para Ver
$("#target_ver").click(function() {
    if(!($("#contenedor_gestionar").hasClass("hidden") && $("#contenedor_registrar").hasClass("hidden"))){
        $("#contenedor_gestionar").addClass("hidden");
        $("#contenedor_registrar").addClass("hidden");
    }
    $("#contenedor_ver_notas").removeClass("hidden");
    resetearFormulario();
});

/** Fin Eventos Listener **/

/* --- 

Javascript del Módulo Registrar Notas

--- */

//Obtener los datos solicitados
$(function () {
    selectMatricula();
    $('#nota_nota').attr('disabled', true);
    $('#body_tabla_mats').append("<h4>" + "<span class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");
    $('#panel_competencias').append("<h4>" + "<span class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");

                    //Evento cuando cambia de asignacion
                    $("#nota_asignacion").change(function () {
                        $("#nota_asignacion").attr('disabled', 'disabled');
                        var data = {
                            asignacion_id: $(this).val()
                        };
                        if (data["asignacion_id"] === "") {
                            $("#nota_asignacion").prop("disabled", false);
                            resetearFormulario();
                        } else {
                            $("#contenedor_promedio").addClass("hidden");
                            $("#body_promedio").empty();
                            $('#panel_escoger_est').slideUp("slow");
                            $('#panel_registrar_notas').slideUp("slow");
                            $.ajax({
                                type: 'post',
                                url: Routing.generate('select_matriculas'),
                                data: data,
                                success: function (data) {
                                    if ($("#confirmacion")) {
                                        $("#confirmacion").remove();
                                    }
                                    $('#div_lista_espera').empty();
                                    setearMatriculas(data);
                                }
                            });
                            $.ajax({
                                type: 'post',
                                url: Routing.generate('select_competencias'),
                                data: data,
                                success: function (data) {
                                    $('#div_registrar_espera').empty();
                                    $('#panel_competencias').empty();
                                    setearCompetencias(data);
                                    comprobarCompetencias();
                                    espera(5);
                                    $("#nota_asignacion").prop("disabled", false);
                                    $('#enviar_form').attr('disabled', 'disabled');
                                    $('#enviar_form').removeClass("hidden");
                                }
                            });
                        }
                    });
});

/* -- Acción Submit: Enviar Formulario -- */

//Enviar formulario por AJAX
$('#form_notas').submit(function (e) {
    e.preventDefault();
    $('#div_registrar_espera').empty();
    $('#div_lista_espera').empty();
    if ($("#confirmacion")) {
        $("#confirmacion").remove();
    }     
    if(validarCompetencias() == 1){  espera(3); return false; }
    if(editadas == 0){
        espera(2);
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                notificacionRegistrar(1); 
                editadas = 1;
                setearNotasExistentes();
                confirmarNota($("#nota_matricula").val(), notaActiva);
            }
        });
    } else {
        espera(4);
        $.ajax({
            type: "POST",
            url: Routing.generate('notas_edit'),
            data: $(this).serialize(),
            success: function (data) {
                notificacionRegistrar(2);
                setearNotasExistentes();
                confirmarNota($("#nota_matricula").val(), notaActiva);
            }
        });
    }
    return false;
});

//Reinicia el combo matriculas
function selectMatricula() {
    $("#nota_matricula").attr('disabled', 'disabled');
    $('#nota_matricula').html('<option>-- Seleccione una Asignacion --</option>');
}

//Muestra el mensaje de las notas registradas
function notificacionRegistrar(ubicacion) {
    if(ubicacion === 1){
        confirmacion = "<div id='confirmacion' class='alert alert-success'>" +
        "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +
        'Notas Registradas con Éxito.' +
        "</div>";
        $('#confirmacion').hide().fadeIn(300);
        $('#div_registrar_espera').empty();
        $('#div_registrar_espera').append(confirmacion);
        $(document).ready(function () {
            setTimeout(function () {
                $("#confirmacion").fadeOut(2000);
            }, 3000);
        });
    }
    if(ubicacion === 2){
        confirmacion = "<div id='confirmacion' class='alert alert-success'>" +
        "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +
        'Notas del Estudiante Editadas con Éxito.' +
        "</div>";
        $('#confirmacion').hide().fadeIn(300);
        $('#div_registrar_espera').empty();
        $('#div_registrar_espera').append(confirmacion);
        $(document).ready(function () {
            setTimeout(function () {
                $("#confirmacion").fadeOut(2000);
            }, 3000);
        });
    }
}

//Limpia el formulario
function resetearFormulario() {
    $("#contenedor_promedio").addClass("hidden");
    $("#body_promedio").empty();
    $("#tabla_mats").slideUp("slow");
    $('#form_notas')[0].reset();
    limpiarInputsNota();
    selectMatricula();
    $('#enviar_form').addClass("hidden");
    $("#enviar_form").attr('disabled', 'disabled');
    $('#body_tabla_mats').empty();
    $('#panel_competencias').empty();
    $("#div_registrar_espera").empty();
    $('#body_tabla_mats').append("<h4>" + "<span id='espera' class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");
    $('#panel_competencias').append("<h4>" + "<span id='espera' class='label label-info'>" + "Selecciona una asignación de la lista para continuar" + "</span>" + "</h4>");
    $('#head_tabla_mats').addClass("hidden");
    $('#nota_nota').attr('disabled', 'disabled');
    $("#tabla_mats").slideDown(1000);
}

//Setear el elemento seleccionado de la tabla en el Combo Estudiantes y Cargar Notas existentes
function matriculaActiva(id_matricula, id_tabla) {
    $('#nota_matricula').val("" + id_matricula + "");
    if ($("#confirmacion")) {
        $("#confirmacion").remove();
    }
    filas = $('#body_tabla_mats').children();
    for (i = 0; i < filas.length; i++) {
        filas[i].style.background = (filas[i].style.background === '') ? '#FFFFFF' : '';
    }
    filas[id_tabla].style.backgroundColor = "#D9EDF7";
    notaActiva = id_tabla;
    restaurarPanelesCompetencias();
    setearNotasExistentes(); /* Aqui setea existentes */
    $(document).ready(function () {
        setTimeout(function () {
            $("#tag_selec_est").fadeOut(400);
        }, 400);
    });
    $("#enviar_form").prop("disabled", false);
    $("#input_nota_0").focus();
}


// Setea las notas en los campos si existen
function setearNotasExistentes(){
    var data = {
        asignacion_id: $("#nota_asignacion").val(),
        periodo_id: $("#nota_periodo").val(),
        matricula_id: $("#nota_matricula").val()
    };
    $.ajax({
        type: 'post',
        url: Routing.generate('nota_existente'),
        data: data,
        success: function (data) {
            if(data.length > 0){
                $("#panel_competencias input").each(function (index)
                {
                    if(esEntero(data[0][index]["nota"])){
                        $(this).val(data[0][index]["nota"] + "." + 0);
                    } else {
                        $(this).val(data[0][index]["nota"]);
                    }
                    $(this).prop("disabled", false);
                });
                editadas = 1;
                $("#body_promedio").empty();
                $("#body_promedio").append("<medium class='text-justify' style='word-wrap: break-word;'>Ya se han registrado notas en el estudiante, tiene la opción de editar.<br/><br/>El promedio de la asignatura es de: <center><strong><h3>" + data[1].toFixed("1") + "</h3></strong></center></medium>");
                $("#contenedor_promedio").removeClass("hidden");
                $('#body_promedio').hide().fadeIn(500);
                $("#input_nota_0").focus();
            } else {
                editadas = 0;
                $("#body_promedio").empty();
                $("#body_promedio").append("<medium class='text-justify' style='word-wrap: break-word;'>El estudiante no tiene notas registradas aún.</medium>");
                $("#contenedor_promedio").removeClass("hidden");
                $('#body_promedio').hide().fadeIn(500);
                limpiarInputsNota();
                $("#panel_competencias input").each(function (index)
                {
                    $(this).prop("disabled", false);
                });
                $("#input_nota_0").focus();
            }
        }
    });
}

//Muestra mensaje de predefinido en la ubicacion indicada
function espera(ubicacion) {
    switch (ubicacion) {
        case 1:
        $('#div_espera_ver').append("<h4 id='tag_espera_1'>" + "<span class='label label-info'>" + "Cargando..." + "</span>" + "</h4><br/>");
        $('#tag_espera_1').hide().fadeIn(200);
        $(document).ready(function () {
            setTimeout(function () {
                $("#tag_espera_1").fadeOut(350);
            }, 950);
        });
        break;
        case 2:
        $('#div_registrar_espera').append("<h4 id='tag_espera_2'>" + "<span class='label label-info'>" + "Registrando Notas.." + "</span>" + "</h4>" + "<br/>");
        $('#tag_espera_2').hide().fadeIn(200);
        $(document).ready(function () {
            setTimeout(function () {
                $("#tag_espera_2").fadeOut(350);
            }, 950);
        });
        break;
        case 3:
        $('#div_registrar_espera').append("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" +
            "<h4 id='error_comp'>" + 
            "<span class='label label-danger'>" + 
            "Debes llenar la nota para cada competencia y que la nota ingresada no sea mayor a 5." + 
            "</span>" + "</h4>" + "<br/>");
        $('#error_comp').hide().fadeIn(500);
        $(document).ready(function () {
            setTimeout(function () {
                $("#error_comp").fadeOut(350);
            }, 3800);
        });
        break;
        case 4:
        $('#div_registrar_espera').append("<h4 id='tag_espera_3'>" + "<span class='label label-info'>" + "Editando Notas.." + "</span>" + "</h4>" + "<br/>");
        $('#tag_espera_3').hide().fadeIn(200);
        $(document).ready(function () {
            setTimeout(function () {
                $("#tag_espera_3").fadeOut(350);
            }, 950);
        });
        break;
        case 5:
        $('#div_registrar_espera').append("<h4 id='tag_selec_est'>" + "<span class='label label-info'>" + "Selecciona un estudiante para continuar." + "</span>" + "</h4>" + "<br/>");
        $('#tag_selec_est').hide().fadeIn(1000);
        break;
        case 6:
        $('#div_error_ver').append("<h4 id='error_ver'>" + 
            "<span class='label label-danger'>" + 
            "Selecciona una asignación y un periodo." + 
            "</span>" + "</h4>" + "<br/>");
        $('#error_ver').hide().fadeIn(500);
        $(document).ready(function () {
            setTimeout(function () {
                $("#error_ver").fadeOut(350);
            }, 2500);
        });
        break;

        default:
        alert("Error de Notificación");
        break;
    }
} /* Fin Función Espera */

// Devolver las Matriculas para Setearlas en la Tabla
function crearTablaMatriculas(data) {
    var matriculasProcesar = new Array();
    for (i = 0; i < data.length; i++) {
        fila = "<tr id='matricula_sele_" + data[i]["id"] + "'>" +
        "<td>" + data[i]["id"] + "</td>" +
        "<td>" + data[i]["nombre"] + "</td>" +
        "<td id='check_nota_"+ i +"'>" + "<medium><span class='label label-default'>" + "Espere..." + "</span></medium>" + "</td>" +
        "<td>" + "<button id='" + data[i]["id"] + "' type='button' class='btn btn-info' onclick='matriculaActiva(this.id," + i + ")'>" + "<i class='glyphicon glyphicon-hand-up'>" + "</i>" + "</button>" + "</td>" +
        "</tr>";
        confirmarNota(data[i]["id"], i);
        matriculasProcesar.push(fila);
    }
    return matriculasProcesar;
}

function confirmarNota(matricula_id, indice){
    var celda;
    var data = {
        asignacion_id: $("#nota_asignacion").val(),
        periodo_id: $("#nota_periodo").val(),
        matricula_id: matricula_id
    };
    $.ajax({
        type: 'post',
        url: Routing.generate('comprobar_registros'),
        data: data,
        success: function (data) {
            if(data == false){
                celda = "<medium><span class='glyphicon glyphicon-remove'></span></medium>";
                $("#check_nota_"+ indice +"").empty();
                $("#check_nota_"+ indice +"").append(celda).hide().fadeIn(200);
            } else {
                celda = "<medium><span class='glyphicon glyphicon-ok'></span></medium>";
                $("#check_nota_"+ indice +"").empty();
                $("#check_nota_"+ indice +"").append(celda).hide().fadeIn(200);
            }
        }
    });
}

//Instancia las matriculas en el combo y en la lista
function setearMatriculas(data) {
    var $matricula_selector = $('#nota_matricula');
    $('#head_tabla_mats').addClass("hidden");
    $matricula_selector.removeAttr("disabled");
    $matricula_selector.html('<option>-- Seleccionar un Estudiante --</option>');
    $('#body_tabla_mats').empty();
    $('#nota_nota').val("");
    $('#head_tabla_mats').removeClass("hidden");
    $('#body_tabla_mats').append(crearTablaMatriculas(data));

    for (var i = 0; i < data.length; i++) {
        $matricula_selector.append('<option value="' + data[i]["id"] + '">' + data[i]["id"] + ' - ' + data[i]["nombre"] + '</option>');
    }
    $('#panel_escoger_est').slideDown(400);
}



// Crear las competencias de la asignatura y sus campos de notas correspondientes
function setearCompetencias(data) {
    var $competencia_selector = $('#nota_competencia');
    $competencia_selector.removeAttr("disabled");
    $('#nota_nota').removeAttr("disabled");
    $competencia_selector.html('<option>-- Seleccionar una Competencia --</option>');
    for (var i = 0, total = data.length; i < total; i++) {
        $competencia_selector.append('<option value="' + data[i]["id"] + '">' + data[i]["id"] + ' - ' + data[i]["contenido"] + '</option>');
        competencia = "<div class='col-xs-4'>" +
        "<div id='panel_comp_" + i + "' class='panel panel-info'>" +
        "<div class='panel-heading'>" +
        "<h3 class='panel-title'>" + "Competencia " + (i + 1) + "</h3>" +
        "</div>" +
        "<div class='panel-body' style='word-wrap: break-word;'>" +
        data[i]['id'] + " - " + data[i]['contenido'] + "<br/>" +
        "<div class='form-group'>" +
        "<br/>" +
        "<label for='lbl_nota_" + i + "'>" + "Nota: " + "</label>" +
        "<div id='div_nota_" + i + "'>" +
        "<input type='text' id='input_nota_" + i + "' class='form-control' onkeypress='numeros(event)' placeholder='Escriba la nota Ej: 5.0' name='notas[]' />" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>";
        $('#panel_competencias').append(competencia);
        $('#input_nota_' + i).attr('disabled', true);
        $.mask.definitions['#']='[12345]';
        $('#input_nota_' + i).mask("#.9");
    }
    $('#panel_registrar_notas').slideDown(500);
    promedioFlotante();
}


// Notas: Setear inputs visibles en los inputs ocultos del formulario
function setearInputsNota() {
    $("#panel_competencias input").each(function (index)
    {
        $('#input_hide_' + index).val($(this).val());
    });
}

// Notas: Limpia los Inputs de las notas visibles y ocultos
function limpiarInputsNota() {
    $("#panel_competencias input").each(function (index)
    {
        $(this).val("");
    });
}

// Notas: Eliminar los Inputs de las notas
function eliminarInputsNota() {
    $("#panel_competencias input").each(function (index)
    {
        if ($(this).attr('id') === ("input_nota_" + index)) {
            $(this).remove();
        }
    });
}

// Cajas Competencias: Restaura el estilo por defecto
function restaurarPanelesCompetencias(){
    $("#panel_competencias input").each(function (index)
    {
        if($('#panel_comp_' + index).hasClass("panel-danger")){
            $('#panel_comp_' + index).removeClass("panel-danger");
            $('#panel_comp_' + index).addClass("panel-info");
        }  
    });
}

/* Comprobar Competencias */
// Verifica en tiempo real

function comprobarCompetencias(){
    $("#panel_competencias")
    .focusout(function() {
        $("#panel_competencias input").each(function (index)
        {
            if((!$.isNumeric($(this).val())) || parseFloat($(this).val()) > 5){
                $('#panel_comp_' + index).addClass("panel-danger");
            } else {
                $('#panel_comp_' + index).removeClass("panel-danger");
            }  
        });
    });
}

/*  ---  Funciones de Validación --- */

/* Validar Matricula */
// Verifica al enviar

function validarMatricula(){
    var data = {
        matricula_id: $("#nota_matricula").val()
    };
    if(!parseInt($("#nota_matricula").val())){
        $('#div_lista_espera').append("<h4 id='error_matricula'>" + "<span class='label label-danger'>" + "Debes seleccionar un estudiante para continuar." + "</span>" + "</h4>");
        return false;
    }
}

/* Validar Competencias */
// Verifica al enviar

function validarCompetencias(){
    confirmar = 0;
    $("#panel_competencias input").each(function (index)
    {
        if((!$.isNumeric($(this).val())) || parseFloat($(this).val()) > 5){
            $('#panel_comp_' + index).addClass("panel-danger");
            confirmar = 1;
        } else {
            $('#panel_comp_' + index).removeClass("panel-danger");
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
    var posicion = ($("#contenedor_registrar").position().top / 45);
    $("#contenedor_promedio").css({top: posicion});
}

//  --- Fin Módulo Registrar Notas ---  //

/* --- 

Javascript del Módulo Ver Notas

--- */

/* Cargar Datos Iniciales */

$('#nota_asignacion option').clone().appendTo("#combo_asig_ver");
$('#combo_periodo_ver').val($('#combo_periodo_ver :nth-last-child(1)').val());

/* Fin Carga */

// Evento Listener Click Boton Buscar
$('#boton_buscar').on('click', function() {
    $('#div_error_ver').empty();
    if($("#combo_asig_ver").val() != "" && $("#combo_periodo_ver").val() != "0"){
        $("#total_periodo").empty();
        $("#boton_buscar").attr('disabled',true);
        $("#boton_buscar").html("<span class='fa fa-spinner fa-pulse'></span> Buscando");
        crearCabeceraTablaNotas();
    } else {
        espera(6);
        $("#div_info_ver").hide().fadeIn(300);
    }
});


//Evento change combo ver asignaciones
$('#combo_asig_ver').on('change', function() {
    resetearVerNotas();
});

//Evento change combo ver periodos
$('#combo_periodo_ver').on('change', function() {
    resetearVerNotas();
});


//Resetear Campos Ver Notas
function resetearVerNotas(){
    $("#head_row_notas").empty();
    $("#body_tabla_notas").empty();
    $("#contenedor_convenciones").empty();
    $("#panel_tabla_notas").addClass("hidden");
    $("#div_info_ver").hide().fadeIn(0);
    $("#total_periodo").empty();
}


//Crea la cabecera y los datos de la tabla notas
function crearCabeceraTablaNotas(){
    var data = {
        asignacion_id: $("#combo_asig_ver").val(),
    };
    $.ajax({
        url: Routing.generate('select_competencias'),
        data: data,
        method: 'POST',
        dataType: "json",
                //Esto es cuando ya hay una respuesta
                success: function (data) {
                    if (data["asignacion_id"] === "") {
                        if(!$("#panel_tabla_notas").hasClass("hidden")){
                            $("#panel_tabla_notas").addClass("hidden");
                        }
                    } else {     
                        $("#body_tabla_notas").empty();
                        $("#head_row_notas").empty();
                        $("#contenedor_convenciones").empty();
                        $("#panel_tabla_notas").removeClass("hidden");

                    //Header de la Tabla
                    espera(1);
                    head_generica = "<th><strong>"+'ID'+"</strong></th><th><strong>"+'Estudiante'+"</strong></th>";
                    $("#head_row_notas").append(head_generica);
                    for(i = 1; i <= data.length; i++){
                        header = "<th><strong>Comp "+i+"</strong></th>"
                        $("#head_row_notas").append(header);
                        convencion = "<br/><medium><strong>Comp "+ i +": </strong>"+ data[i-1]["contenido"] +
                        "</medium>";
                        $("#contenedor_convenciones").append(convencion);
                        if(i == data.length){
                            header = "<th><strong>Total</strong></th>";
                            $("#head_row_notas").append(header);
                        }
                    } /* Fin For */
                    setearTablaNotas(data.length);
                    $("#div_info_ver").hide();
                }
            },
            error: function () {
            }
        }); 
}

//Setea las notas de los estudiantes de la asignacion elegida en la tabla (Depende del método crearTablaNotas)
function setearTablaNotas(num_competencias){
    var data = {
        asignacion_id: $("#combo_asig_ver").val(),
        periodo_id: $("#combo_periodo_ver").val(),
    };
    $.ajax({
        type: 'post',
        url: Routing.generate('todas_notas'),
        data: data,
        success: function (data) {
            var total_notas_periodo = 0;
            if(data.length > 0){
                // Body de la Tabla
                for(i = 0; i < data.length; i++){
                    datos = "<tr id='estudiante_"+i+"'>"+
                    "<td>"+ data[i]["id"] +"</td>"+
                    "<td>"+ data[i]["nombre"] +"</td>"+
                    "</tr>";
                    $("#body_tabla_notas").append(datos);
                    if(data[i]["notas"][0]){ 
                        total_notas_periodo++;
                        for(j = 0; j < data[i]["notas"][0].length; j++){
                            notas = "<td class='success'>"+ data[i]["notas"][0][j]["nota"] +"</td>";
                            $("#estudiante_"+i+"").append(notas);
                            if(j+1 == data[i]["notas"][0].length){
                                if(data[i]["notas"][1].toFixed("1") <= 2.9){
                                    promedio = "<td style='color: #B12222;' class='success'><strong>"+ data[i]["notas"][1].toFixed("1") +"</strong></td>";
                                } else {
                                    promedio = "<td class='success'><strong>"+ data[i]["notas"][1].toFixed("1") +"</strong></td>"; 
                                }
                                $("#estudiante_"+i+"").append(promedio);
                            }                  
                        }/* Fin segundo for */
                    } else {
                        $("#estudiante_"+i+"").append("<td class='danger' colspan='"+ (num_competencias+1) +"'><strong>"+'El estudiante no tiene notas registradas.'+"</strong></td>");
                    }/* Fin segundo else */
                } /* Fin primer for */
                $("#total_periodo").append(total_notas_periodo + "/" + data.length);
            } /* Fin primer if */
            $("#div_espera_ver").empty();
            $("#boton_buscar").prop("disabled",false);
            $("#boton_buscar").html("<span id='iconoBuscar' class='glyphicon glyphicon-search'></span> Buscar");
            $("#boton_buscar").blur();  
        }
    });
}

//  --- Fin Módulo Ver Notas ---  //