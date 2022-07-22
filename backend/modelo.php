<?php
    header("Content-Type: text/html;charset=utf-8");
    
class consultas{
    
    public static function traer_json($sql){
        $rows="no se pudo conectar";
        $host = "localhost"; $nbre_DB = "equipos"; $usuario= "root"; $password = "";
        try{
            $dsn = "mysql:host=".$host.";dbname=".$nbre_DB;
            $pdo = new PDO($dsn, $usuario, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("SET NAMES 'utf8';");
            $rows = array(); $stmt = $pdo->prepare($sql);
            $stmt->execute(); $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){ echo "Ocurrio un ERROR al consultar: " . $e->getMessage();}  
        
        return json_encode($rows);
    }
}


class modificar{
    public static function modificar_datos($sql){
        $host = "localhost"; $nbre_DB = "equipos"; $usuario= "root"; $password = "";
        $resp="Datos pendientes por actualizar";
        try{
            $dsn = "mysql:host=".$host.";dbname=".$nbre_DB;
            $pdo = new PDO($dsn, $usuario, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("SET NAMES 'utf8';");
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $resp="Datos actualizados";
        }catch(PDOException $e){ $resp="Ocurrio un ERROR: " . $e->getMessage(); }   
        return $resp;
        
        
    }
    
}




class grabar{    
       
    public static function grabar_registro($sql){
        $host = "localhost"; $nbre_DB = "equipos"; $usuario= "root"; $password = "";
        $last_id="0";   //Id del ��ltimo registro grabado
        try{
            $dsn = "mysql:host=".$host.";dbname=".$nbre_DB;
            $pdo = new PDO($dsn, $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $last_id = $pdo->lastInsertId();
        }catch(PDOException $e){ $last_id="Ocurrio un ERROR: " . $e->getMessage(); }  
        return $last_id;
    }
    
}
