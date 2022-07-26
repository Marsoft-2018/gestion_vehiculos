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
    alert("Esta jodia qué?: placa "+placa);
    $.ajax({
        url:"Controlador/vehiculos_controller.php",
        type: "POST",
        data:{accion:"editar",placa:placa},
        success:function(response){
           $("#div_vehiculo").html(response);
        },
        error: function(err){
           console.log("Error: "+err);
        }
     });
}