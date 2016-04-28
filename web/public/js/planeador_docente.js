var numero_tema = 0;

$("#add").click(function() {
    numero_tema++;

    var fila ='<tr id="tema_'+ numero_tema +'">'+ 
    '<td id="id_tema_'+ numero_tema +'">'+ numero_tema +'</td>'+
    '<td>' +
    '<input id="nomTema_' + numero_tema + '" type="text" class="form-control" placeholder="Escriba el Tema" name="nomTema[]" /></td>'+
    '<td>' +
    '<div style="width: 250px" class="input-daterange input-group" id="datepicker">'+
    '<input id="fechain_tema_'+ numero_tema +'" type="text" name="fechaIn[]" class="input-sm form-control" />'+
    '<span style="color: white;" class="input-group-addon label-primary">'+ 'Hasta' +'</span>'+
    '<input id="fechafin_tema_'+ numero_tema +'" type="text" name="fechaFin[]" class="input-sm form-control" />'+
    '</div>'+
    '</td>'+
    '<td><button id="btn_remove_'+ numero_tema +'" type="button" class="btn btn-danger" onclick="eliminarTema(this.id)"><small><span class="glyphicon glyphicon-remove"></span></small></button></td>'+
    '</tr>';

    $("#body_tabla_plan").append(fila);

    var fecha_in =  $("#fecha_inicio_per").data("path");
    var fecha_fin = $("#fecha_final_per").data("path");

    $('.input-daterange').datepicker({
      format: "dd/mm/yyyy",
      startDate: fecha_in,
      endDate: fecha_fin,
      daysOfWeekDisabled: "0,6"
  });

    if($("#tabla_plan").hasClass("hidden")){
        $("#tabla_plan").removeClass("hidden");
        $("#temas_vacio").addClass("hidden");
    }

});


function eliminarTema(btn_id){
    numero_tema--;
    var id_tema = btn_id.substring(11, 12);
    $("#tema_"+ id_tema +"").remove();
    if(numero_tema == 0){
        $("#tabla_plan").addClass("hidden");
        $("#temas_vacio").removeClass("hidden");
    } else {
        reasignarTemas();
    }
}

function reasignarTemas(){   
    $("#body_tabla_plan tr").each(function (index)
    {   
        $(this).attr("id", "tema_"+ (index+1)+"");
        $(this).children(':first-child').attr("id", "id_tema_"+ (index+1)+"");
        $(this).children(':first-child').html(index+1);
        $(this).children(':nth-child(2)').children(':nth-child(1)').attr("id", "nomTema_"+ (index+1)+"");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').attr("id", "fechain_tema_"+ (index+1)+"");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(3)').attr("id", "fechafin_tema_"+ (index+1)+"");
        $(this).children(':nth-child(4)').children(':nth-child(1)').attr("id", "btn_remove_"+ (index+1)+"");
        
    });
}
