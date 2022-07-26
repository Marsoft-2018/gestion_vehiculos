<?php
    $id = "";
    $placa = "";
    $nombre = "";
    $idMarca = "";
    $idTipo = "";
    $idTipoCombustible = "";
    $numero_motor = "";
    $numero_chasis = "";
    $modelo = "";
    $idEmpresaSoat = "";
    $fecha_reg = "";
    $estado = "";

    if($accion == "editar"){
        $objVehiculo->placa = $_REQUEST['placa'];
        foreach ($objVehiculo->cargar() as $vehiculo) {
            $id = $vehiculo["id"];
            $placa = $vehiculo["placa"];
            $nombre = $vehiculo["nombre"];
            $idMarca = $vehiculo["idMarca"];
            $idTipo = $vehiculo["idTipo"];
            $idTipoCombustible = $vehiculo["idTipoCombustible"];
            $numero_motor = $vehiculo["numero_motor"];
            $numero_chasis = $vehiculo["numero_chasis"];
            $modelo = $vehiculo["modelo"];
            $idEmpresaSoat = $vehiculo["idEmpresaSoat"];
            $fecha_reg = $vehiculo["fecha_reg"];
            $estado = $vehiculo["estado"];
            $btnFuncion = "modificarVehiculo('".$placa."')";
        }
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Vehículos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container card shadow mt-3 mb-5">
    <h3 class="mt-3">Información del Vehículo</h3>
    <div class="row mb-3">
        <div class="col-sm-4">
            <label>Placa</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="placa del vehículo" aria-label="Placa" aria-describedby="btnBuscar"  id="placa" value="<?php echo $placa ?>">
                <button class="btn btn-outline-primary" type="button" id="btnBuscar" onclick="cargar_vehiculo()"><i class="fa fa-search"></i></button>
            </div>
            <label>Tipo</label>
            <select class="js-example-basic-multiple form-control" id="tipo"> 
                <option value="AL">Alabama</option> 
                <option value="WY">Wyoming</option> 
            </select>
            <label>Número del Motor</label>
            <input class="form-control" type="text" id="" value="<?php echo $numero_motor ?>">
        </div>

        <div class="col-sm-4">
            <label>Nombre</label>
            <input type="text" id="" value="<?php echo $nombre ?>">
            <label>Tipo de Combustible</label>
            <select class="form-control" id="tipo_combustible"></select>
            <label>Número del Chasis</label>
            <input class="form-control" type="text" id="" value="<?php echo $numero_chasis ?>">
        </div>

        <div class="col-sm-4">
            <label>Marca</label>
            <select class="form-control" id="marca" ></select>
            <label>Flota</label>
            <select class="form-control" id="flota"></select>
            <label>Modelo</label>
            <input class="form-control" type="text" id="" value="<?php echo $modelo ?>">
        </div>
    </div>

    
    <div class="row mb-3">
        <h3>Información de los seguros</h3>
        <div class="col-sm-4">
            <label>Empresa SOAT</label>
            <select class="form-control"></select>
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="text" id="" value="">
        </div>
        <div class="col-sm-4">
            <label>Aseguradora Extracontractual</label>
            <select class="form-control"></select>
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="text" id="" value="">
        </div>
        <div class="col-sm-4">
            <label>CDA Tecnico-Mecánica</label>
            <select class="form-control"></select>
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="text" id="" value="">
        </div>
    </div>
    

    <div class="row mb-3">
        <h3>Información de Mantenimiento</h3>
        <div class="col-sm-2">
            <label>Fecha del último Mantenimiento</label>
            <input class="form-control" type="date">
            
        </div>
        <div class="col-sm-2">
            <label>Kilometraje último Mantenimiento</label>
            <input class="form-control" type="text" id="" value="">
        </div>
        <div class="col-sm-2">
            <label>Km para realizar Mantenimiento</label>
            <input class="form-control" type="text" id="" value="" disabled>

        </div>
        <div class="col-sm-2">
            <label>Km del último recorrido</label>
            <input class="form-control" type="text" id="" value="" disabled>
        </div>
        <div class="col-sm-2">
            <label>Promedio de recorrido día</label>
            <input class="form-control" type="text" id="" value="" disabled>
        </div>
    </div>


    <div class="row mb-3">
        <h3>Rendimiento de Combustible</h3>
        <div class="col-sm-3">
            <label>Km por galón según fabricante</label>
            <select class="form-control"></select>
        </div>
        <div class="col-sm-3">
            <label>Km por galón real</label>
            <input class="form-control" type="text" id="" value="">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <button class="btn btn-primary" onclick="<?php $btnFuncion ?>"> Grabar </button>
        </div>
    </div>
</div>
    </body>
</html>