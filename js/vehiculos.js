function nuevo_vehiculo(){
    $.ajax({
        url:"Controlador/vehiculos_controller.php",
        type: "POST",
        data:{accion:"nuevo"},
        success:function(response){
           $("#div_vehiculo").html(response);
        },
        error: function(err){
           console.log("Error: "+err);
        }
     });
}

function cargar_vehiculo(){
    var placa = $("#placa").val();
    $.ajax({
        url:"Controlador/vehiculos_controller.php",
        type: "POST",
        data:{accion:"editar",placa:placa},
        success:function(response){
         console.log(response);
           $("#div_mvto").html(response);
        },
        error: function(err){
           console.log("Error: "+err);
        }
     });
}