<?php
    require("../Modelo/Conexion.php");
    require("../Modelo/Matenimiento.php");

    $accion = "";

    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
    }

    switch ($accion) {
        case 'cargar':
            $objMantenimiento = new Mantenimiento();
            $objMantenimiento->placa  = $_POST['placa'];
            echo json_encode($objMantenimiento->cargar());
        break;

        case 'agregar': case 'Modificar':
            $objMantenimiento = new Mantenimiento();
            $objMantenimento->placa = $_POST['placa'];
            $objMantenimento->vehiculo = $_POST['vehiculo'];
            $objMantenimento->ultimo_ciclo_de_Mantenimiento = $_POST['ultimo_ciclo_de_Mantenimiento'];
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
            //Aquí se carga a través del controlador la vista con el formulario del mantenimiento
        break;
        
        case 'eliminar':
            $objMantenimiento = new Mantenimiento();
            $objMantenimiento->Placa = $_POST['Placa'];
            $objMantenimiento->eliminar();
        break;
        case 'listar':
            $objMantenimiento = new Mantenimiento();           
            $objMantenimiento->vehiculo  = $_POST['vehiculo'];
            $objMantenimiento->empresa = $_POST['empresa'];
            $objMantenimiento->valor  = $_POST['valor'];
            echo json_encode( $objMantenimiento->listar());
        break;
       
        default:
            # code...
            break;
    }