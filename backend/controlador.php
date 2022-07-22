<?php
    
    require_once 'modelo.php';
    header("Content-Type: text/html;charset=utf-8");
    $llamador= $_POST['llamador'];      //Contiene la pantalla que llama
    $resp="No se pudo realizar la conexión a la DB";
    
    /***** FUNCIONES VALIDADAS PARA LA VERSION 2*****/
   if($llamador=="cargar_combo"){
        $sql="SELECT Id, Nbre FROM tipo_propiedad WHERE Activo=1 ORDER BY Nbre ASC";
        $resp = consultas::traer_json($sql);
          
    }
    echo $resp;
    return $resp;