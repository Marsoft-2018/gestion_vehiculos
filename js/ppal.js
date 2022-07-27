$("document").ready(function(){
   
    $("#mnu_dash").click(function(event){
       $("#div_mvto").load("frontend/dash.html");
    });
    
    $("#mnu_preo").click(function(event){
       $("#div_mvto").load("frontend/preoperacional.html");
    });
    
    $("#mnu_mtto").click(function(event){
      $.ajax({
         url:"Vista/Mantenimientos/index.php",
         type: "POST",
         success:function(response){
            $("#div_mvto").html(response);
         },
         error: function(err){
            console.log("Error: "+err);
         }
      });
    });
    
    $("#mnu_vehiculo").click(function(event){
      $.ajax({
         url:"Controlador/vehiculos_controller.php",
         type: "POST",
         data:{accion:"nuevo"},
         success:function(response){
            $("#div_mvto").html(response);
            $('.select2').select2();
         },
         error: function(err){
            console.log("Error: "+err);
         }
      });
    });
    
    $("#mnu_inventario").click(function(event){
       $("#div_mvto").load("frontend/inventario.html");
    });
    
    $("#mnu_consultas").click(function(event){
       $("#div_mvto").load("frontend/consultas.html");
    });
    
    $("#mnu_eds").click(function(event){
       $("#div_mvto").load("frontend/eds.html");
    });
    
    $("#mnu_empresa").click(function(event){
       $("#div_mvto").load("frontend/empresa.html");
    });
    
    $("#mnu_flotas").click(function(event){
       $("#div_mvto").load("frontend/flotas.html");
    });
    
    $("#mnu_peajes").click(function(event){
       $("#div_mvto").load("frontend/peajes.html");
    });
    
    $("#mnu_rutinas").click(function(event){
       $("#div_mvto").load("frontend/rutinas.html");
    });
    
    $("#mnu_sistemas").click(function(event){
       $("#div_mvto").load("frontend/sistemas.html");
    });
    
    $("#mnu_tipo_combustible").click(function(event){
       $("#div_mvto").load("frontend/tipo_combustible.html");
    });
    
    $("#mnu_clase").click(function(event){
       $("#div_mvto").load("frontend/vehiculos_clase.html");
    });
    
    $("#mnu_marca").click(function(event){
       $("#div_mvto").load("frontend/vehiculos_marca.html");
    });
    
    $("#mnu_tipos").click(function(event){
       $("#div_mvto").load("frontend/vehiculos_tipo.html");
    });
    
});