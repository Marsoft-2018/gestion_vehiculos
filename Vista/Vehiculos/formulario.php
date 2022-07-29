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
<div class="container card shadow mb-5">
    <h3 class="mt-3">Información del Vehículo</h3>
    <div class="row mb-3">
        <div class="col-sm-4">
            <label>Placa</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="placa del vehículo" aria-label="Placa" aria-describedby="btnBuscar"  id="placa" value="<?php echo $placa ?>">
                <button class="btn btn-outline-primary" type="button" id="btnBuscar" onclick="cargar_vehiculo()"><i class="fa fa-search"></i></button>
            </div>
            <label>Tipo</label>
            <div class="input-group mb-3">
                <select class="form form-control" id="tipo"> 
                <?php
                    $objTipos = new Tipo();
                    foreach ($objTipos->listar() as $tipo) { 
                        $sel = "";
                        if($tipo['id'] == $idTipo){ $sel = "selected"; }
                        ?>
                        <option value="<?php echo $tipo['id'] ?>" <?php echo $sel ?>>
                            <?php echo $tipo['nombre'] ?>
                        </option>                     
                <?php
                    }
                ?>  
                </select>
                <button class="btn btn-outline-primary" type="button" id="btnTipos" onclick="parametrizarTipos()"><i class="fa fa-plus"></i></button>
            </div>
            <label>Número del Motor</label>
            <input class="form-control" type="text" id="" value="<?php echo $numero_motor ?>">
        </div>

        <div class="col-sm-4">
            <label>Nombre</label>
            <input type="text" class="form-control" id="nombre" value="<?php echo $nombre ?>">

            <label class="mt-3">Tipo de Combustible</label>

            <div class="input-group mb-3">
                <select class="form-control" id="tipo_combustible">
                    <?php
                        $objCombustible = new Tipo_combustible();
                        foreach ($objCombustible->listar() as $combustible) { 
                            $sel = "";
                            if($combustible['id'] == $idTipoCombustible){ $sel = "selected"; }
                            ?>
                            <option value="<?php echo $combustible['id'] ?>" <?php echo $sel; ?>>
                                <?php echo $combustible['nombre'] ?>
                            </option>                     
                    <?php
                        }
                    ?> 
                </select>
                <button class="btn btn-outline-primary" type="button" id="btnCombustibles" onclick="parametrizarCombustibles()"><i class="fa fa-plus"></i></button>
            </div>
            <label>Número del Chasis</label>
            <input class="form-control" type="text" id="" value="<?php echo $numero_chasis ?>">
        </div>

        <div class="col-sm-4">
            <label>Marca</label>
            <div class="input-group mb-3">
                <select class="form form-control" id="marca">
                    <?php
                        $objMarcas = new Marca();
                        echo "Id de marca = ".$idMarca;
                        foreach ($objMarcas->listar() as $marca) { 
                            $sel = "";
                            if($marca['id'] == $idMarca){ $sel = "selected"; }
                            ?>
                            <option value="<?php echo $marca['id'] ?>" <?php echo $sel ?>>
                                <?php echo $marca['nombre'] ?>
                            </option>                     
                    <?php
                        }
                    ?> 
                </select>
                <button class="btn btn-outline-primary" type="button" id="btnMarcass" onclick="parametrizarMarcas()"><i class="fa fa-plus"></i></button>
            </div>
            <label>Flota</label>
            <div class="input-group mb-3">
                <select class="form-control" id="flota"></select>
                <button class="btn btn-outline-primary" type="button" id="btnFlotas" onclick="parametrizarFlotas()"><i class="fa fa-plus"></i></button>
            </div>
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
            <button class="btn btn-success" onclick="listar_vehiculos()"> Listar Vehículos </button>
        </div>
    </div>
</div>