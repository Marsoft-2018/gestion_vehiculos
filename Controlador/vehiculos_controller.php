<?php
    require("../Modelo/Conexion.php");
    require("../Modelo/Vehiculo.php");

    $accion = "";

    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }

    switch ($accion) {
        case 'cargar':
            $objVehiculo = new Vehiculo();
            $objVehiculo->placa  = $_POST['placa'];
            echo json_encode($objVehiculo->cargar());
        break;

        case 'agregar': case 'Modificar':
            $objVehiculo = new Vehiculo();
            $objMantenimento->placa = $_POST['placa'];
            $objMantenimento->vehiculo = $_POST['vehiculo'];
            $objMantenimento->ultimo_ciclo_de_Vehiculo = $_POST['ultimo_ciclo_de_Vehiculo'];
            $objMantenimento->ciclo_Recomendado = $_POST['ciclo_Recomendado'];
            $objMantenimento->fecha = $_POST['fecha'];
            $objMantenimento->numero_de_Factura = $_POST['numero_de_Factura'];
            $objMantenimento->empresa = $_POST['empresa'];
            $objMantenimento->valor = $_POST['valor'];
            $objMantenimento->observaciones = $_POST['observaciones'];
            $objMantenimento->codigo_del_servicio_Producto = $_POST['codigo_del_servicio_Producto'];
            $objMantenimento->nombre_del_servicio_Producto = $_POST['nombre_del_servicio_Producto'];
            $objMantenimento->cantidad = $_POST['cantidad'];
            $objMantenimento->valor_Unit = $_POST['valor_Unit'];
            $objMantenimento->valor_Total = $_POST['valor_Total'];

            if($accion === "agregar"){
                $objMantenimento->agregar();
            }else{
                $objMantenimento->modificar();
            }
        break;

        case 'nuevo' : case "editar":
            echo "Esta en la seccion de: ".$accion;
            $objVehiculo = new Vehiculo();
            $btnFuncion ="agregarVehiculo()";
            include("../Vista/Vehiculos/formulario.php");
        break;
        
        case 'eliminar':
            $objVehiculo = new Vehiculo();
            $objVehiculo->Placa = $_POST['Placa'];
            $objVehiculo->eliminar();
        break;
        case 'listar':
            $objVehiculo = new Vehiculo();           
            $objVehiculo->vehiculo  = $_POST['vehiculo'];
            $objVehiculo->empresa = $_POST['empresa'];
            $objVehiculo->valor  = $_POST['valor'];
            echo json_encode( $objVehiculo->listar());
        break;
       
        default:
            # code...
            break;
    }